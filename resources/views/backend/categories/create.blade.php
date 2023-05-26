@extends('backend.layouts.master')
@section('backendTitle','New Category')
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
            <form method="post" action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="name" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Category Image</label>
                    <input type="file" name="image" class="form-control" required/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create Category</button>
                </div>

            </form>

        </div>
    </div>

@endsection
