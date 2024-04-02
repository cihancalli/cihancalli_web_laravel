<!-- Navbar-->
<nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light">
    <div class="container px-5">
        <a class="navbar-brand text-primary" href="{{route('homepage')}}">Zerda Software</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                data-feather="menu"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-lg-5">
                <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Home</a></li>

                <li class="nav-item dropdown dropdown-xl no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our Company
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up me-lg-n25 me-xl-n15"
                         aria-labelledby="navbarDropdownDemos">
                        <div class="row g-0">
                            <div
                                class="col-lg-5 p-lg-3 bg-img-cover overlay overlay-primary overlay-70 d-none d-lg-block"
                                style="background-image: url('{{route('homepage')}}/zerdasoftware/dist/assets/img/backgrounds/bg-dropdown-xl.jpg')">
                                <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                    <div class="text-white text-center z-1">
                                        <div class="mb-3">Please contact us for further information. We
                                            would be happy to assist you.
                                        </div>
                                        <a class="btn btn-white btn-sm text-primary fw-500"
                                           href="{{route('contact')}}">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 p-lg-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="dropdown-header text-primary">Software</h6>

                                        <a class="dropdown-item" href="{{route('homepage')}}">Mobile App</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Web App</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Desktop App</a>

                                        <div class="dropdown-divider border-0"></div>
                                        <h6 class="dropdown-header text-primary">Business</h6>

                                        <a class="dropdown-item" href="{{route('homepage')}}">Digital Transformation <br>Consulting</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">SEO</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Order & Reservation <br>Management</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Database Management</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Advertising Management</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">QR Code</a>

                                        <div class="dropdown-divider border-0"></div>

                                        <h6 class="dropdown-header text-primary">Social</h6>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Social Media Management</a>

                                        <div class="dropdown-divider border-0 d-lg-none"></div>
                                    </div>
                                    <div class="col-lg-6">

                                        <h6 class="dropdown-header text-primary">Corporate Identity</h6>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Logo Design</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Business Card design</a>

                                        <div class="dropdown-divider border-0"></div>
                                        <h6 class="dropdown-header text-primary">E-Commerce</h6>

                                        <a class="dropdown-item" href="{{route('homepage')}}">Web Site</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Content Creation</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Content Upload</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Amazon Consulting</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">Trendyol Consulting</a>
                                        <a class="dropdown-item" href="{{route('homepage')}}">
                                            Software Integration
                                            <span class="badge bg-primary-soft text-primary ms-1">+</span>
                                        </a>

                                        <a class="dropdown-item" href="{{route('homepage')}}">Photo Shooting & Editing</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--
                <li class="nav-item dropdown dropdown-xl no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-n20 me-xl-n15 animated--fade-in-up"
                         aria-labelledby="navbarDropdownPages">
                        <div class="row g-0">
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Company</h6>
                                <a class="dropdown-item" href="{{route('homepage')}}">Basic Page</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">About</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Pricing</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Contact</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Team</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Terms</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Support</h6>
                                <a class="dropdown-item" href="{{route('homepage')}}">Help Center</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Knowledgebase</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Message Center</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Support Ticket</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Careers</h6>
                                <a class="dropdown-item" href="{{route('homepage')}}">Careers List</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Position Details</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Blog</h6>
                                <a class="dropdown-item" href="{{route('homepage')}}">Overview</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Post</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Archive</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Portfolio</h6>
                                <a class="dropdown-item" href="{{route('homepage')}}">Grid</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Large Grid</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Masonry</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Case Study</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">Project</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Error</h6>
                                <a class="dropdown-item" href="{{route('homepage')}}">400 Error</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">401 Error</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">404 Error (Option 1)</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">404 Error (Option 2)</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">500 Error</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">503 Error</a>
                                <a class="dropdown-item" href="{{route('homepage')}}">504 Error</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Documentation
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                         aria-labelledby="navbarDropdownDocs">
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/quickstart"
                           target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book-open"></i>
                            </div>
                            <div>
                                <div class="small text-gray-500">Documentation</div>
                                Usage instructions and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/components"
                           target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="code"></i></div>
                            <div>
                                <div class="small text-gray-500">Components</div>
                                Code snippets and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/changelog"
                           target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="file-text"></i>
                            </div>
                            <div>
                                <div class="small text-gray-500">Changelog</div>
                                Updates and changes
                            </div>
                        </a>
                    </div>
                </li>,
                -->

            </ul>

            <a class="btn fw-500 ms-lg-4 btn-success" href="https://wa.me/+905396017638" target="_blank">
                WhatsApp
            </a>

        </div>
    </div>
</nav>
