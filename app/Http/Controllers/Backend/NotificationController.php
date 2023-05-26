<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FcmUser;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Notification;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;
class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::orderBy('created_at','DESC')->get();
        $trashed = Notification::onlyTrashed()->orderBy('created_at','DESC')->get();
        return view('backend.notifications.index',compact('notifications','trashed'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fcm_users = FcmUser::all();
        return view('backend.notifications.create',compact('fcm_users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3|max:100',
            'message'=>'min:3|max:100',
        ]);

        $notification = new Notification;
        $notification->notification_title = $request->title;
        $notification->notification_body = $request->message;
        $notification->fcm_user_id = $request->fcm_user_id;
        //dd($request->post());
        $this->sendNotification($request);
        $notification->save();
        return redirect()->route('admin.notifications.index');
    }

    function sendNotification(Request $request)  {
        $client = new Client();
        $endpoint = getenv('FCM_API_URL');
        $api_key = getenv('FCM_API_KEY');
        $token = FcmUser::find($request->fcm_user_id);
        $device_token = $token->device_token;
        $title = $request->title;
        $message = $request->message;

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
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
