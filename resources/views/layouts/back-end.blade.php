<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Табло за управление | Pelocis</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;500;600;700&family=Saira:wght@400;500;600;700&family=Solway:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Place the first <script>
        tag in your HTML 's <head> -->
            <script src =
            "https://cdn.tiny.cloud/1/v2rtxhtgnbmw7x4hswnvpvejzuaankjl6lfde5n3swkjawjo/tinymce/8/tinymce.min.js"
        referrerpolicy = "origin"
        crossorigin = "anonymous" >
    </script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">

    <!-- Animations -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">

    <!-- Pelocis Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/pelocis-icons/style.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick-carousel/css/slick-theme.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/slick-carousel/css/slick.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/pelocis.css') }}">

        <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    @stack('styles')

</head>

<body>

    <div class="backend-dashboard" id="backendDashboard">

        <!-- Sidebar -->
        @include('layouts.partials.backend.sidebar')

        <!-- Mobile Sidebar Backdrop -->
        <div class="dashboard-backdrop" id="dashboardBackdrop" aria-hidden="true">
        </div>

        <!-- Main Dashboard Area -->
        <div class="dashboard-main">

            <!-- Header -->
            @include('layouts.partials.backend.header')

            <!-- Page Content -->
            <main class="dashboard-content">
                <div class="dashboard-panel rounded-4">

                    {{ $slot }}

                </div>

            </main>

        </div>

    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



    <!-- Dashboard Sidebar JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const sidebar = document.getElementById('dashboardSidebar');
            const backdrop = document.getElementById('dashboardBackdrop');
            const toggle = document.getElementById('dashboardToggle');
            const close = document.getElementById('dashboardClose');

            if (!sidebar || !backdrop || !toggle || !close) {
                return;
            }

            function openSidebar() {
                sidebar.classList.add('is-open');
                backdrop.classList.add('is-visible');

                toggle.setAttribute('aria-expanded', 'true');

                document.body.style.overflow = 'hidden';
            }

            function closeSidebar() {
                sidebar.classList.remove('is-open');
                backdrop.classList.remove('is-visible');

                toggle.setAttribute('aria-expanded', 'false');

                document.body.style.overflow = '';
            }

            toggle.addEventListener('click', openSidebar);
            close.addEventListener('click', closeSidebar);
            backdrop.addEventListener('click', closeSidebar);

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeSidebar();
                }
            });

            window.addEventListener('resize', function() {
                if (window.innerWidth >= 992) {
                    closeSidebar();
                }
            });

        });
    </script>

    @stack('scripts')

</body>

</html>
