<!-- Footer Start -->
<footer class="main-footer bg-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="/images/logo-bestcars-white.png" alt="Logo">
                    </div>
                    <!-- Footer Logo End -->

                    <!-- About Footer Content Start -->
                    <div class="about-footer-content">
                        <p>{{ __('footer.about_text') }}</p>
                    </div>
                    <!-- About Footer Content End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-4 col-md-4">
                <!-- Footer Quick Links Start -->
                <div class="footer-links footer-quick-links">
                    <h3>{{ __('footer.policy_title') }}</h3>
                    <ul>
                        <li><a href="/legal/condtions">{{ __('footer.policy_terms') }}</a></li>
                        <li><a href="/legal/terms">{{ __('footer.policy_privacy') }}</a></li>
                    </ul>
                </div>
                <!-- Footer Quick Links End -->
            </div>

            <div class="col-lg-4 col-md-4">
                <!-- Footer Menu Start -->
                <div class="footer-links footer-menu">
                    <h3>{{ __('footer.links_title') }}</h3>
                    <ul>
                        <li>
                            <a href="/{{ app()->getLocale() }}">
                                {{ __('footer.link_home') }}
                            </a>
                        </li>

                        <li>
                            <a href="/{{ app()->getLocale() }}/about">
                                {{ __('footer.link_about') }}
                            </a>
                        </li>

                        <li>
                            <a href="/{{ app()->getLocale() }}/contact">
                                {{ __('footer.link_contact') }}
                            </a>
                        </li>

                        <li>
                            <a href="/{{ app()->getLocale() }}/services">
                                {{ __('footer.link_services') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Footer Menu End -->
            </div>

        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        <p>{{ __('footer.copyright') }}</p>
                    </div>
                    <!-- Footer Copyright End -->
                </div>

                <div class="col-lg-6 col-md-5">
                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/bestcarsrentacar"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a target="_blank"
                                    href="https://www.instagram.com/bestcarsrentacar?igsh=MW4yY2tldnk4ajFiYg%3D%3D"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>
<!-- Footer End -->

<!-- Jquery Library File -->
<script src="/js/jquery-3.7.1.min.js"></script>
<!-- Jquery Ui Js File -->
<script src="/js/jquery-ui.js"></script>
<!-- Bootstrap js file -->
<script src="/js/bootstrap.min.js"></script>
<!-- Validator js file -->
{{-- <script src="/js/validator.min.js"></script> --}}
<!-- SlickNav js file -->
<script src="/js/jquery.slicknav.js"></script>
<!-- Swiper js file -->
<script src="/js/swiper-bundle.min.js"></script>
<!-- Counter js file -->
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<!-- Magnific js file -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- SmoothScroll -->
<script src="/js/SmoothScroll.js"></script>
<!-- Parallax js -->
<script src="/js/parallaxie.js"></script>
<!-- MagicCursor js file -->
<script src="/js/gsap.min.js"></script>
<script src="/js/magiccursor.js"></script>
<!-- Text Effect js file -->
<script src="/js/SplitText.js"></script>
<script src="/js/ScrollTrigger.min.js"></script>
<!-- YTPlayer js File -->
<script src="/js/jquery.mb.YTPlayer.min.js"></script>
<!-- Wow js file -->
<script src="/js/wow.js"></script>
<!-- Main Custom js file -->
<script src="/js/function.js"></script>


<script>
    if ($('#createCar')) {
        tinymce.init({
            selector: '#createCar, #createCar2, #createCar3',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    }
</script>
