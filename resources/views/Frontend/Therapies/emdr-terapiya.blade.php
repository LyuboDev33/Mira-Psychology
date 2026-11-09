
<x-frontend>

    @section('SEO')
        <title>EMDR терапия | Мирослава Мацурева</title>

        <meta name="description"
            content="Научете повече за EMDR терапията с Мирослава Мацурева – подход за работа с травматични преживявания, тревожност, болезнени спомени и трудности във взаимоотношенията.">

        <meta name="robots" content="index,follow">
        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:locale" content="bg_BG">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Мира Терапия">
        <meta property="og:title" content="EMDR терапия | Мирослава Мацурева">
        <meta property="og:description"
            content="EMDR е структуриран терапевтичен подход за преработване на травматични и емоционално натоварващи преживявания.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/images/backgrounds/slider-3-1.jpg') }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="EMDR терапия | Мирослава Мацурева">
        <meta name="twitter:description"
            content="Повече за EMDR терапията, нейното приложение и начина, по който протича терапевтичният процес.">
    @endsection

        <!-- HERO -->
        <section class="main-slider-three">
            <div class="main-slider-three__carousel pelocis-owl__carousel owl-carousel"
                data-owl-options='{
                    "items": 1,
                    "autoplay": false,
                    "margin": 0
                }'>

                <div class="item">
                    <div class="main-slider-three__item">

                        <div class="main-slider-three__image">
                            <div class="main-slider-three__image__one">
                                <img
                                    src="{{ asset('assets/images/resources/about-img-1.png') }}"
                                    alt="EMDR терапия – спокойна и подкрепяща среда"
                                    fetchpriority="high"
                                >
                            </div>
                            <div class="main-slider-three__image__shape"></div>
                        </div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6"></div>

                                <div class="col-xl-6">
                                    <div class="main-slider-three__content">

                                        <h5 class="main-slider-three__sub-title">
                                            Психотерапия с Мирослава Мацурева
                                        </h5>

                                        <h1 class="main-slider-three__title">
                                            EMDR терапия
                                            {{-- <img
                                                src="{{ asset('assets/images/shapes/home-3-shape-1.png') }}"
                                                alt=""
                                                class="main-slider-three__title--shape"
                                            > --}}
                                        </h1>

                                        <p class="main-slider-three__text">
                                            Терапевтичен подход за преработване на
                                            травматични и силно емоционално
                                            натоварващи преживявания.
                                        </p>

                                        <div class="main-slider-three__btn">
                                            <a href="#about-emdr"
                                                class="pelocis-btn pelocis-btn--base">
                                                <span>
                                                    Научете повече
                                                    <i class="icon-right-arrow-white"></i>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <img
                            src="{{ asset('assets/images/shapes/home-3-shape-2.png') }}"
                            alt=""
                            class="main-slider-three__item--shape-1"
                        >

                        <img
                            src="{{ asset('assets/images/shapes/home-3-shape-3.png') }}"
                            alt=""
                            class="main-slider-three__item--shape-2"
                        >

                    </div>
                </div>

            </div>
        </section>


        <!-- ABOUT EMDR -->
        <section class="about-three" id="about-emdr">

            <div class="about-three__bg">
                <div class="about-three__shape-one">
                    <img
                        src="{{ asset('assets/images/shapes/about-3-shape-1.png') }}"
                        alt=""
                    >
                </div>

                <div class="about-three__shape-two">
                    <img
                        src="{{ asset('assets/images/shapes/about-3-shape-2.png') }}"
                        alt=""
                    >
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">

                        <div class="about-three__content">

                            <div class="sec-title">
                                <div class="sec-title__shape"></div>

                                <h6 class="sec-title__tagline">
                                    Повече за EMDR
                                </h6>

                                <h2 class="sec-title__title">
                                    Какво представлява EMDR терапията?
                                </h2>
                            </div>

                            <p class="about-three__text">
                                EMDR (Eye Movement Desensitization and Reprocessing)
                                е терапевтичен подход, разработен от Франсин Шапиро,
                                който се използва за преработване на травматични
                                и силно натоварващи преживявания.
                            </p>

                            <p class="about-three__text">
                                През 2013 г. Световната здравна организация
                                включва EMDR сред препоръчваните психологични
                                терапии за посттравматично стресово разстройство
                                (PTSD).
                            </p>

                            <div class="about-three__card">
                                <ul class="about-three__card__list">

                                    <li class="about-three__card__item">
                                        <div class="about-three__card__icon">
                                            <i class="icon-social-care"></i>
                                        </div>

                                        <h3>Индивидуален терапевтичен процес</h3>
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Не е необходимо да разказвате подробно
                                        всички детайли от преживяното.
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Работи се със спомени, емоции,
                                        телесни усещания и убеждения за себе си.
                                    </li>

                                </ul>
                            </div>

                            <p class="about-three__content__text">
                                <span>Важно:</span>
                                EMDR следва структуриран процес, който се
                                адаптира към конкретния човек и неговите
                                потребности.
                            </p>

                        </div>
                    </div>

                    <div class="col-xl-6 align-self-start wow fadeInRight" data-wow-delay="200ms">
                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img">
                                <img
                                    src="{{ asset('assets/images/resources/service-3-1.jpg') }}"
                                    alt="Индивидуална EMDR терапия"
                                    loading="lazy"
                                >
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        <!-- APPLICATIONS -->
        <section class="feature-three">

            <div class="container">

                <div class="feature-three__title text-center">
                    <div class="sec-title">

                        <div class="sec-title__shape"></div>

                        <h6 class="sec-title__tagline">
                            Области на приложение
                        </h6>

                        <h2 class="sec-title__title">
                            При какви трудности може
                            да бъде приложена EMDR?
                        </h2>

                        <p>
                            EMDR може да бъде част от терапевтичната
                            работа при различни преживявания и
                            емоционални затруднения.
                        </p>

                    </div>
                </div>

                <div class="row gutter-y-30">

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-mental-health"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Травматични преживявания
                            </h3>

                            <p class="feature-three__card__text">
                                Психологическа или физическа травма,
                                насилие и други травматични преживявания.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-social-care"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Загуба и раздяла
                            </h3>

                            <p class="feature-three__card__text">
                                Загуба, преживяване на раздяла,
                                отхвърляне и изоставяне.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-brain"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Тревожност и страх
                            </h3>

                            <p class="feature-three__card__text">
                                Силен страх, тревожност,
                                панически реакции и емоционално напрежение.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-partnership"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Взаимоотношения
                            </h3>

                            <p class="feature-three__card__text">
                                Повтарящи се модели в отношенията,
                                свързани с минали преживявания.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row gutter-y-30 mt-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-mental-health"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Болезнени спомени
                            </h3>

                            <p class="feature-three__card__text">
                                Натрапливи или повтарящи се болезнени
                                спомени и силни емоционални реакции,
                                които изглеждат несъразмерни
                                на настоящата ситуация.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-social-care"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Самооценка и убеждения
                            </h3>

                            <p class="feature-three__card__text">
                                Ниска самооценка и негативни
                                убеждения за себе си.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-business-trip"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Стресиращи събития
                            </h3>

                            <p class="feature-three__card__text">
                                Инциденти и силно стресиращи събития,
                                които продължават да оказват влияние
                                върху настоящето.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- THERAPY PROCESS -->
        <section class="work-process-three" id="emdr-process">

            <div class="container">

                <div class="text-center">
                    <div class="sec-title">

                        <div class="sec-title__shape"></div>

                        <h6 class="sec-title__tagline">
                            Терапевтичният процес
                        </h6>

                        <h2 class="sec-title__title">
                            Как протича EMDR терапията?
                        </h2>

                        <p>
                            EMDR не започва директно с преработване
                            на травматичния спомен.
                        </p>

                    </div>
                </div>

                <div class="row gutter-y-30">

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-social-care"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                01. Запознаване и сигурност
                            </h3>

                            <p class="feature-three__card__text">
                                Първоначално се отделя време за
                                изграждане на сигурност и стабилизация.
                                Запознаваме се и определяме
                                терапевтичните цели.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-partnership"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                02. Подготовка
                            </h3>

                            <p class="feature-three__card__text">
                                Създаваме ресурси, към които можете
                                да се връщате по време на процеса.
                                Работата продължава според
                                вашата готовност.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-brain"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                03. Преработване
                            </h3>

                            <p class="feature-three__card__text">
                                Когато е подходящо, започва
                                преработването на конкретни
                                преживявания чрез насочване
                                на вниманието и двустранна стимулация.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-mental-health"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                04. Нова перспектива
                            </h3>

                            <p class="feature-three__card__text">
                                Процесът подпомага появата на нови
                                асоциации и постепенно може да промени
                                начина, по който преживяването
                                е представено в психиката.
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- BILATERAL STIMULATION -->
        <section class="skills-three">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">

                        <div class="skills-three__images">

                            <img
                                src="{{ asset('assets/images/resources/skills-3-1.png') }}"
                                alt="Терапевтичен процес"
                                class="skills-three__images__one"
                                loading="lazy"
                            >

                            <img
                                src="{{ asset('assets/images/resources/skills-3-2.png') }}"
                                alt="Спокойна среда за психотерапия"
                                class="skills-three__images__two"
                                loading="lazy"
                            >

                            <img
                                src="{{ asset('assets/images/shapes/skills-3-shape-1.png') }}"
                                alt=""
                                class="skills-three__images__shape-one"
                            >

                            <div class="skills-three__images__shape-two"></div>
                            <div class="skills-three__images__shape-three"></div>

                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">

                        <div class="skills-three__content">

                            <div class="skills-three__title">
                                <div class="sec-title">

                                    <div class="sec-title__shape"></div>

                                    <h6 class="sec-title__tagline">
                                        Повече за процеса
                                    </h6>

                                    <h2 class="sec-title__title">
                                        Какво представлява
                                        двустранната стимулация?
                                    </h2>

                                </div>

                                <p class="skills-three__text">
                                    По време на EMDR терапевтът насочва
                                    вниманието ви към определен аспект
                                    от преживяването, като едновременно
                                    с това се използва двустранна стимулация.
                                </p>

                            </div>

                            <ul class="skills-three__content__list">

                                <li>
                                    <span class="icon-arrow-circle-check"></span>
                                    Движения на очите
                                </li>

                                <li>
                                    <span class="icon-arrow-circle-check"></span>
                                    Звукови стимули
                                </li>

                                <li>
                                    <span class="icon-arrow-circle-check"></span>
                                    Потупване от двете страни на тялото
                                </li>

                            </ul>

                            <p class="skills-three__text mt-4">
                                Процесът подпомага появата на нови
                                асоциации и начинът, по който
                                преживяването е представено в психиката,
                                може постепенно да се промени.
                            </p>

                        </div>

                    </div>

                </div>
            </div>

        </section>


        <!-- KEY MESSAGE -->
        <section class="video-three">

            <div class="container-fluid">

                <div class="video-three__card"
                    style="background-image: url('{{ asset('assets/images/backgrounds/video-3-bg.png') }}');">

                    <h4 class="video-three__card__v-title">
                        Смисълът на терапевтичния процес
                    </h4>

                    <h2 class="video-three__card__title">
                        Целта не е да забравите
                        случилото се.
                    </h2>

                    <p class="video-three__card__text">
                        Целта е споменът да остане част от вашата
                        история, без да продължава да управлява
                        настоящето ви.
                    </p>

                </div>

            </div>

        </section>


        <!-- EMDR AND RELATIONSHIPS -->
        <section class="about-three">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">

                        <div class="about-three__content">

                            <div class="sec-title">

                                <div class="sec-title__shape"></div>

                                <h6 class="sec-title__tagline">
                                    Взаимоотношения
                                </h6>

                                <h2 class="sec-title__title">
                                    EMDR и отношенията
                                </h2>

                            </div>

                            <p class="about-three__text">
                                Понякога трудностите в настоящите
                                отношения са свързани с по-ранни
                                преживявания.
                            </p>

                            <p class="about-three__text">
                                Например страхът от изоставяне,
                                силната чувствителност към отхвърляне
                                или постоянната нужда от уверение
                                могат да бъдат свързани с предишен опит,
                                който продължава да влияе върху начина,
                                по който се свързваме с другите.
                            </p>

                            <p class="about-three__text">
                                В тези случаи EMDR може да бъде
                                включен в по-широк терапевтичен процес,
                                насочен към разбиране и преработване
                                на преживяванията, които стоят зад
                                настоящите реакции.
                            </p>

                            <div class="about-three__card">
                                <ul class="about-three__card__list">

                                    <li class="about-three__card__item">
                                        <div class="about-three__card__icon">
                                            <i class="icon-partnership"></i>
                                        </div>

                                        <h3>
                                            Разбиране на миналите преживявания
                                        </h3>
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Страх от изоставяне
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Чувствителност към отхвърляне
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Повтарящи се модели във взаимоотношенията
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">

                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img">

                                <img
                                    src="{{ asset('assets/images/resources/about-3-1.png') }}"
                                    alt="EMDR терапия и взаимоотношения"
                                    loading="lazy"
                                >

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- IMPORTANT INFORMATION -->
        <section class="feature-three">

            <div class="container">

                <div class="feature-three__title text-center">

                    <div class="sec-title">

                        <div class="sec-title__shape"></div>

                        <h6 class="sec-title__tagline">
                            Важно е да знаете
                        </h6>

                        <h2 class="sec-title__title">
                            Вашето темпо има значение
                        </h2>

                        <p>
                            EMDR терапията се провежда индивидуално
                            и се адаптира към конкретния човек
                            и неговото състояние.
                        </p>

                    </div>

                </div>

                <div class="row gutter-y-30 justify-content-center">

                    <div class="col-lg-6 col-md-6">

                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-social-care"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Не е необходимо да разказвате всичко
                            </h3>

                            <p class="feature-three__card__text">
                                Не е необходимо да сте готови да
                                разкажете всичко още на първата среща.
                                Можете постепенно да споделяте това,
                                за което се чувствате готови.
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6">

                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-mental-health"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Сигурността е водеща
                            </h3>

                            <p class="feature-three__card__text">
                                Темпото на работа се определя заедно,
                                а безопасността е водеща част от
                                терапевтичния процес.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


</x-frontend>
