
<x-frontend>

    @section('SEO')
        <title>Успешно записан час | Мира Терапия</title>

        <meta name="description"
            content="Вашият час в Мира Терапия е успешно записан. Благодарим Ви за доверието и очакваме с нетърпение нашата среща.">

        <meta name="robots" content="noindex,nofollow">
    @endsection

    <main>

        <section class="appointment-success">

            <div class="appointment-success__decoration appointment-success__decoration--left"></div>
            <div class="appointment-success__decoration appointment-success__decoration--right"></div>

            <div class="container">

                <div class="appointment-success__content">

                    <div class="appointment-success__icon">
                        <i class="fa-solid fa-check"></i>
                    </div>

                    <span class="appointment-success__subtitle">
                        БЛАГОДАРЯ ВИ ЗА ДОВЕРИЕТО
                    </span>

                    <h1 class="appointment-success__title">
                        Вашият час е <span>успешно записан!</span>
                    </h1>

                    <div class="appointment-success__divider">
                        <span></span>
                        <i class="fa-solid fa-leaf"></i>
                        <span></span>
                    </div>

                    <p class="appointment-success__description">
                        Благодаря Ви, че направихте тази крачка към себе си.
                        Вашата среща е успешно запазена и с радост
                        очаквам да се видим!
                    </p>

                    <div class="appointment-success__message">

                        <i class="fa-regular fa-heart"></i>

                        <p>
                            Понякога най-важната стъпка е просто да отделим
                            време за себе си. Радвам се, че избрахте
                            да направите точно това.
                        </p>

                    </div>

                    <p class="appointment-success__footer-text">
                        До скоро! <i class="fa-solid fa-heart"></i>
                    </p>

                    <a href="{{ url('/') }}" class="pelocis-btn appointment-success__button">
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
