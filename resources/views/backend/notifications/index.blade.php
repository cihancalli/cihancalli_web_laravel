@extends('backend.layouts.master')
@section('backendTitle','All Notifications')
@section('backendContent')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('backendTitle')
                <span class="float-right">Found {{$notifications->count()}} notifications.</strong>
                <a href="{{route('admin.notification.trashed')}}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Deleted Notifications ({{$trashed->count()}})</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">title</th>
                        <th style="text-align:center; vertical-align: middle;">message</th>
                        <th style="text-align:center; vertical-align: middle;">Device</th>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notifications as $notification)
                        <tr>
                            <td style="vertical-align: middle;"
                                title="{{$notification->notification_title}}">{{$notification->notification_title}}</td>
                            <td style="vertical-align: middle;"
                                title="{{$notification->notification_body}}">{{$notification->notification_body}}</td>
                            <td style="vertical-align: middle;"
                                title="{{$notification->getFmcUser->user_name}}">{{$notification->getFmcUser->user_name}}</td>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($notification->created_at)->format('d.m.Y-h:s')}}</td>
                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.notification.delete', $notification->id)}}" title="Delete"
                                   class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
