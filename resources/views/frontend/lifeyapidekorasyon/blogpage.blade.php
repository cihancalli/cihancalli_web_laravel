@php use Carbon\Carbon; use Illuminate\Support\Str; @endphp
@extends('frontend.lifeyapidekorasyon.layouts.master')
@section('frontendTitle',$post->post_title)
@section('frontendContent')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">{{$post->post_title}}</h1>
                    <div class="pt-2">
                        <a href="{{route('homepage')}}"
                           class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Anasayfa</a>
                        <a href="{{route('category',$post->getCategory->category_slug)}}"
                           class="btn btn-secondary rounded-pill py-2 px-4 mx-2">{{$post->getCategory->category_name}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6">
        <div class="container py-5">
            <div class="row g-3">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">

                        <a href="{{$post->imageLink}}" target="_blank">
                            <img class="img-fluid w-100 mb-5" src="{{$post->imageUrl}}" alt=""></a>
                        <h2 class="mb-4">{{$post->post_title}} ({{$post->view}})</h2>
                        {!!$post->post_content!!}
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <h3 class="mb-4">3 Yorumlar</h3>
                        <div class="d-flex mb-4">
                            <img src="{{route('homepage')}}/uploads/life_yapi_dekorasyon_logo.png" class="img-fluid"
                                 style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="#">LİFE YAPI DEKORASYON</a>
                                    <small><i>{{Carbon::parse($post->created_at)->format('d M Y')}}</i></small></h6>
                                <p>...</p>
                                <button class="btn btn-sm btn-secondary rounded-pill px-3" disabled>Yanıtla</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="{{route('homepage')}}/uploads/life_yapi_dekorasyon_logo.png" class="img-fluid"
                                 style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="#">LİFE YAPI DEKORASYON</a>
                                    <small><i>{{Carbon::parse($post->created_at)->format('d M Y')}}</i></small></h6>
                                <p>...</p>
                                <button class="btn btn-sm btn-secondary rounded-pill px-3" disabled>Yanıtla</button>
                            </div>
                        </div>
                        <div class="d-flex ms-5 mb-4">
                            <img src="{{route('homepage')}}/uploads/life_yapi_dekorasyon_logo.png" class="img-fluid"
                                 style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="#">LİFE YAPI DEKORASYON</a>
                                    <small><i>{{Carbon::parse($post->created_at)->format('d M Y')}}</i></small></h6>
                                <p>...</p>
                                <button class="btn btn-sm btn-secondary rounded-pill px-3" disabled>Yanıtla</button>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-primary p-5">
                        <h3 class="mb-4">Yorum Bırakın</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Adınız"
                                           style="height: 55px;" disabled>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0"
                                           placeholder="E-posta adresiniz" style="height: 55px;" disabled>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Web siteniz"
                                           style="height: 55px;" disabled>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5"
                                              placeholder="Yorumunuz" disabled></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit" disabled>Yorumu Gönder
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Ara..." disabled>
                            <button class="btn btn-primary px-4"><i class="fa fa-search" disabled></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5">
                        <h3 class="mb-4">Kategoriler</h3>
                        <div class="d-flex flex-column justify-content-start bg-primary p-4">
                            @foreach($categories as $category)
                                <a class="h6 mb-4" href="{{route('category',$category->category_slug)}}"><i
                                        class="fa fa-angle-right me-2"></i>{{$category->category_name}}
                                    ({{$category->postCount()}})</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category End -->

                    @if ($posts->count() != 0)
                        <!-- Recent Post Start -->
                        <div class="mb-5">
                            <h3 class="mb-4">Son Gönderi</h3>

                            <div class="bg-primary p-4">
                                @foreach($posts as $p)
                                    @if($post->published == 1)
                                        <div class="d-flex mb-3">
                                            <a href="{{$post->imageLink}}" target="_blank">
                                                <img class="img-fluid" src="{{$p->imageUrl}}"
                                                     style="width: 100px; height: 100px; object-fit: cover;" alt=""></a>
                                            <a href="{{route('blog.page',[$p->getCategory->category_slug,$p->post_slug])}}"
                                               class="h5 d-flex align-items-center bg-white px-3 mb-0">{{$p->post_title}} ({{$p->view}})</a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                        <!-- Recent Post End -->
                    @endif

                    <!-- Image Start -->
                    <div class="mb-5">
                        <img src="{{route('homepage')}}/frontend/img/blog-1.jpg" alt="" class="img-fluid">
                    </div>
                    <!-- Image End -->

                    <!-- Tags Start-->
                    <div class="mb-5">
                        <h3 class="mb-4">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Design</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Development</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Marketing</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">SEO</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Writing</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Consulting</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Design</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Development</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Marketing</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">SEO</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Writing</a>
                            <a href="" class="btn btn-outline-secondary rounded-pill px-3 m-1">Consulting</a>
                        </div>
                    </div>

                    <!-- Plain Text Start-->
                    <div>
                        <h3 class="mb-4">Plain Text</h3>
                        <div class="bg-primary text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor
                                clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor
                                ipsum amet diam</p>
                            <a href="" class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection
