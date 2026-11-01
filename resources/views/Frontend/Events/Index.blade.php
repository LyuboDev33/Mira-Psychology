
<x-frontend>

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
            <h2 class="page-header__title">Предстоящи събития</h2>

        </div>

        {{-- <img class="page-header__shape"
            src="/assets/images/shapes/bannar-shape-2.png"
            alt=""> --}}
    </section>

    @include('components.event-cards', $events)




</x-frontend>
