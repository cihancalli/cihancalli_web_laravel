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

class Homepage extends Controller
{
    public function __construct()
    {
        //view()->share('pages', Page::orderBy('order', 'ASC')->get());
    }

    function theme(): string
    {
        $cihan = 'cihancalli';
        $zerda = 'zerdasoftware';
        $life = 'lifeyapidekorasyon';
        return $zerda;
    }

    public function index()
    {
        //$data['posts'] = Post::orderBy('created_at', 'desc')->where('published', true)->paginate(3);
        //$data['posts']->withPAth(url('/blog/sayfalar/'));
        return view('frontend.'.$this->theme().'.homepage');
    }



    public function page($slug)
    {

        $page = Page::wherePageSlug($slug)->first() ?? abort(403, 'Böylebir sayfa bulunamadı...');
        if ($page->published == 1) {
            $data['page'] = $page;
            return view('frontend.'.$this->theme().'.page', $data);
        }

    }

    public function aboutpage()
    {
        return view('frontend.'.$this->theme().'.aboutpage');
    }

    public function termspage()
    {
        return view('frontend.'.$this->theme().'.termspage');
    }

    public function contactpage()
    {
        return view('frontend.'.$this->theme().'.contactpage');
    }

    public function contactpagepost(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|min:10'
        ];
        $validate = Validator::make($request->post(), $rules);

        if ($validate->fails()) {
            return redirect()->route('contact')->withErrors($validate)->withInput();
        }

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact')->with('success', 'Mesajınız bize iletildi. Teşekkür ederiz!');
    }
}
