
<x-frontend>

    @section('SEO')
    <title>Събития, терапевтични групи и семинари | Мирослава Мацурева</title>

    <meta name="description"
        content="Разгледайте предстоящите събития, терапевтични групи, семейни констелации, семинари и обучения с Мирослава Мацурева. Пространство за себепознание и личностно развитие.">

    <meta name="robots" content="index,follow">

    <meta name="googlebot" content="index,follow">

    <meta property="og:locale" content="bg_BG">

    <meta property="og:type" content="website">

    <meta property="og:title" content="Събития и терапевтични групи | Мирослава Мацурева">

    <meta property="og:description"
        content="Открийте предстоящите събития, семейни констелации, терапевтични групи и семинари с Мирослава Мацурева.">

    <meta property="og:site_name" content="Мирослава Мацурева">

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Събития и семинари | Мирослава Мацурева">

    <meta name="twitter:description"
        content="Предстоящи терапевтични групи, семейни констелации, семинари и обучения за личностно развитие с Мирослава Мацурева.">
@endsection

    <!-- Page Header -->
    <section class="page-header events-headers" style="background-image: url('/assets/images/viber_image_2026-11-01_13-30-53-157.jpg');">
        <div class="page-header__bg">
            <div class="page-header__bg__img"
                {{-- style="background-image: url('/assets/images/viber_image_2026-11-01_13-30-53-157.jpg');" --}}
                >
            </div>
            {{-- <div class="page-header__bg__shape-1"></div>
            <div class="page-header__bg__shape-2"></div> --}}
        </div>

        <div class="container">
            {{-- <h2 class="page-header__title">Предстоящи събития</h2> --}}

        </div>

        {{-- <img class="page-header__shape"
            src="/assets/images/shapes/bannar-shape-2.png"
            alt=""> --}}
    </section>

    @include('components.event-cards', $events)




</x-frontend>
