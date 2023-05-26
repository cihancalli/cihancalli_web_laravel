</main>
</div>
<div id="layoutDefault_footer">
    <footer class="footer pt-10 pb-5 mt-auto bg-black footer-dark">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-lg-3">
                    <div class="footer-brand">@yield('companyTitle','Zerda Software')</div>
                    <div class="mb-3">Design made easy</div>
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
                        <!--
                        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                            <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#!">Landing</a></li>
                                <li class="mb-2"><a href="#!">Pages</a></li>
                                <li class="mb-2"><a href="#!">Sections</a></li>
                                <li class="mb-2"><a href="#!">Documentation</a></li>
                                <li><a href="#!">Changelog</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                            <div class="text-uppercase-expanded text-xs mb-4">Technical</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#!">Documentation</a></li>
                                <li class="mb-2"><a href="#!">Changelog</a></li>
                                <li class="mb-2"><a href="#!">Theme Customizer</a></li>
                                <li><a href="#!">UI Kit</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                            <div class="text-uppercase-expanded text-xs mb-4">Includes</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#!">Utilities</a></li>
                                <li class="mb-2"><a href="#!">Components</a></li>
                                <li class="mb-2"><a href="#!">Layouts</a></li>
                                <li class="mb-2"><a href="#!">Code Samples</a></li>
                                <li class="mb-2"><a href="#!">Products</a></li>
                                <li class="mb-2"><a href="#!">Affiliates</a></li>
                                <li><a href="#!">Updates</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#!">Privacy Policy</a></li>
                                <li class="mb-2"><a href="#!">Terms and Conditions</a></li>
                                <li><a href="#!">License</a></li>
                            </ul>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <hr class="my-5"/>
            <div class="row gx-5 align-items-center">
                <div class="col-md-6 small">Copyright &copy; <a href="https://zerdasoftware.com/" target="_blank">Zerda
                        Software</a> {{ \Carbon\Carbon::now()->format('d M Y') }}</div>
                <div class="col-md-6 text-md-end small">
                    <!--
                    <a href="#!">Privacy Policy</a>
                    &middot;
                    <a href="#!">Terms &amp; Conditions</a>
                    -->
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
