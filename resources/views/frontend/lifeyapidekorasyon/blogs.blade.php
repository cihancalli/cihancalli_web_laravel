@php use Carbon\Carbon; use Illuminate\Support\Str; @endphp
@extends('frontend.lifeyapidekorasyon.layouts.master')
@section('frontendTitle','My Blogs')
@section('frontendContent')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Son Dekorasyon Haberleri</h1>
                    <div class="pt-2">
                        <a href="{{route('homepage')}}"
                           class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Anasayfa</a>
                        <a href="{{route('homepage')}}" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">En Son Yazılar</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            @if ($posts->count() != 0)
                <div class="row g-3">
                    @foreach($posts as $post)
                        @if($post->published == 1)
                            <div class="col-xl-4 col-lg-6">
                                <div class="blog-item bg-primary">
                                    <a href="{{$post->imageLink}}" target="_blank">
                                    <img class="img-fluid w-100" src="{{$post->imageUrl}}"
                                         alt=""></a>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4"
                                            style="width: 60px; height: 100px;">
                                            <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                            <p class="m-0 text-white">{{Carbon::parse($post->created_at)->format('d M')}} </p>
                                            <small
                                                class="text-white">{{Carbon::parse($post->created_at)->format('Y')}}</small>
                                        </div>
                                        <a class="h4 m-0 text-truncate me-4"
                                           href="{{route('blog.page',[$post->getCategory->category_slug,$post->post_slug])}}">{{$post->post_title}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between border-top border-secondary p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-2"
                                                 src="{{route('homepage')}}/uploads/life_yapi_dekorasyon_logo.png"
                                                 width="30"
                                                 height="30"
                                                 alt="">
                                            <small class="text-uppercase">LİFE YAPI DEKORASYON</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ms-3"><i
                                                    class="fa fa-eye text-secondary me-2"></i>{{$post->view}}</small>
                                            <small class="ms-3"><i
                                                    class="fa fa-comment text-secondary me-2"></i>0</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-12 text-center">
                        {{$posts->links('vendor.pagination.custom')}}
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Blog End -->
@endsection
