<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('frontendTitle','lİFE YAPI DEKORASYON') | lİFE YAPI DEKORASYON</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{route('homepage')}}/lifeyapidekorasyon/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{route('homepage')}}/lifeyapidekorasyon/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{route('homepage')}}/lifeyapidekorasyon/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-primary d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark py-2 pe-3 border-end border-white" href="https://wa.me/05393681281" target="_blank"><i
                            class="bi bi-telephone text-secondary me-2"></i>0539 368 12 81</a>
                    <a class="text-dark py-2 px-3" href="mailto:info@lifeyapidekorasyon.com" target="_blank"><i
                            class="bi bi-envelope text-secondary me-2"></i>info@lifeyapidekorasyon.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 px-3 border-end border-white"
                       href="https://www.facebook.com/LifeYapiDekorasyonistanbul" target="_blank">
                        <i class="fab fa-facebook-f text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="https://twitter.com/life_yapidekor" target="_blank">
                        <i class="fab fa-twitter text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="" target="_blank">
                        <i class="fab fa-pinterest text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white"
                       href="https://www.instagram.com/life.yapidekorasyon" target="_blank">
                        <i class="fab fa-instagram text-secondary"></i>
                    </a>
                    <a class="text-body py-2 ps-3" href="https://www.tiktok.com/@life.yapidekorasyon" target="_blank">
                        <i class="fab fa-tiktok text-secondary"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="{{route('homepage')}}" class="navbar-brand p-0">
        <h3 class="m-0 text-uppercase text-primary"><i class="fa fa-paint-roller text-secondary me-3"></i>LİFE YAPI
            DEKORASYON</h3>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
            <a href="{{route('homepage')}}" class="nav-item nav-link active">Anasayfa</a>
            <a href="{{route('homepage')}}" class="nav-item nav-link">Hakkımızda</a>
            <a href="{{route('homepage')}}" class="nav-item nav-link">Hizmetlerimiz</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Bölümler</a>
                <div class="dropdown-menu m-0">
                    <a href="{{route('blogpage')}}" class="dropdown-item">Blog</a>
                    <a href="{{route('homepage')}}" class="dropdown-item">Takımımız</a>
                    <a href="{{route('homepage')}}" class="dropdown-item">Referanslarımız</a>
                </div>
            </div>
            <a href="{{route('homepage')}}" class="nav-item nav-link">İletişim</a>
        </div>
        <div class="d-none d-lg-flex align-items-center ps-4">
            <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
            <div>
                <a href="https://wa.me/05393681281" target="_blank">
                    <h5 class="text-primary mb-1"><small>Hemen Ara</small></h5>
                    <h6 class="text-light m-0">0539 368 12 81</h6>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
