@extends('backend.layouts.master')
@section('backendTitle','Trashed Pages')
@section('backendContent')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('backendTitle')
                <span class="float-right">Found {{$pages->count()}} pages.</strong>
                    <a href="{{route('admin.pages.index')}}" class="btn btn-success btn-sm">All Pages ({{$untrashed->count()}})</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Deleted</th>
                        <th style="text-align:center; vertical-align: middle;">Image</th>
                        <th style="text-align:center; vertical-align: middle;">Name</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($page->created_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($page->deleted_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$page->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$page->imageUrl}}">
                            </td>

                            <td style="vertical-align: middle;"
                                title="{{$page->page_title}}">{{$page->page_title}}</td>

                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.page.undelete', $page->id)}}" title="Undelete"
                                   class="btn btn-sm btn-primary"><i class="fa fa-undo"></i></a>
                                <a href="{{route('admin.page.harddelete', $page->id)}}" title="Delete"
                                   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
