@extends('frontend.zerdasoftware.layouts.master')
@section('zerdasoftwareTitle','Home')
@section('zerdasoftwareContent')
    <!-- Page Header-->
    <header class="page-header-ui page-header-ui-dark bg-img-cover overlay overlay-80"
            style="background-image: url('https://source.unsplash.com/faEfWCdOKIg/1500x900')">
        <div class="page-header-ui-content py-5 position-relative">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8 col-lg-10 text-center">
                        <div data-aos="fade-up">
                            <h1 class="page-header-ui-title">ZERDA SOFTWARE</h1>
                            <p class="page-header-ui-text">Zerda software for More Efficient Business Operations.
                                Shaping the Future with Digital Solutions.</p>
                        </div>
                        <a class="btn btn-primary fw-500" href="{{route("contact")}}" data-aos="fade-up"
                           data-aos-delay="100">Get Contact</a>
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

    <section class="bg-white py-10" id="get-started">
        <div class="container px-5">
            <div class="row gx-5 text-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i
                            class="fa fa-globe" aria-hidden="true"></i></div>
                    <h3>Website Design and Development</h3>
                    <p class="mb-0">We provide custom web design and development services, creating user-friendly and
                        scalable websites.</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i
                            class="fa-brands fa-instagram"></i></div>
                    <h3>Social Media Management</h3>
                    <p class="mb-0">Our team helps clients develop effective social media strategies, create engaging
                        content, and manage their online presence.</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i
                            class="fa fa-compass" aria-hidden="true"></i></div>
                    <h3>Digital Transformation Consulting</h3>
                    <p class="mb-0">We guide businesses through the digital transformation process, optimizing their
                        strategies and leveraging advanced technologies.</p>
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
            <h2 class="mb-4">Services</h2>
            <div class="row gx-5">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S1</div>
                        <img class="card-img-top" src="https://source.unsplash.com/tG36rvCeqng/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Website</div>
                            <div class="text-xs text-gray-500">We provide custom web design and development services,
                                creating user-friendly and scalable websites.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S2</div>
                        <img class="card-img-top" src="https://source.unsplash.com/nHOz7sp5nHE/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Social Media Management</div>
                            <div class="text-xs text-gray-500">Our team helps clients develop effective social media
                                strategies, create engaging content, and manage their online presence.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S3</div>
                        <img class="card-img-top" src="https://source.unsplash.com/GkFQEOubrCo/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">SEO</div>
                            <div class="text-xs text-gray-500">Our SEO service ensures businesses' websites rank higher
                                in organic search results. We optimize websites through techniques such as website
                                optimization, keyword research, content optimization, and link-building strategies.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S4</div>
                        <img class="card-img-top" src="https://source.unsplash.com/3bdSGpKVAmk/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Corporate Identity</div>
                            <div class="text-xs text-gray-500">Through our corporate identity service, we help
                                businesses establish their brand image. We utilize elements such as logo design, color
                                selection, typography, and brand guidelines to create a cohesive corporate identity.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S5</div>
                        <img class="card-img-top" src="https://source.unsplash.com/w9IHmVSNBfU/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">QR Code</div>
                            <div class="text-xs text-gray-500">Our QR code service enables businesses to easily share
                                information about their products or services. By using QR codes, we facilitate quick
                                access to desired information for customers.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S6</div>
                        <img class="card-img-top" src="https://source.unsplash.com/bpg-ngqrPc8/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Logo Design</div>
                            <div class="text-xs text-gray-500">We help businesses establish a strong brand identity
                                through our logo design service. We create professional and unique logos that enhance
                                brand value.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S7</div>
                        <img class="card-img-top" src="https://source.unsplash.com/fZuleEfeA1Q/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Advertising Management</div>
                            <div class="text-xs text-gray-500">Through our advertising management service, we assist
                                businesses in managing their digital advertising campaigns. We develop strategies to
                                reach target audiences and provide support in areas such as ad placement, targeting, and
                                analysis.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S8</div>
                        <img class="card-img-top" src="https://source.unsplash.com/rjhAiP3cj9E/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Mobile Application</div>
                            <div class="text-xs text-gray-500">We develop customized mobile applications for businesses,
                                allowing their customers to easily interact with their services through mobile devices.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S9</div>
                        <img class="card-img-top" src="https://source.unsplash.com/5ba6j8d_oXY/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Database Management</div>
                            <div class="text-xs text-gray-500">Our database management service helps businesses
                                efficiently store and manage their data. We offer support in areas such as database
                                security, backup, and data analysis.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S10</div>
                        <img class="card-img-top" src="https://source.unsplash.com/ESoE_buQvNQ/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Software Integration</div>
                            <div class="text-xs text-gray-500">With our software integration service, we ensure seamless
                                compatibility between different systems. By integrating existing software, we enhance
                                efficiency and streamline processes for businesses.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S11</div>
                        <img class="card-img-top" src="https://source.unsplash.com/zuE9jsaVHuA/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Order & Reservation Management</div>
                            <div class="text-xs text-gray-500">We provide solutions for efficient order and reservation
                                management, enabling businesses to track, manage, and organize orders and reservations
                                effectively.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                    <a class="card lift h-100" href="#!">
                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg">S12</div>
                        <img class="card-img-top" src="https://source.unsplash.com/WuRsjF4iZK0/800x500" alt="..."/>
                        <div class="card-body p-3">
                            <div class="card-title small mb-0">Digital Transformation Consulting</div>
                            <div class="text-xs text-gray-500">We guide businesses through the digital transformation
                                process, optimizing their
                                strategies and leveraging advanced technologies.
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--
            <div class="mb-10">
                <a class="text-arrow-icon" href="#!">
                    See more
                    <i data-feather="arrow-right"></i>
                </a>
            </div>
            -->
            <!--
            <h2 class="mb-4">Products</h2>
            <div class="row gx-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-red" href="#!">
                        <div class="card-body text-center">
                            <div class="icon-stack icon-stack-xl bg-red text-white mb-2"><i class="fas fa-car"></i>
                            </div>
                            <div class="small text-gray-600">Cars</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-orange"
                       href="#!">
                        <div class="card-body text-center">
                            <div class="icon-stack icon-stack-xl bg-orange text-white mb-2"><i class="fas fa-home"></i>
                            </div>
                            <div class="small text-gray-600">Housing</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-yellow"
                       href="#!">
                        <div class="card-body text-center">
                            <div class="icon-stack icon-stack-xl bg-yellow text-white mb-2"><i class="fas fa-gift"></i>
                            </div>
                            <div class="small text-gray-600">Free</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-green"
                       href="#!">
                        <div class="card-body text-center">
                            <div class="icon-stack icon-stack-xl bg-green text-white mb-2"><i
                                    class="fas fa-mobile-alt"></i></div>
                            <div class="small text-gray-600">Tech</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-cyan"
                       href="#!">
                        <div class="card-body text-center">
                            <div class="icon-stack icon-stack-xl bg-cyan text-white mb-2"><i class="fas fa-couch"></i>
                            </div>
                            <div class="small text-gray-600">Furniture</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-blue"
                       href="#!">
                        <div class="card-body text-center">
                            <div class="icon-stack icon-stack-xl bg-blue text-white mb-2"><i
                                    class="fas fa-briefcase"></i></div>
                            <div class="small text-gray-600">Jobs</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-purple"
                       href="#!">
                        <div class="card-body text-center">
                            <div class="icon-stack icon-stack-xl bg-purple text-white mb-2"><i
                                    class="fas fa-motorcycle"></i></div>
                            <div class="small text-gray-600">Leisure</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-pink"
                       href="#!">
                        <div class="card-body text-center">
                            <div class="icon-stack icon-stack-xl bg-pink text-white mb-2"><i
                                    class="fas fa-shopping-cart"></i></div>
                            <div class="small text-gray-600">Other</div>
                        </div>
                    </a>
                </div>
            </div>
            -->
        </div>
    </section>
    <hr class="my-0"/>
    <section class="bg-img-cover overlay overlay-80 py-10"
             style="background-image: url('https://source.unsplash.com/yTwXpLO5HAA/1500x900')">
        <div class="container px-5 position-relative">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10">
                    <div class="display-6 text-center py-10 my-10 text-white">
                        Zerda Software has served many <span class="text-primary">customers</span> and <span
                            class="text-primary">specializes</span> in developing many applications.
                        The company works with an <span class="text-primary">experienced</span> software team to provide
                        <span class="text-primary">high quality</span>
                        services to its customers.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light pt-10">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h2>Base Pricing Plan at Zerda Software</h2>
                <p class="lead">At Zerda Software, we offer flexible pricing options to provide tailored solutions to
                    meet our clients' diverse needs. Keeping customer satisfaction in mind, we maintain the quality and
                    value of our services. Below is an explanation of our base pricing plan:</p>
                <h5>Our base pricing plan may include the following services:</h5>
            </div>
            <div class="row gx-5 z-1">
                <div class="col-lg-4 mb-5 mb-lg-n10" data-aos="fade-up" data-aos-delay="100">
                    <div class="card pricing h-100">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="badge bg-light text-dark rounded-pill badge-marketing badge-sm">Website
                                    Design and Development
                                </div>
                                <div class="pricing-price">
                                    <sup>$</sup>
                                    499 <span class="pricing-price-period">/yearly</span>
                                </div>
                            </div>
                            <ul class="fa-ul pricing-list">
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                    <span class="text-dark">Customized website design tailored to the client's brand identity and requirements.</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                    <span class="text-dark">Responsive and user-friendly website layout for optimal viewing across different devices.</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                    <span class="text-dark">Integration of essential features such as contact forms, galleries, and e-commerce functionality.</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                    <span class="text-dark">Content management system (CMS) for easy website maintenance and updates.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-n10" data-aos="fade-up">
                    <div class="card pricing h-100">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="badge bg-primary-soft rounded-pill badge-marketing badge-sm text-primary">
                                    Social Media Management
                                </div>
                                <div class="pricing-price">
                                    <sup>$</sup>
                                    199
                                    <span class="pricing-price-period">/monthly</span>
                                </div>
                            </div>
                            <ul class="fa-ul pricing-list">
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                    <span class="text-dark">Creation and management of social media accounts on popular platforms (e.g., Facebook, Instagram, Twitter).</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                    <span class="text-dark">Development of a social media strategy to engage the target audience and increase brand visibility.</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                    <span class="text-dark">Regular posting of high-quality content, including text, images, and videos.</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                    <span class="text-dark">Monitoring and analysis of social media performance using analytics tools.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-n10" data-aos="fade-up" data-aos-delay="100">
                    <div class="card pricing h-100">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="badge bg-light text-dark rounded-pill badge-marketing badge-sm">
                                    Digital Transformation Consulting
                                </div>
                                <div class="pricing-price">
                                    <sup>$</sup>
                                    999
                                    <span class="pricing-price-period">/monthly</span>
                                </div>
                                <ul class="fa-ul pricing-list">
                                    <li class="pricing-list-item">
                                        <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                        <span class="text-dark">In-depth analysis of the client's business processes and identification of areas for digital transformation.</span>
                                    </li>
                                    <li class="pricing-list-item">
                                        <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                        <span class="text-dark">Development of a customized digital transformation roadmap with clear goals and milestones.</span>
                                    </li>
                                    <li class="pricing-list-item">
                                        <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                        <span class="text-dark">Guidance on adopting advanced technologies such as cloud computing, AI, and automation.</span>
                                    </li>
                                    <li class="pricing-list-item">
                                        <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                        <span class="text-dark">Ongoing support and consultation to ensure successful implementation and adaptation.</span>
                                    </li>
                                    <li class="pricing-list-item">
                                        <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                        <span class="text-dark">+ Website Design and Development</span>
                                    </li>
                                    <li class="pricing-list-item">
                                        <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                        <span class="text-dark">+ Social Media Management</span>
                                    </li>
                                </ul>
                            </div>
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
    <section class="bg-dark pb-10 pt-15">
        <div class="container px-5">
            <div class="row gx-5 mb-10 mt-5">
                <div class="col-lg-6 mb-5">
                    <div class="d-flex h-100">
                        <div class="icon-stack flex-shrink-0 bg-teal text-white"><i class="fas fa-question"></i></div>
                        <div class="ms-4">
                            <h5 class="text-white">Base Pricing Plan:</h5>
                            <p class="text-white-50">Our base pricing plan serves as a suitable starting point to
                                deliver fundamental services to our
                                clients. This plan encompasses the overall scope and key features of our services. The
                                pricing may
                                vary depending on the specific requirements and complexity of each project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="d-flex h-100">
                        <div class="icon-stack flex-shrink-0 bg-teal text-white"><i class="fas fa-question"></i></div>
                        <div class="ms-4">
                            <h5 class="text-white"> Website Design and Development: Why is it Important for Your
                                Business?</h5>
                            <p class="text-white-50">A professional website enables your business to stand out in the
                                digital world. Your online presence and brings numerous benefits. A modern and
                                user-friendly website
                                that represents your brand captures the attention of potential customers, increases
                                brand visibility, and provides a competitive advantage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100">
                        <div class="icon-stack flex-shrink-0 bg-teal text-white"><i class="fas fa-question"></i></div>
                        <div class="ms-4">
                            <h5 class="text-white">Why Should You Invest in Social Media Management?</h5>
                            <p class="text-white-50">By receiving Social Media Management services, you can establish a
                                strong presence for your business on social media platforms, enhance your brand
                                awareness, improve customer communication and loyalty, and gain a competitive advantage.
                                Additionally, it can contribute to the growth of your business by increasing your
                                marketing and sales potential.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex h-100">
                        <div class="icon-stack flex-shrink-0 bg-teal text-white"><i class="fas fa-question"></i></div>
                        <div class="ms-4">
                            <h5 class="text-white">Why Should You Get Digital Transformation Consultancy for Your
                                Business to Prepare for the Future?</h5>
                            <p class="text-white-50">
                                In today's rapidly advancing technological landscape, keeping up with the pace of
                                technological developments is of great importance for businesses. Digital transformation
                                is the process of restructuring your organization's operations, processes, and business
                                models using digital technologies to gain efficiency, innovation, and a competitive
                                advantage. However, in this complex process, seeking professional digital transformation
                                consultancy can make a significant difference.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-5 justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="badge bg-transparent-light rounded-pill badge-marketing mb-4">Get Started</div>
                    <h2 class="text-white">Right now, we are offering a great incentive to start availing our services
                        with our starter package.</h2>
                    <p class="lead text-white-50 mb-5">This starter package includes the essential services you need to
                        grow your business and reach your goals. Whether you are a new business owner or looking to
                        enhance your existing business, our starter package will guide you and help you achieve your
                        objectives.</p>
                    <a class="btn btn-teal fw-500" href="https://wa.me/+905396017638" target="_blank">Buy Now!</a>
                </div>
            </div>
        </div>
    </section>

@endsection
