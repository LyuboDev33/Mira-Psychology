
<x-frontend>

    @section('SEO')
        <title>Психодрама | Мирослава Мацурева</title>

        <meta name="description"
            content="Научете повече за психодрамата с Мирослава Мацурева – психотерапевтичен метод за изследване на емоции, взаимоотношения и житейски ситуации чрез действие, роли и преживяване.">

        <meta name="robots" content="index,follow">
        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:locale" content="bg_BG">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Мира Терапия">
        <meta property="og:title" content="Психодрама | Мирослава Мацурева">
        <meta property="og:description"
            content="Психодрамата създава пространство за преживяване, осъзнаване и изследване на нови начини на реакция чрез действие и взаимодействие.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/images/resources/about-img-1.png') }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Психодрама | Мирослава Мацурева">
        <meta name="twitter:description"
            content="Открийте как психодрамата може да подкрепи работата с емоции, взаимоотношения, вътрешни конфликти и личностно развитие.">
    @endsection

    <main>

        <!-- HERO -->
        <section class="main-slider-three">
            <div class="main-slider-three__carousel pelocis-owl__carousel owl-carousel"
                data-owl-options='{
                    "items": 1,
                    "autoplay": false,
                    "margin": 0,
                    "nav": false,
                    "dots": false
                }'>

                <div class="item">
                    <div class="main-slider-three__item">

                        <div class="main-slider-three__image">
                            <div class="main-slider-three__image__one">
                                <img
                                    src="{{ asset('assets/images/resources/about-img-1.png') }}"
                                    alt="Психодрама – психотерапия чрез действие и преживяване"
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
                                            Психодрама
                                            <img
                                                src="{{ asset('assets/images/shapes/home-3-shape-1.png') }}"
                                                alt=""
                                                class="main-slider-three__title--shape"
                                            >
                                        </h1>

                                        <p class="main-slider-three__text">
                                            Да преживееш, а не само да говориш.
                                            Пространство за изследване на вътрешния свят
                                            чрез действие, движение и взаимодействие.
                                        </p>

                                        <div class="main-slider-three__btn">
                                            <a href="#about-psychodrama"
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


        <!-- ABOUT PSYCHODRAMA -->
        <section class="about-three" id="about-psychodrama">

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
                                    Повече за психодрамата
                                </h6>

                                <h2 class="sec-title__title">
                                    Да преживееш, а не само да говориш
                                </h2>
                            </div>

                            <p class="about-three__text">
                                Понякога разбираме какво ни се случва, но въпреки
                                това не успяваме да променим начина, по който
                                се чувстваме или реагираме.
                            </p>

                            <p class="about-three__text">
                                Психодрамата е психотерапевтичен метод, при който
                                вътрешният ни свят и важните житейски ситуации
                                могат да бъдат преживени и изследвани чрез
                                действие, движение, роля и взаимодействие.
                            </p>

                            <div class="about-three__card">
                                <ul class="about-three__card__list">

                                    <li class="about-three__card__item">
                                        <div class="about-three__card__icon">
                                            <i class="icon-social-care"></i>
                                        </div>

                                        <h3>От разговор към преживяване</h3>
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Поставяме ситуацията в пространството,
                                        вместо само да говорим за нея.
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Изследваме я от различни позиции
                                        и перспективи.
                                    </li>

                                </ul>
                            </div>

                            <p class="about-three__content__text">
                                <span>Нова перспектива:</span>
                                Това създава възможност да видим познатото
                                по нов начин и да открием нови реакции и избори.
                            </p>

                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img">
                                <img
                                    src="{{ asset('assets/images/resources/about-3-1.png') }}"
                                    alt="Психодрама – изследване на вътрешния свят"
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
                            С какво можем да работим?
                        </h2>

                        <p>
                            Психодрамата може да бъде полезна при различни
                            емоционални затруднения, отношения и житейски ситуации.
                        </p>
                    </div>
                </div>

                <div class="row gutter-y-30">

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-partnership"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Взаимоотношения
                            </h3>

                            <p class="feature-three__card__text">
                                Трудности в отношенията, повтарящи се
                                партньорски модели и неизказани чувства.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-brain"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Тревожност и страх
                            </h3>

                            <p class="feature-three__card__text">
                                Тревожност, страх, преживявания на
                                отхвърляне или изоставяне.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-mental-health"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Лични граници и самооценка
                            </h3>

                            <p class="feature-three__card__text">
                                Трудности с личните граници,
                                ниска самооценка и несигурност.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-social-care"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Вътрешни конфликти
                            </h3>

                            <p class="feature-three__card__text">
                                Вътрешни противоречия, трудни решения,
                                конфликти и неизразени емоции.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row gutter-y-30 mt-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-business-trip"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Минали преживявания
                            </h3>

                            <p class="feature-three__card__text">
                                Преживявания от миналото, които продължават
                                да влияят на настоящето, и работа
                                с вътрешното дете.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-social-care"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Житейски преходи
                            </h3>

                            <p class="feature-three__card__text">
                                Периоди на промяна, житейски преходи
                                и важни лични решения.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon">
                                <i class="icon-mental-health"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Личностно развитие
                            </h3>

                            <p class="feature-three__card__text">
                                Самопознание, осъзнаване на собствените
                                реакции и откриване на нови възможности.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- THERAPY PROCESS -->
        <section class="work-process-three" id="psychodrama-process">

            <div class="container">

                <div class="text-center">
                    <div class="sec-title">
                        <div class="sec-title__shape"></div>

                        <h6 class="sec-title__tagline">
                            Терапевтичният процес
                        </h6>

                        <h2 class="sec-title__title">
                            Как протича психодрамата?
                        </h2>

                        <p>
                            В психодраматичния процес ситуация, спомен
                            или вътрешен конфликт може да бъде изведен
                            в пространството.
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
                                01. Изследване на темата
                            </h3>

                            <p class="feature-three__card__text">
                                Започваме с конкретна ситуация,
                                преживяване или вътрешен конфликт,
                                който искате да изследвате.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-partnership"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                02. Преживяване чрез действие
                            </h3>

                            <p class="feature-three__card__text">
                                Ситуацията може да бъде поставена
                                в пространството чрез движение,
                                роля, диалог и взаимодействие.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-brain"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                03. Различни перспективи
                            </h3>

                            <p class="feature-three__card__text">
                                Изследваме ситуацията от различни
                                позиции – собствената, на другия човек
                                или на различни части от себе си.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-mental-health"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                04. Нови възможности
                            </h3>

                            <p class="feature-three__card__text">
                                Създаваме пространство за осъзнаване
                                и изпробване на нови начини
                                на реакция в безопасна среда.
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- PSYCHODRAMA TECHNIQUES -->
        <section class="skills-three">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="skills-three__images">

                            <img
                                src="{{ asset('assets/images/resources/skills-3-1.png') }}"
                                alt="Психодраматични техники и терапевтична работа"
                                class="skills-three__images__one"
                                loading="lazy"
                            >

                            <img
                                src="{{ asset('assets/images/resources/skills-3-2.png') }}"
                                alt="Изследване на емоции и взаимоотношения"
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
                                        Какви техники използваме?
                                    </h2>
                                </div>

                                <p class="skills-three__text">
                                    В психодраматичния процес могат да бъдат
                                    използвани различни техники, които
                                    позволяват да изследваме преживяванията
                                    от нова перспектива.
                                </p>
                            </div>

                            <ul class="skills-three__content__list">

                                <li>
                                    <span class="icon-arrow-circle-check"></span>
                                    Работа с роли и смяна на роли
                                </li>

                                <li>
                                    <span class="icon-arrow-circle-check"></span>
                                    Диалог и работа с празния стол
                                </li>

                                <li>
                                    <span class="icon-arrow-circle-check"></span>
                                    Огледало и други психодраматични методи
                                </li>

                                <li>
                                    <span class="icon-arrow-circle-check"></span>
                                    Действие, движение и взаимодействие
                                </li>

                            </ul>

                            <p class="skills-three__text mt-4">
                                Можем да погледнем ситуацията от позицията
                                на другия човек, от собствената ни детска част
                                или от позицията на човека, който искаме да бъдем.
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
                        Защо чрез действие?
                    </h4>

                    <h2 class="video-three__card__title">
                        Човек не преживява само с мислите си.
                    </h2>

                    <p class="video-three__card__text">
                        Преживяването е свързано с емоциите, тялото,
                        спомените, отношенията и начина, по който действаме.
                    </p>

                </div>
            </div>

        </section>


        <!-- WHY ACTION MATTERS -->
        <section class="about-three">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="about-three__content">

                            <div class="sec-title">
                                <div class="sec-title__shape"></div>

                                <h6 class="sec-title__tagline">
                                    Защо чрез действие?
                                </h6>

                                <h2 class="sec-title__title">
                                    Пространство за ново преживяване
                                </h2>
                            </div>

                            <p class="about-three__text">
                                Психодрамата създава възможност да се
                                срещнем с различните части от себе си
                                и да изпробваме нови начини на реакция
                                в безопасна терапевтична среда.
                            </p>

                            <p class="about-three__text">
                                Не е необходимо да бъдете актьор.
                                Не е необходимо да умеете да играете роли.
                            </p>

                            <div class="about-three__card">
                                <ul class="about-three__card__list">

                                    <li class="about-three__card__item">
                                        <div class="about-three__card__icon">
                                            <i class="icon-social-care"></i>
                                        </div>

                                        <h3>Психодрамата не е театър</h3>
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Не се изискват актьорски умения.
                                    </li>

                                    <li>
                                        <span class="icon-arrow-circle-check"></span>
                                        Работим с вашите лични преживявания
                                        в терапевтична среда.
                                    </li>

                                </ul>
                            </div>

                            <p class="about-three__content__text">
                                <span>Психодрамата</span>
                                е пространство, в което животът може да бъде
                                видян, преживян и променен.
                            </p>

                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img">
                                <img
                                    src="{{ asset('assets/images/resources/about-3-1.png') }}"
                                    alt="Психодрама – преживяване и нова перспектива"
                                    loading="lazy"
                                >
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        <!-- IN MY PRACTICE -->
        <section class="feature-three">

            <div class="container">

                <div class="feature-three__title text-center">
                    <div class="sec-title">
                        <div class="sec-title__shape"></div>

                        <h6 class="sec-title__tagline">
                            В моята работа
                        </h6>

                        <h2 class="sec-title__title">
                            Индивидуална и групова терапия
                        </h2>

                        <p>
                            Използвам психодраматични техники както
                            в индивидуалната терапия, така и в групова работа,
                            като ги съчетавам според нуждите на клиента
                            с други терапевтични подходи.
                        </p>
                    </div>
                </div>

                <div class="row gutter-y-30 justify-content-center">

                    <div class="col-lg-6 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-partnership"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Индивидуална и групова работа
                            </h3>

                            <p class="feature-three__card__text">
                                Психодраматичните техники могат да бъдат
                                част както от индивидуалния терапевтичен
                                процес, така и от груповата работа.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="feature-three__card">

                            <div class="feature-three__card__icon">
                                <i class="icon-mental-health"></i>
                            </div>

                            <h3 class="feature-three__card__title">
                                Съчетаване на подходи
                            </h3>

                            <p class="feature-three__card__text">
                                Арт терапия, EMDR, дихателни практики,
                                работа с вътрешното дете
                                и семейни констелации.
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- FINAL MESSAGE -->
        <section class="video-three">

            <div class="container-fluid">
                <div class="video-three__card"
                    style="background-image: url('{{ asset('assets/images/backgrounds/video-3-bg.png') }}');">

                    <h4 class="video-three__card__v-title">
                        Пространство за промяна
                    </h4>

                    <h2 class="video-three__card__title">
                        Да дадем възможност на миналото да бъде чуто.
                    </h2>

                    <p class="video-three__card__text">
                        Понякога, за да направим различен избор
                        в настоящето, е необходимо първо
                        да дадем възможност на миналото да бъде чуто.
                    </p>

                </div>
            </div>

        </section>

    </main>

</x-frontend>
