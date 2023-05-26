@extends('backend.layouts.master')
@section('backendTitle','All Categories')
@section('backendContent')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('backendTitle')
                <span class="float-right">Found {{$categories->count()}} categories.</strong>
                    <a href="{{route('admin.category.trashed')}}" class="btn btn-warning btn-sm"><i
                            class="fa fa-trash"></i> Deleted Categories ({{$trashed->count()}})</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Image</th>
                        <th style="text-align:center; vertical-align: middle;">Name</th>
                        <th style="text-align:center; vertical-align: middle;">Status</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($category->created_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$category->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$category->imageUrl}}">
                            </td>
                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$category->category_name}}">
                                <a href="{{route('category',$category->category_slug)}}" target="_blank"
                                   class="btn btn-link"> {{$category->category_name}}</a>
                            </td>

                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$category->category_name}}">
                                <div class="row align-items-center">
                                    <div class="col">
                                        {{$category->postPublishedCount()}}/{{$category->postCount()}} <i
                                            class="fa fa-share-alt"> </i>
                                    </div>
                                    <div class="col">
                                        {{$category->postTrashedCount()}} <i class="fa fa-trash"> </i>
                                    </div>
                                </div>
                            </td>

                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.categories.edit', $category->id)}}" title="Edit"
                                   class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                @if($category->postCount() == 0 && $category->postTrashedCount() == 0)
                                    <a href="{{route('admin.category.delete', $category->id)}}" title="Delete"
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
