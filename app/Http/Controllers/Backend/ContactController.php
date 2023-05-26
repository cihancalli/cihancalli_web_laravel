<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Contact;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at','DESC')->get();
        $trashed = Contact::onlyTrashed()->orderBy('created_at','DESC')->get();
        return view('backend.contacts.index',compact('contacts','trashed'));
    }

    public function sendMail($mail){
        $message= 'test mail';
        Mail::to($mail)->send(new MyMail($message));
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::find($id);
        return view('backend.contacts.view',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function undelete($id){
        $contact = Contact::onlyTrashed()->find($id);
        $contact->restore();
        $contacts = Contact::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Contact::orderBy('created_at','DESC')->get();
        toastr()->success('Successfully contact restore',$contact->contact_name);
        return view('backend.contacts.trashed',compact('contacts','untrashed'));
    }
    public function delete($id)
    {
        $contact = Contact::where('id',$id)->first();
        Contact::where('id', '=',  $id)->delete();
        toastr()->success('Successfully contact trashed',$contact->contact_name);
        return redirect()->route('admin.contacts.index');
    }

    public function trashed(){
        $contacts = Contact::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Contact::orderBy('created_at','DESC')->get();
        return view('backend.contacts.trashed',compact('contacts','untrashed'));
    }

    public function harddelete($id)
    {
        $contact = Contact::onlyTrashed()->find($id);
        Contact::onlyTrashed()->find($id)->forceDelete();
        toastr()->success('Successfully contact deleted',$contact->contact_name);
        return redirect()->route('admin.contact.trashed');
    }
}
