@extends('frontend.cihancalli.layouts.master')
@section('frontendTitle',$post->post_title)
@section('writer','Cihan ÇALLI')
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

    <!-- Blog Content-->
    <section class="bg-light py-10">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="single-post">
                        <h1>{{$post->post_title}}</h1>
                        <p class="lead">{{$post->post_summary}}</p>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div class="single-post-meta me-4">
                                <img class="single-post-meta-img" src="@yield('writerProfile','')"/>
                                <div class="single-post-meta-details">
                                    <div class="single-post-meta-details-name">@yield('writer','Admin')</div>
                                    <div class="col post-preview-meta-details-date">
                                        <span class="badge bg-success text-white"><i class="fa-regular fa-clock"></i> {{\Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</span>
                                        <span class="badge bg-info text-white"><i class="fa-solid fa-eye"></i>  {{$post->view}}</span>
                                        <a href="{{route('category',$post->getCategory->category_slug)}}"><span
                                                    class="badge bg-secondary text-white">{{$post->getCategory->category_name}}</span></a>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="single-post-meta-links">
                                <a href="#!"><i class="fab fa-twitter fa-fw"></i></a>
                                <a href="#!"><i class="fab fa-facebook-f fa-fw"></i></a>
                                <a href="#!"><i class="fas fa-bookmark fa-fw"></i></a>
                            </div>
                            -->
                        </div>
                        <img class="img-fluid mb-2 rounded" src="{{$post->imageUrl}}"/>
                        <!--
                        <div class="small text-gray-500 text-center">Photo Credit: Unsplash</div>
                        -->
                        <div class="single-post-text my-5">
                            {!!$post->post_content!!}
                            <hr class="my-5"/>
                            <div class="text-center"><a class="btn btn-transparent-dark" href="{{route('blogpage')}}">Back
                                    to Blog</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-dark">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </section>

@endsection
