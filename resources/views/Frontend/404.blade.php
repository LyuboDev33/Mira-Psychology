
<x-frontend>

    @section('SEO')
        <title>404 - Страницата не е намерена | Мира Терапия</title>

        <meta name="description"
            content="Страницата, която търсите, не беше намерена. Върнете се към началната страница на Мира Терапия.">

        <meta name="robots" content="noindex,follow">
    @endsection

    <main>

        <section class="error-page">

            <div class="error-page__decoration error-page__decoration--left"></div>
            <div class="error-page__decoration error-page__decoration--right"></div>

            <div class="container">

                <div class="error-page__content">

                    <span class="error-page__subtitle">
                        ОПА! НЕЩО СЕ ОБЪРКА
                    </span>

                    <h1 class="error-page__number">
                        404
                    </h1>

                    <div class="error-page__divider">
                        <span></span>
                        <i class="fa-solid fa-leaf"></i>
                        <span></span>
                    </div>

                    <h2 class="error-page__title">
                        Страницата не е намерена
                    </h2>

                    <p class="error-page__description">
                        Изглежда, че страницата, която търсите, не съществува
                        или е била преместена. Не се притеснявайте,
                        винаги можете да се върнете към началото.
                    </p>

                    <a href="{{ url('/') }}" class="pelocis-btn error-page__button">
                        <span>
                            <i class="fa-solid fa-arrow-left"></i>
                            Към началната страница
                        </span>
                    </a>

                </div>

            </div>

        </section>

    </main>

</x-frontend>
