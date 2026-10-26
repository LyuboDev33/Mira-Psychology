
<x-frontend>

    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header__bg">
            <div class="page-header__bg__img"
                style="background-image: url('/assets/images/backgrounds/page-header-img-1.png');">
            </div>
            <div class="page-header__bg__shape-1"></div>
            <div class="page-header__bg__shape-2"></div>
        </div>

        <div class="container">
            <h2 class="page-header__title">Предстоящи събития</h2>

            <ul class="pelocis-breadcrumb list-unstyled">
                <li><a href="/">Начало</a></li>
                <li><span>Събития</span></li>
            </ul>
        </div>

        <img class="page-header__shape"
            src="/assets/images/shapes/bannar-shape-2.png"
            alt="">
    </section>

    @include('components.event-cards', $events)




</x-frontend>
