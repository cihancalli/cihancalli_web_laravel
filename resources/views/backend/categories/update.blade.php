@extends('backend.layouts.master')
@section('backendTitle','Edit Category')
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
            <form method="post" action="{{ route('admin.categories.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$category->id}}">

                <div class="form-group">
                    <label>Post Title</label>
                    <input type="text" name="name" class="form-control" value="{{$category->category_name}}"/>
                </div>


                <div class="form-group">
                    <label>Post Image</label><br/>
                    <img src="{{$category->imageUrl}}" class="img-thumbnail rounded" width="200"><br/><br/>
                    <input type="file" name="image" class="form-control"/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Category</button>
                </div>
            </form>
        </div>
    </div>
    @section('summernoteCSS')
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endsection
    @section('summernoteJS')
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#summernote').summernote({'height': 300});
            });
        </script>
    @endsection
@endsection
