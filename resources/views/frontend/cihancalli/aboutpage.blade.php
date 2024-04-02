@extends('frontend.cihancalli.layouts.master')
@section('frontendNavbar','navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark fixed-top')
@section('navbarTitle','text-white')
@section('cihancalliTitle','About Us')
@section('cihancalliContent')
    <!-- Page Header-->
    <header class="page-header-ui page-header-ui-dark bg-gradient-primary-to-secondary">
        <div class="page-header-ui-content pt-10">
            <div class="container px-5 text-center">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="page-header-ui-title mb-3">@yield('frontendTitle','')</h1>
                        <p class="page-header-ui-text">General Information About Cihan Çallı</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-white">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </header>
    <section class="bg-white py-10">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10">
                    <h2 class="mb-4">Brief Summary of Studies</h2>
                    <p>Yeni teknolojileri öğrenmek ve oluşturmak için heyecanlı, hevesli bir yazılım geliştiricisiyim.
                        Mobil geliştirme ile oldukça ilgileniyorum ve kariyerimi bu alanda ilerletmek istiyorum.
                        Lisans eğitimim sırasında Teknopark ile birden fazla projede işbirliği yaptım ve topluluk
                        üyelerine dersler
                        verdiğim IEEE topluluğunun başkanı olarak görev yaptım. Üniversiteden mezun olduktan sonra
                        birkaç yurt dışı
                        projesinde freelance olarak çalıştım. Sonrasında tam zamanlı yazılımcı olarak çalışmaya
                        başladım.</p>


                    <hr class="my-5"/>
                    <h4 class="mb-4">
                        <div class="icon-stack bg-primary text-white me-2"><i data-feather="arrow-right"></i></div>
                        Grand Medical Group – Diten Tech
                    </h4>
                    <div class="card bg-light shadow-none">
                        <div class="card-body">
                            <h6>As a Mobile Application Development Specialist</h6>
                            <ul class="mb-0">
                                <li class="text-italic">Şirketin ilaç raporlama ve sunum uygulamasında geliştirici
                                    olarak çalıştı.
                                </li>
                                <li class="text-italic">Kotlin ve RxJava, Room ve Retrofit gibi çeşitli kütüphaneler
                                    kullanıldı.
                                </li>
                                <li class="text-italic">Şirketin diğer kitaplıkların karşılayamadığı özel ihtiyaçlarını
                                    karşılamak için sıfırdan bir ön uç takvim kitaplığı oluşturdu.
                                </li>
                                <li class="text-italic">Uzaktan sunum kontrolleri için bluetooth aracılığıyla cihazlar
                                    arası iletişim uygulandı.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-5"/>
                    <h4 class="mb-4">
                        <div class="icon-stack bg-primary text-white me-2"><i data-feather="arrow-right"></i></div>
                        Oz Ekin PVC Ticaret Ltd. Şti.
                    </h4>
                    <div class="card bg-light shadow-none">
                        <div class="card-body">
                            <h6>As a Software and System Design Specialist</h6>
                            <ul class="mb-0">
                                <li class="text-italic">Şirketin envanterini ve üretim sürecini kolayca takip etmesini
                                    sağlayan bir depo ve üretim paneli geliştirildi.
                                </li>
                                <li class="text-italic">Müşterilerden gelen siparişlerin gösterge tablosuna entegre
                                    edilmesi için sipariş verme özelliği hayata geçirildi..
                                </li>
                                <li class="text-italic">4000'den fazla ürünün birim, marka, ölçü, renk vb. çeşitli
                                    özelliklerini kodlayarak ürün kimlikleri oluşturmak
                                    için web tabanlı bir uygulama oluşturuldu.
                                </li>
                                <li class="text-italic">Bu çalışmalar .NET Core, Java, MS SQL ve Firebase teknolojileri
                                    kullanılarak yapıldı
                                </li>
                            </ul>
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
