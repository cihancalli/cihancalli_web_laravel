@extends('backend.layouts.master')
@section('backendTitle','New Page')
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
            <form method="post" action="{{route('admin.pages.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Page Title</label>
                    <input type="text" name="title" class="form-control" required/>
                </div>


                <div class="form-group">
                    <label>Page Image</label>
                    <input type="file" name="image" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Page Order</label>
                    <input type="number" name="order" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Page Contents</label>
                    <textarea id="summernote" name="contents" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create Page</button>
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
