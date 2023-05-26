@php use Carbon\Carbon; use Illuminate\Support\Str; @endphp
@extends('frontend.cihancalli.layouts.master')
@section('frontendTitle','My Blogs')
@section('writer','Cihan ÇALLI')
@section('thumbnail',route('homepage').'/'.'uploads/placeholder-800x540.jpg')
@section('writerProfile',route('homepage').'/cihancalli/dist/assets/img/illustrations/profiles/profile-5.png')
@section('frontendContent')

    <!-- Page Header-->
    <header class="page-header-ui page-header-ui-dark bg-img-cover overlay overlay-60"
            style="background-image: url({{route('homepage').'/'.'uploads/PTRzqc_h1r4-1600x900.jpeg'}})">
        <div class="page-header-ui-content position-relative">
            <div class="container px-5 text-center">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="page-header-ui-title mb-3">Cihan Çallı</h1>
                        <p class="page-header-ui-text mb-0">Mobile Software Developer Specialist</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </header>

    <!-- Page section-->
    <section class="bg-light py-10">
        <!-- Page Contents-->
        <div class="container px-5">
            <!-- Page Hero-->
            @if ($posts[0] != null)
                <a class="card post-preview post-preview-featured lift mb-5 overflow-hidden"
                   href="{{ route('blog.page',[$posts[0]->getCategory->category_slug,$posts[0]->post_slug]) }}">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <div class="post-preview-featured-img"
                                 style="background-image: url('{{$posts[0]->imageUrl}}')"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body">
                                <div class="py-5">
                                    <h5 class="card-title">{{$posts[0]->post_title}}</h5>
                                    <p class="card-text">{{$posts[0]->post_summary}}</p>
                                </div>
                                <hr/>
                                <div class="post-preview-meta">
                                    <img class="post-preview-meta-img" src="@yield('writerProfile','')" alt=""/>
                                    <div class="post-preview-meta-details">


                                        <div class="post-preview-meta-details-name">@yield('writer','Admin')</div>
                                        <div class="col post-preview-meta-details-date">
                                            <span class="badge bg-success text-white"><i
                                                    class="fa-regular fa-clock"></i> {{Carbon::parse($posts[0]->created_at)->format('d.m.Y')}}</span>
                                            <span class="badge bg-info text-white"><i class="fa-solid fa-eye"></i> {{$posts[0]->view}}</span>
                                            <span
                                                class="badge bg-secondary text-white">{{$posts[0]->getCategory->category_name}}</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endif
            <!-- Page Blogs-->
            <div class="row gx-5">
                @foreach($posts as $post)
                    @if(!$loop->first)
                        @if($post->published == 1)
                            <div class="col-md-6 col-xl-4 mb-5">
                                <a class="card post-preview lift h-100"
                                   href="{{route('blog.page',[$post->getCategory->category_slug,$post->post_slug])}}">
                                    <img class="card-img-top"
                                         src="{{$post->imageUrl}}"
                                         alt="..."/>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$post->post_title}}</h5>
                                        <p class="card-text">{{$post->post_summary}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="post-preview-meta">
                                            <img class="post-preview-meta-img" src="@yield('writerProfile','')" alt=""/>
                                            <div class="post-preview-meta-details">
                                                <div
                                                    class="post-preview-meta-details-name">@yield('writer','Admin')</div>
                                                <div class="col post-preview-meta-details-date">
                                                <span class="badge bg-success text-white"><i
                                                        class="fa-regular fa-clock"></i> {{Carbon::parse($post->created_at)->format('d.m.Y')}}</span>
                                                    <span class="badge bg-info text-white"><i
                                                            class="fa-solid fa-eye"></i>  {{$post->view}}</span>
                                                    <span
                                                        class="badge bg-secondary text-white">{{$post->getCategory->category_name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
            {{$posts->links('vendor.pagination.custom')}}
        </div>

        <!-- Page footer-->
        <div class="svg-border-rounded text-dark">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </section>

@endsection
