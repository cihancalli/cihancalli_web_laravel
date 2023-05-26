<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\File;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at','DESC')->get();
        $trashed = Category::onlyTrashed()->orderBy('created_at','DESC')->get();
        return view('backend.categories.index',compact('categories','trashed'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'min:3|max:100',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:16384'
        ]);
        $category = new Category;
        $category->category_name = $request->name;

        if ($request->hasFile('image')) {
            $imageName = Str::slug(Str::limit($request->name, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $category->imageUrl = route('homepage').'/uploads/'.$imageName;
        }
        else{$category->imageUrl = route('homepage').'/uploads/'."placeholder-800x540.jpg";}

        $category->category_slug = Str::slug($request->name);
        $category->save();
        toastr()->success('Successfully category created',$request->name);
        return redirect()->route('admin.categories.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $category = Category::find($id);
        return view('backend.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('backend.categories.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'min:3|max:100',
            'image'=>'image|mimes:jpeg,png,jpg|max:16384'
        ]);
        $category = Category::findOrFail($id);
        $category->category_name = $request->name;

        if ($request->hasFile('image')) {
            //$request->timezone
            $imageName = Str::slug(Str::limit($request->name, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $category->imageUrl = route('homepage').'/uploads/'.$imageName;
        }
        $category->category_slug = Str::slug($request->name);
        $category->save();
        toastr()->success('Successfully category update',$request->name);
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function undelete($id){
        $category = Category::onlyTrashed()->find($id);
        $category->restore();
        $categories = Category::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Category::orderBy('created_at','DESC')->get();
        toastr()->success('Successfully category restore',$category->category_name);
        return view('backend.categories.trashed',compact('categories','untrashed'));
    }
    public function delete($id)
    {
        $category = Category::where('id',$id)->first();
        Category::where('id', '=',  $id)->delete();
        toastr()->success('Successfully category trashed',$category->category_name);
        return redirect()->route('admin.categories.index');
    }

    public function trashed(){
        $categories = Category::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Category::orderBy('created_at','DESC')->get();
        return view('backend.categories.trashed',compact('categories','untrashed'));
    }

    public function harddelete($id)
    {
        $category = Category::onlyTrashed()->find($id);
        Category::onlyTrashed()->find($id)->forceDelete();
        toastr()->success('Successfully category deleted',$category->category_name);
        return redirect()->route('admin.category.trashed');
    }
}
