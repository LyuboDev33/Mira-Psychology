<x-frontend>

    @section('SEO')
        <title>Семейни констелации | Мирослава Мацурева</title>
        <meta name="description"
            content="Индивидуални и групови семейни констелации с Мирослава Мацурева. Изследване на семейни отношения, лични граници и повтарящи се житейски модели.">
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Мира Терапия">
        <meta property="og:title" content="Семейни констелации | Мирослава Мацурева">
        <meta property="og:description"
            content="Индивидуални констелации с фигурки и групови семейни констелации – пространство за осъзнаване и нова перспектива.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/images/resources/about-img-1.png') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Семейни констелации | Мирослава Мацурева">
        <meta name="twitter:description" content="Научете как протичат индивидуалните и груповите семейни констелации.">
    @endsection

    <!-- HERO -->
    <section class="main-slider-three">
        <div class="main-slider-three__carousel pelocis-owl__carousel owl-carousel"
            data-owl-options='{"items":1,"autoplay":false,"margin":0,"nav":false,"dots":false}'>
            <div class="item">
                <div class="main-slider-three__item">
                    <div class="main-slider-three__image">
                        <div class="main-slider-three__image__one">
                            <img src="{{ asset('/assets/images/therapies/semeini-konstelacii/snimki/f9d58c63-11a5-444f-9433-f2e17eaaf926.png') }}"
                                alt="Семейни констелации с Мирослава Мацурева" fetchpriority="high">
                        </div>
                        <div class="main-slider-three__image__shape"></div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6"></div>
                            <div class="col-xl-6">
                                <div class="main-slider-three__content">
                                    <h5 class="main-slider-three__sub-title">Психотерапия с Мирослава Мацурева</h5>
                                    <h1 class="main-slider-three__title">
                                        Семейни констелации
                                        <img src="{{ asset('assets/images/shapes/home-3-shape-1.png') }}" alt=""
                                            class="main-slider-three__title--shape">
                                    </h1>
                                    <p class="main-slider-three__text">
                                        Пространство за изследване на семейните отношения, личните теми и повтарящите се
                                        модели – индивидуално или в група.
                                    </p>
                                    <div class="main-slider-three__btn">
                                        <a href="#individual-constellations" class="pelocis-btn pelocis-btn--base">
                                            <span>Научете повече <i class="icon-right-arrow-white"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/shapes/home-3-shape-2.png') }}" alt=""
                        class="main-slider-three__item--shape-1">
                    <img src="{{ asset('assets/images/shapes/home-3-shape-3.png') }}" alt=""
                        class="main-slider-three__item--shape-2">
                </div>
            </div>
        </div>
    </section>

    <!-- INDIVIDUAL CONSTELLATIONS -->
    <section class="about-three" id="individual-constellations">
        <div class="about-three__bg">
            <div class="about-three__shape-one"><img src="{{ asset('assets/images/shapes/about-3-shape-1.png') }}"
                    alt=""></div>
            <div class="about-three__shape-two"><img src="{{ asset('assets/images/shapes/about-3-shape-2.png') }}"
                    alt=""></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="about-three__content">
                        <div class="sec-title">
                            <div class="sec-title__shape"></div>
                            <h6 class="sec-title__tagline">Поставяне на лична тема с фигурки</h6>
                            <h2 class="sec-title__title">Индивидуални семейни констелации</h2>
                        </div>
                        <p class="about-three__text">Индивидуалната констелация е пространство за задълбочено изследване
                            на конкретна лична тема, която ви вълнува или се повтаря в живота ви.</p>
                        <p class="about-three__text">Работата започва с разговор, в който заедно изясняваме какво искате
                            да изследвате и какъв е въпросът, който стои зад вашата тема.</p>
                        <p class="about-three__text">След това чрез фигурки като представители се създава пространствен
                            образ на значимите хора, отношения или елементи, свързани с конкретната ситуация.</p>
                        <div class="about-three__card">
                            <ul class="about-three__card__list">
                                <li class="about-three__card__item">
                                    <div class="about-three__card__icon"><i class="icon-social-care"></i></div>
                                    <h3>Поглед към ситуацията отстрани</h3>
                                </li>
                                <li><span class="icon-arrow-circle-check"></span> Изследване на отношенията и позициите
                                </li>
                                <li><span class="icon-arrow-circle-check"></span> Разпознаване на повтарящи се модели
                                </li>
                                <li><span class="icon-arrow-circle-check"></span> Възможност за нова перспектива и
                                    различен избор</li>
                            </ul>
                        </div>
                        <p class="about-three__content__text"><span>Важно:</span> Индивидуалната констелация не цели да
                            даде готов отговор или да предскаже бъдещето.</p>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="pelocis-stretch-element-inside-column">
                        <div class="about-three__img">
                            <img src="{{ asset('assets/images/resources/about-img-1.png') }}"
                                alt="Индивидуални семейни констелации" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDIVIDUAL TOPICS -->
    <section class="feature-three">
        <div class="container">
            <div class="feature-three__title text-center">
                <div class="sec-title">
                    <div class="sec-title__shape"></div>
                    <h6 class="sec-title__tagline">Индивидуална работа</h6>
                    <h2 class="sec-title__title">Какви лични теми можем да изследваме?</h2>
                    <p>Констелацията може да помогне да погледнете позната ситуация от различен ъгъл.</p>
                </div>
            </div>
            <div class="row gutter-y-30">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/purvi-ikonki/viber_image_2026-11-11_12-36-24-211.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Семейни отношения</h3>
                        <p class="feature-three__card__text">Отношения с майка, баща или други членове на семейството;
                            семейни конфликти.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/purvi-ikonki/viber_image_2026-11-11_12-36-22-527.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Партньорство</h3>
                        <p class="feature-three__card__text">Партньорски отношения и повтарящи се модели във връзките.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/purvi-ikonki/viber_image_2026-11-11_12-36-27-263.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Принадлежност и граници</h3>
                        <p class="feature-three__card__text">Трудности с принадлежността и отделянето; лични граници.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/purvi-ikonki/viber_image_2026-11-11_12-36-21-749.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Загуба и раздяла</h3>
                        <p class="feature-three__card__text">Преживявания на раздяла, загуба и промяна в отношенията.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/purvi-ikonki/viber_image_2026-11-11_12-36-26-423.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Важни решения</h3>
                        <p class="feature-three__card__text">Житейски избори, решения и нови посоки.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/purvi-ikonki/viber_image_2026-11-11_12-36-25-693.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Повтарящи се ситуации</h3>
                        <p class="feature-three__card__text">Житейски ситуации и модели, които се появяват отново и
                            отново.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/purvi-ikonki/viber_image_2026-11-11_12-36-23-468.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Усещане за блокиране</h3>
                        <p class="feature-three__card__text">Чувство, че не можете да продължите напред.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDIVIDUAL PROCESS -->
    <section class="work-process-three">
        <div class="container">
            <div class="text-center">
                <div class="sec-title">
                    <div class="sec-title__shape"></div>
                    <h6 class="sec-title__tagline">Стъпка по стъпка</h6>
                    <h2 class="sec-title__title">Как протича индивидуалната констелация?</h2>
                </div>
            </div>
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/vtori-ikonki/viber_image_2026-11-11_12-44-18-163.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">01. Разговор</h3>
                        <p class="feature-three__card__text">Изясняваме личната тема и въпроса, който стои зад нея.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/vtori-ikonki/viber_image_2026-11-11_12-44-17-357.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">02. Пространствен образ</h3>
                        <p class="feature-three__card__text">С помощта на фигурки представяме значимите хора, отношения
                            и елементи от ситуацията.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/vtori-ikonki/viber_image_2026-11-11_12-44-16-497.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">03. Изследване</h3>
                        <p class="feature-three__card__text">Разглеждаме отношенията, позициите и моделите, които
                            стават видими.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDIVIDUAL QUOTE -->
    <section class="video-three">
        <div class="container-fluid">
            <div class="video-three__card"
                style="background-image: url('{{ asset('assets/images/backgrounds/welcome-bg.jpg') }}');">
                <h4 class="video-three__card__v-title">Нова перспектива</h4>
                <h2 class="video-three__card__title">Понякога това, което ни е трудно да разберем с ума, можем да видим
                    по различен начин, когато го поставим пред себе си.</h2>
            </div>
        </div>
    </section>

    <!-- GROUP CONSTELLATIONS -->
    <section class="about-three" id="group-constellations">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 custom-about wow fadeInUp" data-wow-delay="100ms">
                    <div class="about-three__content">
                        <div class="sec-title">
                            <div class="sec-title__shape"></div>
                            <h6 class="sec-title__tagline">Пространство за среща, осъзнаване и промяна</h6>
                            <h2 class="sec-title__title">Групови семейни констелации</h2>
                        </div>
                        <p class="about-three__text">Груповите семейни констелации събират хора, които искат да
                            изследват лични теми, свързани със семейството, партньорските отношения, принадлежността и
                            повтарящите се житейски модели.</p>
                        <p class="about-three__text">В групата всеки участник може да бъде клиент с поставена тема или
                            представител в констелацията на друг човек.</p>
                        <p class="about-three__text">Работата с представители създава възможност отношенията и
                            динамиките, свързани с дадена тема, да бъдат изведени в пространството и разгледани по нов
                            начин.</p>
                        <div class="about-three__card">
                            <ul class="about-three__card__list">
                                <li class="about-three__card__item">
                                    <div class="about-three__card__icon"><i class="icon-partnership"></i></div>
                                    <h3>Различни начини за участие</h3>
                                </li>
                                <li><span class="icon-arrow-circle-check"></span> Поставяне на собствена тема</li>
                                <li><span class="icon-arrow-circle-check"></span> Участие като представител</li>
                                <li><span class="icon-arrow-circle-check"></span> Присъствие като наблюдател</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="pelocis-stretch-element-inside-column">
                        <div class="about-three__img"><img src="{{ asset('/assets/images/therapies/semeini-konstelacii/snimki/a865709f-cb56-40f0-96d3-a9ebc512c237.png') }}"
                                alt="Групови семейни констелации" loading="lazy"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GROUP PROCESS -->
    <section class="work-process-three">
        <div class="container">
            <div class="text-center">
                <div class="sec-title">
                    <div class="sec-title__shape"></div>
                    <h6 class="sec-title__tagline">Груповият процес</h6>
                    <h2 class="sec-title__title">Как протича една група?</h2>
                </div>
            </div>
            <div class="row gutter-y-30">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/grupovi/viber_image_2026-11-11_12-46-32-967.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">01. Създаваме пространство</h3>
                        <p class="feature-three__card__text">В началото създаваме безопасно пространство и се
                            запознаваме с процеса.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/grupovi/viber_image_2026-11-11_12-46-36-137.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">02. Поставяне на тема</h3>
                        <p class="feature-three__card__text">Участниците, които желаят, могат да поставят свои лични
                            теми.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/grupovi/viber_image_2026-11-11_12-46-33-903.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">03. Работа с представители</h3>
                        <p class="feature-three__card__text">За всяка тема се определят необходимите представители и
                            започва констелационната работа.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/grupovi/viber_image_2026-11-11_12-46-35-188.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">04. Лично преживяване</h3>
                        <p class="feature-three__card__text">Всеки може да участва чрез своята тема, като представител
                            или наблюдател, със собствено темпо.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GROUP TOPICS -->
    <section class="feature-three">
        <div class="container">
            <div class="feature-three__title text-center">
                <div class="sec-title">
                    <div class="sec-title__shape"></div>
                    <h6 class="sec-title__tagline">Теми за групова работа</h6>
                    <h2 class="sec-title__title">Какви теми могат да бъдат поставяни?</h2>
                </div>
            </div>
            <div class="row gutter-y-30">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/treti-ikonki/viber_image_2026-11-11_12-51-08-522.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Родители и семейство</h3>
                        <p class="feature-three__card__text">Отношения с родители и семейство, майки и дъщери, бащи и
                            деца.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/treti-ikonki/viber_image_2026-11-11_12-51-10-572.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Партньорски отношения</h3>
                        <p class="feature-three__card__text">Партньорство и повтарящи се модели в отношенията.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/treti-ikonki/viber_image_2026-11-11_12-51-12-633.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Граници и принадлежност</h3>
                        <p class="feature-three__card__text">Принадлежност, лични граници и семейни конфликти.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/treti-ikonki/viber_image_2026-11-11_12-51-09-208.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Раздяла и загуба</h3>
                        <p class="feature-three__card__text">Преживявания, свързани с раздяла, загуба и промяна.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/treti-ikonki/viber_image_2026-11-11_12-51-09-887.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Житейски преходи и решения</h3>
                        <p class="feature-three__card__text">Важни житейски избори и периоди на преход.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-three__card">
                        <div class="feature-three__card__icon">
                            <img src="/assets/images/therapies/semeini-konstelacii/treti-ikonki/viber_image_2026-11-11_12-51-11-887.jpg" alt="">
                        </div>
                        <h3 class="feature-three__card__title">Повтарящи се ситуации</h3>
                        <p class="feature-three__card__text">Усещане за блокиране и повтарящи се житейски ситуации.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IMPORTANT -->
    <section class="skills-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="skills-three__images">
                        <img src="{{ asset('/assets/images/therapies/semeini-konstelacii/snimki/6b85ffef-86fc-47e2-ae9f-4178195f5255.png') }}"
                            alt="Пространство за лична работа" class="skills-three__images__one" loading="lazy">
                        <img src="{{ asset('assets/images/therapies/semeini-konstelacii/snimki/a865709f-cb56-40f0-96d3-a9ebc512c237.png') }}"
                            alt="Осъзнаване и нова перспектива" class="skills-three__images__two" loading="lazy">
                        <img src="{{ asset('assets/images/shapes/skills-3-shape-1.png') }}" alt=""
                            class="skills-three__images__shape-one">
                        <div class="skills-three__images__shape-two"></div>
                        <div class="skills-three__images__shape-three"></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="skills-three__content">
                        <div class="skills-three__title">
                            <div class="sec-title">
                                <div class="sec-title__shape"></div>
                                <h6 class="sec-title__tagline">Важно е да знаете</h6>
                                <h2 class="sec-title__title">Всеки участва със собственото си темпо</h2>
                            </div>
                            <p class="skills-three__text">Груповата работа създава пространство за осъзнаване,
                                преживяване и нова перспектива, като всеки участник сам определя докъде и с какво темпо
                                иска да се включи.</p>
                        </div>
                        <ul class="skills-three__content__list">
                            <li><span class="icon-arrow-circle-check"></span> Можете да поставите собствена тема</li>
                            <li><span class="icon-arrow-circle-check"></span> Можете да бъдете представител</li>
                            <li><span class="icon-arrow-circle-check"></span> Можете да наблюдавате процеса</li>
                        </ul>
                        <p class="skills-three__text mt-4">Констелационната работа предлага възможност за изследване на
                            лични преживявания и отношения, без да обещава готови отговори или определен резултат.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-frontend>
