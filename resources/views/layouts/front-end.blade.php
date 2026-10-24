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

    {{-- Cal.com Embed --}}
    <script type="text/javascript">
        (function(C, A, L) {
            let p = function(a, ar) {
                a.q.push(ar);
            };
            let d = C.document;

            C.Cal = C.Cal || function() {
                let cal = C.Cal;
                let ar = arguments;

                if (!cal.loaded) {
                    cal.ns = {};
                    cal.q = cal.q || [];
                    d.head.appendChild(d.createElement("script")).src = A;
                    cal.loaded = true;
                }

                if (ar[0] === L) {
                    const api = function() {
                        p(api, arguments);
                    };

                    const namespace = ar[1];
                    api.q = api.q || [];

                    if (typeof namespace === "string") {
                        cal.ns[namespace] = cal.ns[namespace] || api;
                        p(cal.ns[namespace], ar);
                        p(cal, ["initNamespace", namespace]);
                    } else {
                        p(cal, ar);
                    }

                    return;
                }

                p(cal, ar);
            };
        })(window, "https://app.cal.com/embed/embed.js", "init");

        Cal("init", "test", {
            origin: "https://app.cal.com"
        });

        Cal.config = Cal.config || {};
        Cal.config.forwardQueryParams = true;

        Cal.ns.test("ui", {
            hideEventTypeDetails: false,
            layout: "month_view"
        });
    </script>


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lenis@1.3.23/dist/lenis.min.js?v=<?php echo time(); ?>"></script>


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css?v=<?php echo time(); ?>" />

    <link rel="stylesheet" href="/assets/vendors/pelocis-icons/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.carousel.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.theme.default.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/slick-carousel/css/slick-theme.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/slick-carousel/css/slick.min.css?v=<?php echo time(); ?>" />

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css?v=<?php echo time(); ?>" />

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}?v=<?php echo time(); ?>">



    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/pelocis.css?v=<?php echo time(); ?>" />

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    {{-- <div class="preloader">
        <div class="preloader__image" style="background-image: url(/assets/images/loader.png);"></div>
    </div> --}}
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('layouts.partials.frontend.header')

        {{ $slot }}

        @include('layouts.partials.frontend.footer')

    </div><!-- /.page-wrapper -->



    <!-- Sidebar One Start -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <div class="sidebar-one__close"><i class="flaticon-close"></i></div><!-- /.siderbar-close -->
            <div class="sidebar-one__logo">
                <a href="index.html" aria-label="logo image"><img src="/assets/images/logo-light-2.png"
                        alt="pelocis" width="224"></a>
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



    <script src="/assets/vendors/jquery/jquery-3.7.0.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js?v=<?php echo time(); ?>"></script>

    <script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/wow/wow.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/slick-carousel/js/slick.min.js?v=<?php echo time(); ?>"></script>

    <!-- template js -->
    <script src="/assets/js/pelocis.js?v=<?php echo time(); ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            initializeLenis();
        });

        function initializeLenis() {

            const lenis = new Lenis({
                duration: 1,
                smoothWheel: true,
                wheelMultiplier: 0.8,
                touchMultiplier: 0.8,
                lerp: 0.5
            });

            function lenisAnimationFrame(time) {
                lenis.raf(time);
                requestAnimationFrame(lenisAnimationFrame);
            }

            requestAnimationFrame(lenisAnimationFrame);
        }
    </script>


</body>

</html>
