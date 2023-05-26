@extends('backend.layouts.master')
@section('backendTitle','View Contact '.$contact->name)
@section('backendContent')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('adminTitle')</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$contact->name}}" disabled/>
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input type="email" name="email" class="form-control" value="{{$contact->email}}" disabled/>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" name="phone" class="form-control" value="{{$contact->phone}}" disabled/>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea  type="text"rows="10" name="message" class="form-control" value="{{$contact->message}}" disabled>{{$contact->message}}</textarea>
                </div>
            </form>
        </div>
    </div>
@endsection
