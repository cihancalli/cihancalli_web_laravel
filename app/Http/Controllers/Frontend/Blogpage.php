<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Validator;

//Models
use App\Models\Page;
use App\Models\User;
use App\Models\Role;
use App\Models\Post;
use App\Models\Category;
use App\Models\Contact;


class Blogpage extends Controller
{

    public function __construct()
    {
        view()->share('pages', Page::orderBy('order', 'ASC')->get());

    }

    function web(): string
    {
        $cihan = 'cihancalli';
        $zerda = 'zerdasoftware';
        $life = 'lifeyapidekorasyon';
        return $zerda;
    }

    public function index()
    {
        $data['posts'] = Post::orderBy('created_at', 'desc')->where('published', true)->paginate(7);
        $data['posts']->withPAth(url('/blog/pages/'));

        //$posts = Post::all();
        /*
         * foreach ($posts as $post){
            $post->imageUrl = route('homepage').'/uploads/'.'zerda-software-2023-05-21-161844.png';
            $post->save();
        }
         */
        return view('frontend.'.$this->web().'.blogs', $data);
    }

    public function blogpage($cSlug, $pSlug)
    {
        $category = Category::where('category_slug', $cSlug)->first() ?? abort(403, 'No such category was found...');
        $post = Post::where('post_slug', $pSlug)->whereCategoryId($category->id)->first() ?? abort(403, 'No such post was found...');
        $post->increment('view');
        $data['categories'] = Category::orderBy('created_at', 'desc')->get();
        $data['post'] = $post;
        $data['posts'] = Post::orderBy('created_at', 'desc')->where('published', true)->take(5)->get();
        return view('frontend.'.$this->web().'.blogpage', $data);
    }

    public function blogpages($slug)
    {
        $post = Post::where('post_slug', $slug)->first() ?? abort(403, 'No such page was found...');
        return redirect()->route('blog.page',[$post->getCategory->category_slug,$post->post_slug]);

        //$category = Category::where('category_slug', $slug)->first() ?? abort(403, 'No such page was found...');
        //return redirect()->route('category',$category->category_slug);
    }

    public function category($slug)
    {
        $category = Category::where('category_slug', $slug)->first() ?? abort(403, 'No such category was found...');
        $data['posts'] = Post::whereCategoryId($category->id)->orderBy('created_at', 'DESC')->paginate(7);
        $data['posts']->withPAth(url('/blog/'.$slug.'/pages/'));
        $data['category'] = $category;
        return view('frontend.'.$this->web().'.category', $data);
    }

    public function page($slug)
    {

    }
}
