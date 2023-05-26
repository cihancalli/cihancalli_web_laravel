<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FcmUser;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\File;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','DESC')->get();
        $trashed = Post::onlyTrashed()->orderBy('created_at','DESC')->get();
        return view('backend.posts.index',compact('posts','trashed'));
    }

    public function published($id)
    {
        $post = Post::find($id);
        $post->published = !$post->published;
        $post->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.posts.create',compact('categories'));
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



        $post = new Post;
        $post->post_title = $request->title;
        $post->category_id = $request->categoryId;
        $post->post_content = $request->contents;

        $date = $request->input('published');
        $timestamp = Carbon::createFromFormat('Y-m-d\TH:i', $date)->format('Y-m-d H:i:s');
        $post->published_at = $timestamp;
        $post->created_at = $timestamp;
        $post->updated_at = $timestamp;

        $myHtmlContent = strip_tags($request->contents."..").".";
        $post->post_summary = substr($myHtmlContent, 0, 150);

        if ($request->hasFile('image')) {
            //$request->timezone
            $imageName = Str::slug(Str::limit($request->title, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $post->imageUrl = route('homepage').'/uploads/'.$imageName;
        }
        else{$post->imageUrl = route('homepage').'/uploads/'."placeholder-800x540.jpg";}

        $post->post_slug = Str::slug($request->title);
        $post->save();
        $this->sendNotification("cihancalli.com New Post",$request->title);
        toastr()->success('Successfully post created',$request->title);
        return redirect()->route('admin.posts.index');
    }

    function sendNotification(string $title, string $message)  {
        $client = new Client();
        $endpoint = getenv('FCM_API_URL');
        $api_key = getenv('FCM_API_KEY');
        $device_token = 'dcwxGgd1QRG7HJ_E6vqcAi:APA91bGaPO3pcTv8eSww92YoeUiJ9WpaVunxsithKakw96-ST6exacV10AxwCYWM0uxUGP-Z3FCdNro7RSn84I5sbwIAOYVhhluVQRw71srsMo5G4oj9tiGt2LB0K1CeqdmQRRw91ZTK';

        $body = json_encode([
            'to' => $device_token,
            'notification' => [
                'title' => $title,
                'body' => $message,
            ],
        ]);

        $response = $client->post($endpoint, [
            'headers' => [
                'Authorization' => 'key=' . $api_key,
                'Content-Type' => 'application/json',
            ],
            'body' => $body,
        ]);

        $status_code = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        if ($status_code == 200) {toastr()->success('Push notification sent successfully.');}
        else {toastr()->success('Failed to send push notification: ',$body);}
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('backend.posts.show',compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('backend.posts.update',compact('categories','post'));
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
        $post = Post::findOrFail($id);
        $post->post_title = $request->title;
        $post->category_id = $request->categoryId;
        $post->post_content = $request->contents;

        $myHtmlContent = strip_tags($request->contents."..").".";
        $post->post_summary = substr($myHtmlContent, 0, 150);

        if ($request->hasFile('image')) {
            //$request->timezone
            $imageName = Str::slug(Str::limit($request->title, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $post->imageUrl = route('homepage').'/uploads/'.$imageName;
        }
        $post->post_slug = Str::slug($request->title);
        $post->save();
        toastr()->success('Successfully post update',$request->title);
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function undelete($id){
        $post = Post::onlyTrashed()->find($id);
        $post->restore();
        $posts = Post::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Post::orderBy('created_at','DESC')->get();
        toastr()->success('Successfully post restore',$post->post_title);
        return view('backend.posts.trashed',compact('posts','untrashed'));
    }
    public function delete($id)
    {
        $post = Post::where('id',$id)->first();
        $post->published = !$post->published;
        $post->save();
        Post::where('id', '=',  $id)->delete();
        toastr()->success('Successfully post trashed',$post->post_title);
        return redirect()->route('admin.posts.index');
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Post::orderBy('created_at','DESC')->get();
        return view('backend.posts.trashed',compact('posts','untrashed'));
    }

    public function harddelete($id)
    {
        $post = Post::onlyTrashed()->find($id);
        $path = parse_url($post->imageUrl, PHP_URL_PATH);
        $filename = pathinfo($path, PATHINFO_BASENAME);
        if(File::exists($path)){ File::delete(public_path($path)); }
        Post::onlyTrashed()->find($id)->forceDelete();
        toastr()->success('Successfully post deleted',$post->post_title);
        return redirect()->route('admin.post.trashed');
    }
}
