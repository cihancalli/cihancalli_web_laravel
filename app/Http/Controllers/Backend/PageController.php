<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::orderBy('created_at','DESC')->get();
        $trashed = Page::onlyTrashed()->orderBy('created_at','DESC')->get();
        return view('backend.pages.index',compact('pages','trashed'));
    }

    public function published($id)
    {
        $pages = Page::find($id);
        $pages->published = !$pages->published;
        $pages->save();
        return redirect()->back();
    }

    public function orderUp($id)
    {
        $pages = Page::find($id);
        $pages->order = $pages->order-1;
        $pages->save();
        return redirect()->back();
    }

    public function orderDown($id)
    {
        $pages = Page::find($id);
        $pages->order = $pages->order+1;
        $pages->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3|max:100',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:16384'
        ]);
        $page = new Page;
        $page->page_title = $request->title;
        $page->order = $request->order;
        $page->page_content = $request->contents;

        $myHtmlContent = strip_tags($request->contents."..").".";
        $page->page_summary = substr($myHtmlContent, 0, 150);

        if ($request->hasFile('image')) {
            //$request->timezone
            $imageName = Str::slug(Str::limit($request->title, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $page->imageUrl = route('homepage').'/uploads/'.$imageName;
        }
        else{$page->imageUrl = route('homepage').'/uploads/'."placeholder-800x540.jpg";}

        $page->page_slug = Str::slug($request->title);
        $page->save();
        toastr()->success('Successfully page created',$request->title);
        return redirect()->route('admin.pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page = Page::find($id);
        return view('backend.pages.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = Page::find($id);
        return view('backend.pages.update',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'min:3|max:100',
            'image'=>'image|mimes:jpeg,png,jpg|max:16384'
        ]);
        $page = Page::findOrFail($id);
        $page->page_title = $request->title;
        $page->order = $request->order;
        $page->page_content = $request->contents;

        $myHtmlContent = strip_tags($request->contents."..").".";
        $page->page_summary = substr($myHtmlContent, 0, 150);

        if ($request->hasFile('image')) {
            //$request->timezone
            $imageName = Str::slug(Str::limit($request->title, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $page->imageUrl = route('homepage').'/uploads/'.$imageName;
        }
        $page->page_slug = Str::slug($request->title);
        $page->save();
        toastr()->success('Successfully page update',$request->title);
        return redirect()->route('admin.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function undelete($id){
        $page = Page::onlyTrashed()->find($id);
        $page->restore();
        $pages = Page::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Page::orderBy('created_at','DESC')->get();
        toastr()->success('Successfully page restore',$page->page_title);
        return view('backend.pages.trashed',compact('pages','untrashed'));
    }
    public function delete($id)
    {
        $page = Page::where('id',$id)->first();
        $page->published = !$page->published;
        $page->save();
        Page::where('id', '=',  $id)->delete();
        toastr()->success('Successfully page trashed',$page->page_title);
        return redirect()->route('admin.pages.index');
    }

    public function trashed(){
        $pages = Page::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Page::orderBy('created_at','DESC')->get();
        return view('backend.pages.trashed',compact('pages','untrashed'));
    }

    public function harddelete($id)
    {
        $page = Page::onlyTrashed()->find($id);
        Page::onlyTrashed()->find($id)->forceDelete();
        toastr()->success('Successfully page deleted',$page->page_title);
        return redirect()->route('admin.page.trashed');
    }
}
