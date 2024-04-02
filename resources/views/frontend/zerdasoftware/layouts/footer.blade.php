</main>
</div>
<div id="layoutDefault_footer">
    <footer class="footer pt-10 pb-5 mt-auto bg-black footer-dark">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-lg-3">
                    <div class="footer-brand">@yield('zerdasoftwareTitle','Zerda Software')</div>
                    <div class="mb-3">
                        <a href="https://goo.gl/maps/6sGeFkdWPtqpsKpS9" target="_blank">İstanbul/Turkey</a>
                        <br>
                        <a href="https://wa.me/+905396017638" target="_blank">+90 539 601 76 38</a>
                        <br>
                        <a href="mailto:info@zerdasoftware.com" target="_blank">info@zerdasoftware.com</a>
                    </div>
                    <div class="icon-list-social mb-5">
                        <a class="icon-list-social-link" target="_blank"
                           href="https://www.instagram.com/zerdasoftware/"><i class="fab fa-instagram"></i></a>
                        <a class="icon-list-social-link" target="_blank"
                           href="https://www.facebook.com/zerdasoftware"><i class="fab fa-facebook"></i></a>
                        <a class="icon-list-social-link" target="_blank" href="https://github.com/zerdasoftware"><i
                                class="fab fa-github"></i></a>
                        <a class="icon-list-social-link" target="_blank" href="https://twitter.com/zerdasoftware"><i
                                class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-5">

                        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                            <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#!">Order & Reservation Management</a></li>
                                <li class="mb-2"><a href="#!">QR Menu</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                            <div class="text-uppercase-expanded text-xs mb-4">Start-Up</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#!">Poster Sepeti</a></li>
                                <li class="mb-2"><a href="#!">Ara Getirsin</a></li>
                                <li class="mb-2"><a href="#!">We Are Yona</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                            <div class="text-uppercase-expanded text-xs mb-4">Services</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#!">Website Design and Development</a></li>
                                <li class="mb-2"><a href="#!">Social Media Management</a></li>
                                <li class="mb-2"><a href="#!">Digital Transformation Consulting</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#!">Privacy Policy</a></li>
                                <li class="mb-2"><a href="#!">Terms and Conditions</a></li>
                                <li><a href="{{route("contact")}}">Contact Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <hr class="my-5"/>
            <div class="row gx-5 align-items-center">
                <div class="col-md-6 small">Copyright &copy; <a href="https://zerdasoftware.com/" target="_blank">Zerda
                        Software</a> {{ \Carbon\Carbon::now()->format('d M Y') }}</div>
                <div class="col-md-6 text-md-end small">

                    <a href="#!">Privacy Policy</a>
                    &middot;
                    <a href="#!">Terms &amp; Conditions</a>

                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="{{route('homepage')}}/zerdasoftware/dist/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile',
        duration: 600,
        once: true,
    });
</script>
</body>
</html>
