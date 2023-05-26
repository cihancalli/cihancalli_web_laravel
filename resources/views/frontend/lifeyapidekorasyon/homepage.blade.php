@php use Carbon\Carbon; use Illuminate\Support\Str; @endphp
@extends('frontend.lifeyapidekorasyon.layouts.master')
@section('frontendTitle','Anasayfa')
@section('frontendContent')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-3 text-dark">Yaşam alanlarınızı yenilemek için biz buradayız.</h1>
                    <p class="fs-6 text-dark mb-4">LIFE Yapı Dekorasyon olarak, müşterilerimize en kaliteli ve özgün
                        çözümleri <br>
                        sunmak için çalışıyoruz. Uzman ekibimiz ve yüksek kaliteli malzemelerimizle, <br>
                        yaşam alanlarınızı yenilemek ve daha konforlu hale getirmek için buradayız.</p>
                    <div class="pt-2">
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mx-2">Teklif Alın</a>
                        <a href="" class="btn btn-outline-secondary rounded-pill py-md-3 px-md-5 mx-2">Bizimle İletişime
                            Geçin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row gx-0 mb-3 mb-lg-0">
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-start bg-primary p-5">
                        <h1 class="display-5 mb-4">Ev ve İş Yeriniz İçin Kaliteli Boyama Hizmetleri</h1>
                        <p>Life Yapı Dekorasyon olarak ev ve iş yerlerinizde profesyonel boyama hizmetleri sunuyoruz.
                            Uzman ekibimiz ve kaliteli malzemelerimizle her zaman en iyi sonucu elde ediyoruz.
                            Hayalinizdeki yaşam ve çalışma alanınızı yaratmak için</p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Bizimle İletişime
                            Geçin</a>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{route('homepage')}}/lifeyapidekorasyon/img/about-1.jpg"
                             style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{route('homepage')}}/lifeyapidekorasyon/img/about-2.jpg"
                             style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-end bg-primary p-5">
                        <h1 class="display-5 mb-4">Size Özel Tasarım ve Uygun Fiyat Seçenekleri</h1>
                        <p>Hayallerinizdeki tasarıma sahip olmak için hemen teklif alın! Size özel tasarım ve uygun
                            fiyat seçenekleri ile eviniz ya da işyeriniz için en iyi boya ve dekorasyon hizmetlerini
                            sunuyoruz. Teklif al butonuna tıklayarak bizimle iletişime geçin.</p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Teklif Al</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Premium Boyama Hizmetleri</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row gy-4 gx-3">

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-brush"></i></div>
                        </div>
                        <h5 class="mt-5">İç ve Dış Mekan Boyama</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-roller"></i></div>
                        </div>
                        <h5 class="mt-5">Duvar Kağıdı Uygulaması</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-brush"></i></div>
                        </div>
                        <h5 class="mt-5">Alçı Sıva İşleri</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h5 class="mt-5">Dekoratif Boya Uygulamaları</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-spray-can"></i></div>
                        </div>
                        <h5 class="mt-5">Epoxy Zemin Kaplama</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-city"></i></div>
                        </div>
                        <h5 class="mt-5">Ahşap Boyama ve Vernikleme</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-brush"></i></div>
                        </div>
                        <h5 class="mt-5">Mantolama İşleri</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-roller"></i></div>
                        </div>
                        <h5 class="mt-5">Cephe Boyama ve Temizleme</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-brush"></i></div>
                        </div>
                        <h6 class="mt-5">Boya Badana Sonrası Temizlik Hizmetleri</h6>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h5 class="mt-5">Bozuk Sıva ve Boyaların Onarımı</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-spray-can"></i></div>
                        </div>
                        <h5 class="mt-5">Fayans Döşeme Hizmetleri</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-city"></i></div>
                        </div>
                        <h5 class="mt-5">Seramik Uygulama Hizmetleri</h5>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-city"></i></div>
                        </div>
                        <h6 class="mt-5">Alçıpan Montaj ve Dekorasyon Hizmetleri</h6>
                        <a class="btn shadow-none text-secondary" href="">Detayları Görüntüle<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-primary bg-quote py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <div class="bg-white text-center p-5">
                        <h1 class="mb-4">Fiyat Teklifi Al</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Adınız"
                                           style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0"
                                           placeholder="E-posta adresiniz" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 py-3" rows="2"
                                              placeholder="Mesaj"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Teklifi Al</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-5">Özverili Takım Üyeleri</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
        </div>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{route('homepage')}}/lifeyapidekorasyon/img/team-1.jpg" alt="">
                    <div class="team-text">
                        <div class="team-social">
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="mt-auto mb-3">
                            <h4 class="mb-1">Full Name</h4>
                            <span class="text-uppercase">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{route('homepage')}}/lifeyapidekorasyon/img/team-2.jpg" alt="">
                    <div class="team-text">
                        <div class="team-social">
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="mt-auto mb-3">
                            <h4 class="mb-1">Full Name</h4>
                            <span class="text-uppercase">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{route('homepage')}}/lifeyapidekorasyon/img/team-3.jpg" alt="">
                    <div class="team-text">
                        <div class="team-social">
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="mt-auto mb-3">
                            <h4 class="mb-1">Full Name</h4>
                            <span class="text-uppercase">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row g-0 justify-content-end">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-4">Memnuniyet Garantisi</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <p class="fs-4 fw-normal"><i class="fa fa-quote-left text-secondary me-3"></i>Life Yapı
                                Dekorasyon ekibine evimin boyama işleri için başvurdum ve gerçekten mükemmel bir iş
                                çıkardıklarını söylemeliyim. Hem zamanında tamamlandı hem de sonuçlar harika oldu. Ekip
                                gerçekten profesyonel ve işlerini severek yapıyorlar. Kesinlikle tavsiye ederim!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid p-1 bg-secondary"
                                     src="{{route('homepage')}}/lifeyapidekorasyon/img/testimonial-1.jpg" alt="">
                                <div class="ps-3">
                                    <h3>Melek Hanım</h3>
                                    <span class="text-uppercase">Ev Hanımı</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p class="fs-4 fw-normal"><i class="fa fa-quote-left text-secondary me-3"></i>Üstün kaliteli
                                hizmetler sunan Life Yapı Dekorasyon, bizim işletmemiz için muhteşem bir iş çıkardı.
                                Boyama ve dekorasyon hizmetleri konusunda son derece profesyonel olan ekibi, işimizin
                                bütçesi ve ihtiyaçları doğrultusunda özelleştirilmiş bir çözüm sunarak, işimizin
                                görünümünü tamamen değiştirdi. Tavsiye etmekten mutluluk duyuyoruz!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid p-1 bg-secondary"
                                     src="{{route('homepage')}}/lifeyapidekorasyon/img/testimonial-2.jpg" alt="">
                                <div class="ps-3">
                                    <h3>Cenk Bey</h3>
                                    <span class="text-uppercase">İşletme Sahibi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @if ($posts->count() != 0)
        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h1 class="display-5">Güncel Dekorasyon İçerikleri</h1>
                    <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
                </div>
                <div class="row g-3">
                    @foreach($posts as $post)
                        @if($post->published == 1)
                            <div class="col-xl-4 col-lg-6">
                                <div class="blog-item bg-primary">
                                    <a href="{{$post->imageLink}}" target="_blank"><img class="img-fluid w-100" src="{{$post->imageUrl}}" alt=""></a>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4"
                                            style="width: 60px; height: 100px;">
                                            <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                            <p class="m-0 text-white">{{Carbon::parse($post->created_at)->format('d M')}} </p>
                                            <small class="text-white">{{Carbon::parse($post->created_at)->format('Y')}}</small>
                                        </div>
                                        <a class="h6 m-0 text-truncate me-4" href="{{route('blog.page',[$post->getCategory->category_slug,$post->post_slug])}}">
                                            {{$post->post_title}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between border-top border-secondary p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-2"
                                                 src="{{route('homepage')}}/uploads/life_yapi_dekorasyon_logo.png"
                                                 width="30" height="30" alt="">
                                            <small class="text-uppercase">LİFE YAPI DEKORASYON</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>{{$post->view}}</small>
                                            <small class="ms-3"><i
                                                    class="fa fa-comment text-secondary me-2"></i>0</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Blog End -->
    @endif

@endsection
