@php use Carbon\Carbon; use Illuminate\Support\Str; @endphp
@extends('frontend.cihancalli.layouts.master')
@section('frontendTitle','Homepage')
@section('writer','Cihan ÇALLI')
@section('thumbnail',route('homepage').'/'.'uploads/placeholder-800x540.jpg')
@section('writerProfile',route('homepage').'/cihancalli/dist/assets/img/illustrations/profiles/profile-5.png')
@section('frontendContent')

@endsection
