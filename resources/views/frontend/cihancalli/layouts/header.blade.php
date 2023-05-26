<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134124686-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134124686-2');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2544024364867754"
            crossorigin="anonymous"></script>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('frontendTitle','Cihan Çallı') | Zerda Software</title>
    <link href="{{route('homepage')}}/cihancalli/dist/css/styles.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{route('homepage')}}/frontend/dist/assets/img/favicon.png"/>
    <script data-search-pseudo-elements defer
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
            crossorigin="anonymous"></script>
</head>
<body>
<div id="layoutDefault">
    <div id="layoutDefault_content">
        <main>
            <!-- Navbar-->
            <nav
                class="navbar @yield('frontendNavbar','navbar navbar-marketing navbar-expand-lg bg-white navbar-light')">
                <div class="container px-5">
                    <a class="navbar-brand @yield('navbarTitle','text-primary')" href="{{route('homepage')}}">Zerda
                        Software</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto me-lg-5">
                            <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Homepage</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('blogpage')}}">My Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">My Projects</a></li>
                            <li class="nav-item dropdown dropdown-xl no-caret">
                                <a class="nav-link " href="{{route('about')}}" role="button" aria-expanded="false">
                                    About Me
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-xl no-caret">
                                <a class="nav-link" id="navbarDropdownPages" href="{{route('contact')}}" role="button"
                                   aria-expanded="false">
                                    Contact Me
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
