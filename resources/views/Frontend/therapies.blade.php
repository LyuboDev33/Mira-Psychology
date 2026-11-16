
<x-frontend>

    @section('SEO')
        <title>Психологически терапии | Видове терапия</title>
        <meta name="description"
            content="Научете повече за различните видове психологическа терапия, техните подходи и ползи.">
    @endsection

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
            <h1 class="page-header__title">Психологически терапии</h1>

            <ul class="pelocis-breadcrumb list-unstyled">
                <li><a href="/">Начало</a></li>
                <li><span>Психологически терапии</span></li>
            </ul>
        </div>

        <img class="page-header__shape"
            src="/assets/images/shapes/bannar-shape-2.png"
            alt="">
    </section>
    <!-- End Page Header -->


    <!-- Therapies Section -->
    <section class="service-details therapy-section">
        <div class="container">

            <div class="therapy-section__heading">
                <h2>Видове психологическа терапия</h2>
                <p>
                    Разгледайте различните терапевтични подходи,
                    като изберете съответния раздел.
                </p>
            </div>

            <!-- Bootstrap Tab Navigation -->
            <ul class="nav therapy-tabs"
                id="therapyTabs"
                role="tablist">

                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active"
                        id="therapy-one-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#therapy-one"
                        type="button"
                        role="tab"
                        aria-controls="therapy-one"
                        aria-selected="true">

                        <span class="therapy-tabs__number">01</span>
                        Терапия 1
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="therapy-two-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#therapy-two"
                        type="button"
                        role="tab"
                        aria-controls="therapy-two"
                        aria-selected="false">

                        <span class="therapy-tabs__number">02</span>
                        Терапия 2
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="therapy-three-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#therapy-three"
                        type="button"
                        role="tab"
                        aria-controls="therapy-three"
                        aria-selected="false">

                        <span class="therapy-tabs__number">03</span>
                        Терапия 3
                    </button>
                </li>

            </ul>
            <!-- End Tab Navigation -->


            <!-- Bootstrap Tab Content -->
            <div class="tab-content therapy-content"
                id="therapyTabsContent">

                <!-- Therapy 1 -->
                <div
                    class="tab-pane fade show active"
                    id="therapy-one"
                    role="tabpanel"
                    aria-labelledby="therapy-one-tab"
                    tabindex="0">

                    <div class="therapy-content__inner">

                        <h2 class="service-details__title">
                            Терапия 1
                        </h2>

                        <p class="service-details__text">
                            Тук ще добавим подробната информация
                            за първия вид психологическа терапия.
                        </p>

                    </div>
                </div>


                <!-- Therapy 2 -->
                <div
                    class="tab-pane fade"
                    id="therapy-two"
                    role="tabpanel"
                    aria-labelledby="therapy-two-tab"
                    tabindex="0">

                    <div class="therapy-content__inner">

                        <h2 class="service-details__title">
                            Терапия 2
                        </h2>

                        <p class="service-details__text">
                            Тук ще добавим подробната информация
                            за втория вид психологическа терапия.
                        </p>

                    </div>
                </div>


                <!-- Therapy 3 -->
                <div
                    class="tab-pane fade"
                    id="therapy-three"
                    role="tabpanel"
                    aria-labelledby="therapy-three-tab"
                    tabindex="0">

                    <div class="therapy-content__inner">

                        <h2 class="service-details__title">
                            Терапия 3
                        </h2>

                        <p class="service-details__text">
                            Тук ще добавим подробната информация
                            за третия вид психологическа терапия.
                        </p>

                    </div>
                </div>

            </div>
            <!-- End Tab Content -->

        </div>
    </section>
    <!-- End Therapies Section -->



</x-frontend>
