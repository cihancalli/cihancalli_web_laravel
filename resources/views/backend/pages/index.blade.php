@extends('backend.layouts.master')
@section('backendTitle','All Pages')
@section('backendContent')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('backendTitle')
                <span class="float-right">Found {{$pages->count()}} pages.</strong>
                    <a href="{{route('admin.page.trashed')}}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Deleted Pages ({{$trashed->count()}})</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Image</th>
                        <th style="text-align:center; vertical-align: middle;">Title</th>
                        <th style="text-align:center; vertical-align: middle;">Order</th>
                        <th style="text-align:center; vertical-align: middle;">Published</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($page->created_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$page->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$page->imageUrl}}">
                            </td>

                            <td style="vertical-align: middle;"
                                title="{{$page->page_title}}">
                                <a href="{{route('page',$page->page_slug)}}"
                                   target="_blank" class="btn btn-link">
                                    {{$page->page_title}}
                                </a>

                            </td>
                            <td style="text-align:center; vertical-align: middle;">

                                <div class="row align-items-center">
                                    <div class="col">
                                        {{$page->order}}
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            @if($page->order>0)
                                                <div class="col align-self-start">
                                                    <a href="{{ route('admin.page.orderUp', $page->id)}}" title="Up"
                                                       class="btn btn-sm btn-success"><i
                                                            class="fa fa-chevron-up"></i></a>
                                                </div>
                                            @endif
                                                <hr/>
                                            <div class="col align-self-end">
                                                <a href="{{ route('admin.page.orderDown', $page->id)}}" title="Down"
                                                   class="btn btn-sm btn-warning"><i class="fa fa-chevron-down"></i></a>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </td>

                            <td style="text-align:center; vertical-align: middle;">
                                @if($page->published == 1)
                                    <a href="{{ route('admin.page.published', $page->id)}}">
                                        <button class="btn btn-success sml">Enabled</button>
                                    </a>
                                @else
                                    <a href="{{ route('admin.page.published', $page->id)}}">
                                        <button class="btn btn-warning sml">Disabled</button>
                                    </a>
                                @endif

                            </td>
                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.pages.edit', $page->id)}}" title="Edit"
                                   class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="{{route('admin.page.delete', $page->id)}}" title="Delete"
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
