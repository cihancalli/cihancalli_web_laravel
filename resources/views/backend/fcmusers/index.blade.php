@extends('backend.layouts.master')
@section('backendTitle','All Posts')
@section('backendContent')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('backendTitle')
                <span class="float-right">Found {{$posts->count()}} posts.</strong>
                <a href="{{route('admin.post.trashed')}}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Deleted Posts ({{$trashed->count()}})</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">Image</th>
                        <th style="text-align:center; vertical-align: middle;">Title</th>
                        <th style="text-align:center; vertical-align: middle;">Category</th>
                        <th style="text-align:center; vertical-align: middle;">Views</th>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Published</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$post->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$post->imageUrl}}">
                            </td>

                            <td style="vertical-align: middle;"
                                title="{{$post->post_title}}">{{\Illuminate\Support\Str::limit($post->post_title,15)}}</td>
                            <td style="vertical-align: middle;"
                                title="{{$post->getCategory->category_name}}">{{$post->getCategory->category_name}}</td>
                            <td style="text-align:center; vertical-align: middle;">{{$post->view}}</td>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center; vertical-align: middle;">
                                @if($post->published == 1)
                                    <a href="{{ route('admin.post.published', $post->id)}}">
                                        <button class="btn btn-success sml">Enabled</button>
                                    </a>
                                @else
                                    <a href="{{ route('admin.post.published', $post->id)}}">
                                        <button class="btn btn-warning sml">Disabled</button>
                                    </a>
                                @endif

                            </td>
                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('blog.page',$post->post_slug)}}" target="_blank" title="View"
                                   class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{route('admin.posts.edit', $post->id)}}" title="Edit"
                                   class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="{{route('admin.post.delete', $post->id)}}" title="Delete"
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
