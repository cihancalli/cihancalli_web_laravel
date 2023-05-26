@extends('backend.layouts.master')
@section('backendTitle','New Notification')
@section('backendContent')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('adminTitle')</h6>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form method="post" action="{{route('admin.notifications.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Notification Title</label>
                    <input type="text" name="title" class="form-control" required/>
                </div>


                <div class="form-group">
                    <label>Notification Body</label>
                    <textarea id="summernote" name="message" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Notification Device</label>
                    <select name="fcm_user_id" class="form-control" required>
                        <option value="">Please Select Device</option>
                        @foreach($fcm_users as $fcm_user)
                            <option value="{{$fcm_user->id}}">{{$fcm_user->user_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Send Notification</button>
                </div>

            </form>

        </div>
    </div>

@endsection
