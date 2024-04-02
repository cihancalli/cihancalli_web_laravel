@php use Carbon\Carbon; use Illuminate\Support\Str; @endphp

@extends('frontend.cihancalli.layouts.master')
@section('cihancalliTitle','Home')
@section('cihancalliWriter','Cihan ÇALLI')
@section('cihancalliProfile','https://zerdasoftware.com/zerdasoftware/dist/assets/img/illustrations/profiles/profile-5.png')
@section('cihancalliContent')

    <!-- Page Header-->
    <header class="page-header-ui page-header-ui-light bg-white">
        <div class="page-header-ui-content">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8 col-lg-10 text-center">
                        <img class="mb-4 rounded-circle" src="https://zerdasoftware.com/uploads/cihancalli_1.jpg"
                             style="width: 15rem"/>
                        <h1 class="page-header-ui-title">Cihan Çallı</h1>
                        <p class="page-header-ui-text">I am a mobile software developer specialist specializing ,
                            android design based in Kotlin</p>
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
    <section class="bg-light py-10">
        <div class="container px-5">
            <div class="row gx-5 text-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="icon-stack icon-stack-xl bg-red text-white mb-4"><i data-feather="edit-3"></i></div>
                    <h3>Laravel API Developer</h3>
                    <p class="mb-0">In my role as a Laravel API Developer, I design, develop, and document APIs tailored
                        to your specific needs. This involves creating database models, defining routes, and writing
                        controllers and service classes to make the API fully functional. Additionally, I apply best
                        practices for security and performance, including authentication, authorization, data
                        validation, and error handling.</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="icon-stack icon-stack-xl bg-yellow text-white mb-4"><i data-feather="layout"></i></div>
                    <h3>Android App Developer</h3>
                    <p class="mb-0">As an Android App Developer, I can support you in every stage of your project.
                        Whether it's developing a new app, updating an existing one, or fixing bugs, I provide solutions
                        that cater to your specific needs. My aim is to deliver impressive and functional Android
                        applications to your users.</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon-stack icon-stack-xl bg-blue text-white mb-4"><i data-feather="droplet"></i></div>
                    <h3>Laravel Web Developer</h3>
                    <p class="mb-0">As a Laravel Web Developer, I can support you at every stage of your projects.
                        Whether it's building a new web application, updating an existing one, or fixing bugs, I provide
                        solutions that cater to your specific needs. My goal is to deliver functional, secure, and
                        high-performance web applications for you.</p>
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
    </section>
    <section class="bg-white py-10">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-md-4">
                    <a class="card card-portfolio mb-5" href="{{route('homepage').'/blog/general'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/jWQj5Wjepuk/400x300" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">General</div>
                        </div>
                    </a>
                    <a class="card card-portfolio mb-5" href="{{route('homepage').'/blog/software'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/Ecnx13MEPK0/400x500" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">Software</div>
                        </div>
                    </a>
                    <a class="card card-portfolio mb-5 mb-md-0" href="{{route('homepage').'/blog/'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/eUCy1jb_B7I/400x400" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">AI</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="card card-portfolio mb-5" href="{{route('homepage').'/blog/project'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/cuTcfqsES6o/400x500" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">Project</div>
                        </div>
                    </a>
                    <a class="card card-portfolio mb-5" href="{{route('homepage').'/blog/program'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/jipR1oTCO7U/400x400" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">Program</div>
                        </div>
                    </a>
                    <a class="card card-portfolio mb-5 mb-md-0" href="{{route('homepage').'/blog/library'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/n3sqjJzZiBM/400x300" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">Github & Library</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="card card-portfolio mb-5" href="{{route('homepage').'/blog/technology'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/Zr7MxECDTQ8/400x300" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">Technology</div>
                        </div>
                    </a>
                    <a class="card card-portfolio mb-5" href="{{route('homepage').'/blog/'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/QcyenJDqDzw/400x500" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">Mobile App</div>
                        </div>
                    </a>
                    <a class="card card-portfolio mb-5 mb-md-0" href="{{route('homepage').'/blog/electronic'}}">
                        <img class="card-img-top" src="https://source.unsplash.com/TIutDBFEtcY/400x400" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">Electric & Electronic</div>
                        </div>
                    </a>
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
    </section>
    <section class="bg-light py-10">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2>Contact me</h2>
                    <p class="mb-5">I am available for freelancer, when you're ready - let me know!</p>
                    <div class="row gx-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="mailto:info@zerdasoftware.com">
                                        <div class="icon-stack icon-stack-lg bg-orange text-white mb-3"><i
                                                data-feather="mail"></i></div>
                                    </a>
                                    <div class="small">info@zerdasoftware.com</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="https://wa.me/+905396017638">
                                        <div class="icon-stack icon-stack-lg bg-green text-white mb-3"><i
                                                data-feather="smartphone"></i></div>
                                    </a>
                                    <div class="small">+90 539 601 76 38</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
