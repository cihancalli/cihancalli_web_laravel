@extends('backend.layouts.master')
@section('backendTitle','Trashed Categories')
@section('backendContent')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('backendTitle')
                <span class="float-right">Found {{$categories->count()}} categories.</strong>
                    <a href="{{route('admin.categories.index')}}" class="btn btn-success btn-sm">All Categories ({{$untrashed->count()}})</a>
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
                    @foreach($categories as $category)
                        <tr>

                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($category->created_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($category->deleted_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$category->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$category->imageUrl}}">
                            </td>

                            <td style="vertical-align: middle;"
                                title="{{$category->category_name}}">{{$category->category_name}}</td>
                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.category.undelete', $category->id)}}" title="Undelete"
                                   class="btn btn-sm btn-primary"><i class="fa fa-undo"></i></a>
                                <a href="{{route('admin.category.harddelete', $category->id)}}" title="Delete"
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
