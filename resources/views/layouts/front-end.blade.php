<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Two || Pelocis || HTML Template For Psychology & Counseling</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Pelocis a modern psychology, psychiatrist and therapy HTML Template. We especially designed this template for mental health, psychology & counseling, psychiatrist, counselor, therapies. It is perfect for every therapist, practitioner, couples therapy, as well as any other type of psychological and mental health care website." />

    <!-- fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    {{-- <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" /> --}}
    {{-- <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" /> --}}
    {{-- <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" /> --}}
    {{-- <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.css" /> --}}
    <link rel="stylesheet" href="/assets/vendors/pelocis-icons/style.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/slick-carousel/css/slick-theme.min.css" />
    <link rel="stylesheet" href="/assets/vendors/slick-carousel/css/slick.min.css" />

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css?v=<?php echo time(); ?>" />

        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">



    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/pelocis.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    {{-- <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div> --}}
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('layouts.partials.frontend.header')

            {{ $slot }}

        @include('layouts.partials.frontend.footer')

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="/assets/images/logo-light-2.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@pelocis.com">needhelp@pelocis.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://facebook.com">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://google.com">
                    <i class="fab fa-google" aria-hidden="true"></i>
                    <span class="sr-only">Google</span>
                </a>
                <a href="https://linkedin.com">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    <span class="sr-only">Linkedin</span>
                </a>
                <a href="https://instagram.com">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="pelocis-btn pelocis-btn--base">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <!-- Sidebar One Start -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <div class="sidebar-one__close"><i class="flaticon-close"></i></div><!-- /.siderbar-close -->
            <div class="sidebar-one__logo">
                <a href="index.html" aria-label="logo image"><img src="/assets/images/logo-light-2.png" alt="pelocis" width="224"></a>
            </div><!-- /.sidebar-one__logo-box -->
            <p class="sidebar-one__text">
                Mauris ut enim sit amet lacus ornare ullamcor. Praesent placerat nequ
                puru rhoncu tincidunt odio ultrices. Sed feugiat feugiat felis.
            </p>
            <h4 class="sidebar-one__title">Contact Info:</h4>
            <ul class="sidebar-one__info">
                <li>
                    <span class="fas fa-map-marker-alt"></span>
                    85 Ketch Harbour RoadBensalem, PA 19020
                </li>
                <li>
                    <span class="fas fa-envelope"></span>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                </li>
                <li>
                    <span class="fas fa-phone-alt"></span>
                    <a href="tel:09969569535">099 695 695 35</a>
                </li>
            </ul>
            <div class="sidebar-one__social">
                <a href="https://facebook.com">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://google.com">
                    <i class="fab fa-google" aria-hidden="true"></i>
                    <span class="sr-only">Google</span>
                </a>
                <a href="https://linkedin.com">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    <span class="sr-only">Linkedin</span>
                </a>
                <a href="https://instagram.com">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /sidebar-one__socila -->
            <h4 class="sidebar-one__title">Newsletter:</h4>
            <form action="#" data-url="MAILCHIMP_FORM_URL" class="sidebar-one__newsletter mc-form">
                <input type="text" name="EMAIL" placeholder="Email address">
                <button type="submit" class="fas fa-paper-plane">
                    <span class="sr-only">submit</span><!-- /.sr-only -->
                </button>
            </form><!-- /.footer-widget__newsletter mc-form -->
        </div><!-- /.sidebar__content -->
    </aside>
    <!-- Sidebar One Start -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">Отидете в началото</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <script src="/assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    {{-- <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script> --}}
    <script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    {{-- <script src="/assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script> --}}
    <script src="/assets/vendors/slick-carousel/js/slick.min.js"></script>

    <!-- template js -->
    <script src="/assets/js/pelocis.js"></script>
</body>

</html>
