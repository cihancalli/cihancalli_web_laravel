@extends('frontend.zerdasoftware.layouts.master')
@section('frontendNavbar','navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark fixed-top')
@section('navbarTitle','text-white')
@section('zerdasoftwareTitle','Contact')
@section('zerdasoftwareContent')
    <!-- Page Header-->

    <!-- Page Header-->
    <header class="page-header-ui page-header-ui-dark bg-gradient-primary-to-secondary">
        <div class="page-header-ui-content pt-10">
            <div class="container px-5 text-center">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="page-header-ui-title mb-3">@yield('zerdasoftwareTitle','')</h1>
                        <p class="page-header-ui-text">Zerda Software Contact Information</p>
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
            <div class="row gx-5 mb-5">
                <div class="col-lg-4 mb-5">
                    <a class="card card-link border-bottom-0 border-start-0 border-end-0 border-top-lg border-primary lift text-center o-visible h-100"
                       href="https://www.linkedin.com/company/zerdasoftware">
                        <div class="card-body">
                            <div class="icon-stack icon-stack-xl bg-primary-soft text-primary mb-4 mt-n5 z-1 shadow"><i
                                    data-feather="linkedin"></i></div>
                            <h5>LinkedIn</h5>
                            <p class="card-text">Are you ready to connect with me?</p>
                        </div>
                        <div class="card-footer">
                            <div class="text-primary fw-bold d-inline-flex align-items-center">
                                Connect
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-5">
                    <a class="card card-link border-bottom-0 border-start-0 border-end-0 border-top-lg border-secondary lift text-center o-visible h-100"
                       href="https://github.com/zerdasoftware">
                        <div class="card-body">
                            <div
                                class="icon-stack icon-stack-xl bg-secondary-soft text-secondary mb-4 mt-n5 z-1 shadow">
                                <i data-feather="github"></i></div>
                            <h5>GitHub</h5>
                            <p class="card-text">Would you like to see the source codes of my works?</p>
                        </div>
                        <div class="card-footer">
                            <div class="text-secondary fw-bold d-inline-flex align-items-center">
                                Follow
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-5">
                    <a class="card card-link border-bottom-0 border-start-0 border-end-0 border-top-lg border-red lift text-center o-visible h-100"
                       href="https://www.youtube.com/channel/UConlCc-Sv6yGnXe4PaRiD0A?sub_confirmation=1">
                        <div class="card-body">
                            <div class="icon-stack icon-stack-xl bg-teal-soft text-red mb-4 mt-n5 z-1 shadow"><i
                                    data-feather="youtube"></i></div>
                            <h5>YouTube</h5>
                            <p class="card-text">Want to watch my how-to videos?</p>
                        </div>
                        <div class="card-footer">
                            <div class="text-red fw-bold d-inline-flex align-items-center">
                                Subscribe
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row gx-5 justify-content-center text-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h5>Join us on Discord!</h5>
                    <p class="fw-light mb-0">Join the discussion on <a href="https://discord.gg/8sTs5pKm">Discord</a>
                        Our community can help answer
                        questions!</p>
                </div>
                <div class="col-lg-4">
                    <h5>Mail Support</h5>
                    <p class="fw-light mb-0">
                        For other support questions, please send me an email at:
                        <a target="_blank" href="mailto:info@zerdasoftware.com">info@zerdasoftware.com</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Whatsapp Support</h5>
                    <p class="fw-light mb-0">
                        For other support questions, please send me a message at:
                        <a target="_blank" href="https://wa.me/+905396017638">+90 539 601 7638</a>
                    </p>
                </div>
            </div>
            <hr class="my-10"/>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2>Can't find the answer you need?</h2>
                    <p class="lead mb-5">Contact us and we will get back to you with solutions to your problems as soon
                        as possible.</p>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{route('contact.post')}}">
                @csrf
                <div class="row gx-5 mb-4">
                    <div class="col-md-6">
                        <label class="text-dark mb-2" for="name">Full Name</label>
                        <input class="form-control py-4" name="name" value="{{old('name')}}" type="text"
                               placeholder="Enter your full name" required/>
                    </div>
                    <div class="col-md-6">
                        <label class="text-dark mb-2" for="email">E-mail address</label>
                        <input class="form-control py-4" name="email" value="{{old('email')}}" type="email"
                               placeholder="Enter your e-mail address" required/>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="text-dark mb-2" for="phone">Phone</label>
                    <input class="form-control py-4" name="phone" value="{{old('phone')}}" type="text"
                           placeholder="Enter your phone number"/>
                </div>
                <div class="mb-4">
                    <label class="text-dark mb-2" for="message">Message</label>
                    <textarea class="form-control py-3" name="message" value="{{old('message')}}" type="text"
                              placeholder="Enter your message" rows="4" required></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary mt-4" type="submit">Send</button>
                </div>
            </form>
        </div>
        <br><br>
<hr/>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12042.314154889325!2d28.8651078!3d41.0125971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb861d3d1aa3%3A0x3490be34e9a48470!2sZerda%20Software!5e0!3m2!1str!2str!4v1686599743437!5m2!1str!2str"
            width="1500" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="svg-border-rounded text-dark">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </section>
@endsection
