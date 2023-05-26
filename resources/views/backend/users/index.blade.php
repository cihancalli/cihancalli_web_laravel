@extends('backend.layouts.master')
@section('backendTitle','All Users')
@section('backendContent')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('backendTitle')
                <span class="float-right">Found {{$users->count()}} users.</strong>
                <a href="{{route('admin.user.trashed')}}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Deleted Users ({{$trashed->count()}})</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">Image</th>
                        <th style="text-align:center; vertical-align: middle;">Username</th>
                        <th style="text-align:center; vertical-align: middle;">Role</th>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Status</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$user->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$user->imageUrl}}">
                            </td>

                            <td style="vertical-align: middle;"
                                title="{{$user->username}}">{{$user->username}}</td>
                            <td style="vertical-align: middle;"
                                title="{{$user->getRole->role_name}}">{{$user->getRole->role_name}}</td>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($user->created_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center; vertical-align: middle;">
                                @if($user->getRole->id !=1)
                                    @if($user->status == 1)
                                        <a href="{{ route('admin.user.status', $user->id)}}">
                                            <button class="btn btn-success sml">Enabled</button>
                                        </a>
                                    @else
                                        <a href="{{ route('admin.user.status', $user->id)}}">
                                            <button class="btn btn-warning sml">Disabled</button>
                                        </a>
                                    @endif
                                @else
                                    <a class="alert alert-dark sml" style="text-decoration: none;pointer-events: none">Immutable</a>
                                @endif
                            </td>
                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.users.edit', $user->id)}}" title="Edit"
                                   class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                @if($user->getRole->id !=1)
                                <a href="{{route('admin.user.delete', $user->id)}}" title="Delete"
                                   class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
