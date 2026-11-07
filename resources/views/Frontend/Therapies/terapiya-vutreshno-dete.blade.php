<x-frontend>

    @section('SEO')
        <title>Терапия на вътрешното дете | Мирослава Мацурева</title>
        <meta name="description"
            content="Терапия на вътрешното дете с Мирослава Мацурева – работа с ранни преживявания, емоционални модели, лични граници и вътрешно усещане за сигурност.">
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Мира Терапия">
        <meta property="og:title" content="Терапия на вътрешното дете | Мирослава Мацурева">
        <meta property="og:description"
            content="Среща с онази част от теб, която все още носи миналото. Пространство за осъзнаване, приемане и грижа към себе си.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/images/resources/about-img-1.png') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Терапия на вътрешното дете | Мирослава Мацурева">
        <meta name="twitter:description"
            content="Работа с ранни преживявания, емоционални модели и потребности чрез индивидуална психотерапия.">
    @endsection

    <main>

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
                                <img src="{{ asset('assets/images/resources/about-img-1.png') }}"
                                    alt="Терапия на вътрешното дете – работа с ранни преживявания" fetchpriority="high">
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
                                            Терапия на вътрешното дете
                                            <img src="{{ asset('assets/images/shapes/home-3-shape-1.png') }}"
                                                alt="" class="main-slider-three__title--shape">
                                        </h1>

                                        <p class="main-slider-three__text">
                                            Среща с онази част от теб, която все още носи миналото.
                                            Пространство за осъзнаване, приемане и грижа към себе си.
                                        </p>

                                        <div class="main-slider-three__btn">
                                            <a href="#about-inner-child" class="pelocis-btn pelocis-btn--base">
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

                        <img src="{{ asset('assets/images/shapes/home-3-shape-2.png') }}" alt=""
                            class="main-slider-three__item--shape-1">

                        <img src="{{ asset('assets/images/shapes/home-3-shape-3.png') }}" alt=""
                            class="main-slider-three__item--shape-2">

                    </div>
                </div>

            </div>
        </section>



        <!-- ABOUT INNER CHILD -->
        <section class="about-three" id="about-inner-child">
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
                                <h6 class="sec-title__tagline">Повече за терапията</h6>
                                <h2 class="sec-title__title">Среща с онази част от теб, която все още носи миналото</h2>
                            </div>
                            <p class="about-three__text">Във всеки от нас съществуват спомени, преживявания и
                                емоционални модели, формирани в ранните години от живота ни.</p>
                            <p class="about-three__text">Понякога детето, което сме били, е преживяло страх, самота,
                                отхвърляне, липса на внимание, прекомерна отговорност или усещане, че трябва да бъде
                                „добро“, за да бъде обичано.</p>
                            <p class="about-three__text">Когато тези преживявания не са били достатъчно видени и
                                преработени, те могат да продължат да влияят на начина, по който се чувстваме и
                                свързваме с другите като възрастни.</p>
                            <p class="about-three__text">Терапията на вътрешното дете е процес на осъзнаване, приемане и
                                преработване на тези ранни преживявания.</p>

                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img"><img
                                    src="{{ asset('assets/images/resources/about-3-1.png') }}"
                                    alt="Терапия на вътрешното дете" loading="lazy"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- HOW IT CAN MANIFEST -->
        <section class="feature-three">
            <div class="container">
                <div class="feature-three__title text-center">
                    <div class="sec-title">
                        <div class="sec-title__shape"></div>
                        <h6 class="sec-title__tagline">Връзката между миналото и настоящето</h6>
                        <h2 class="sec-title__title">Как може да се проявява?</h2>
                        <p>Понякога миналото се проявява в настоящето чрез чувства, убеждения и повтарящи се реакции.
                        </p>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-partnership"></i></div>
                            <h3 class="feature-three__card__title">Страх от изоставяне</h3>
                            <p class="feature-three__card__text">Страх от изоставяне или отхвърляне, страх от конфликт
                                или самота.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-social-care"></i></div>
                            <h3 class="feature-three__card__title">Нужда от одобрение</h3>
                            <p class="feature-three__card__text">Силна нужда от одобрение и усещане, че трябва да
                                заслужим любовта.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-mental-health"></i></div>
                            <h3 class="feature-three__card__title">Лични граници</h3>
                            <p class="feature-three__card__text">Трудност да поставяме граници и прекомерна отговорност
                                за чувствата на другите.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-partnership"></i></div>
                            <h3 class="feature-three__card__title">Интимни отношения</h3>
                            <p class="feature-three__card__text">Трудности в интимните отношения и повтарящ се избор на
                                определен тип партньори.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-brain"></i></div>
                            <h3 class="feature-three__card__title">Емоционални реакции</h3>
                            <p class="feature-three__card__text">Силни емоционални реакции в ситуации, които ни
                                напомнят за миналото.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-mental-health"></i></div>
                            <h3 class="feature-three__card__title">Самооценка</h3>
                            <p class="feature-three__card__text">Усещане, че „не съм достатъчно добър/добра“.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-social-care"></i></div>
                            <h3 class="feature-three__card__title">Собствени потребности</h3>
                            <p class="feature-three__card__text">Трудност да се погрижим за собствените си потребности.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-business-trip"></i></div>
                            <h3 class="feature-three__card__title">Повтарящи се модели</h3>
                            <p class="feature-three__card__text">Начини на чувстване и свързване, които продължават да
                                влияят на живота ни.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- THERAPY PROCESS -->
        <section class="work-process-three" id="inner-child-process">
            <div class="container">
                <div class="text-center">
                    <div class="sec-title">
                        <div class="sec-title__shape"></div>
                        <h6 class="sec-title__tagline">Терапевтичният процес</h6>
                        <h2 class="sec-title__title">Как работим?</h2>
                        <p>Изследваме ранните преживявания и връзката им с настоящия ви живот, съобразно вашите
                            потребности и темпо.</p>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-social-care"></i></div>
                            <h3 class="feature-three__card__title">01. Изследване на преживяванията</h3>
                            <p class="feature-three__card__text">Изследваме преживяванията от детството и как те могат
                                да се свързват с настоящия ви живот.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-brain"></i></div>
                            <h3 class="feature-three__card__title">02. Контакт с чувствата</h3>
                            <p class="feature-three__card__text">Обръщаме внимание на емоциите, телесните усещания,
                                спомените и убежденията.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-partnership"></i></div>
                            <h3 class="feature-three__card__title">03. Работа с потребностите</h3>
                            <p class="feature-three__card__text">Разпознаваме потребностите, които са останали
                                непосрещнати, и изследваме възможности за грижа.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-mental-health"></i></div>
                            <h3 class="feature-three__card__title">04. Вътрешна сигурност</h3>
                            <p class="feature-three__card__text">Изграждаме усещане за сигурност и способност днес да
                                се погрижим за себе си по нов начин.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- THERAPEUTIC APPROACHES -->
        <section class="skills-three">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="skills-three__images">
                            <img src="{{ asset('assets/images/resources/skills-3-1.png') }}"
                                alt="Терапевтична работа с преживяванията" class="skills-three__images__one"
                                loading="lazy">
                            <img src="{{ asset('assets/images/resources/skills-3-2.png') }}"
                                alt="Пространство за самопознание" class="skills-three__images__two" loading="lazy">
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
                                    <h6 class="sec-title__tagline">В терапевтичната работа</h6>
                                    <h2 class="sec-title__title">Различни подходи според вашите потребности</h2>
                                </div>
                                <p class="skills-three__text">Работим с емоциите, телесните усещания, спомените,
                                    убежденията и потребностите, които са останали непосрещнати.</p>
                            </div>
                            <ul class="skills-three__content__list">
                                <li><span class="icon-arrow-circle-check"></span>Арт терапия</li>
                                <li><span class="icon-arrow-circle-check"></span>Психодрама</li>
                                <li><span class="icon-arrow-circle-check"></span>EMDR</li>
                                <li><span class="icon-arrow-circle-check"></span>Дихателни практики и други
                                    терапевтични подходи</li>
                            </ul>
                            <p class="skills-three__text mt-4">Особено внимание отделяме на изграждането на вътрешно
                                усещане за сигурност и на способността днес да дадем на себе си това, от което някога
                                сме имали нужда.</p>
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
                    <h4 class="video-three__card__v-title">Да се погрижим за себе си по нов начин</h4>
                    <h2 class="video-three__card__title">Работата с вътрешното дете не означава да живеем в миналото.
                    </h2>
                    <p class="video-three__card__text">Тя е възможност да разберем откъде идват някои наши реакции и
                        защо определени ситуации продължават да ни нараняват.</p>
                </div>
            </div>
        </section>


        <!-- CARING FOR OURSELVES -->
        <section class="about-three">
            <div class="about-three__bg">
                <div class="about-three__shape-one"><img
                        src="{{ asset('assets/images/shapes/about-3-shape-1.png') }}" alt=""></div>
                <div class="about-three__shape-two"><img
                        src="{{ asset('assets/images/shapes/about-3-shape-2.png') }}" alt=""></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="about-three__content">
                            <div class="sec-title">
                                <div class="sec-title__shape"></div>
                                <h6 class="sec-title__tagline">Нова перспектива</h6>
                                <h2 class="sec-title__title">Да се погрижим за себе си по нов начин</h2>
                            </div>
                            <p class="about-three__text">Когато разбираме по-добре своите реакции и преживявания, можем
                                постепенно да изградим по-свободен начин на присъствие в настоящето.</p>
                            <p class="about-three__text">Не можем да променим детството си. Но можем да променим
                                начина, по който се отнасяме към онази част от себе си, която все още носи неговите
                                преживявания.</p>
                            <div class="about-three__card">
                                <ul class="about-three__card__list">
                                    <li class="about-three__card__item">
                                        <div class="about-three__card__icon"><i class="icon-social-care"></i></div>
                                        <h3>Грижа вместо оценка</h3>
                                    </li>
                                    <li><span class="icon-arrow-circle-check"></span>Осъзнаване и приемане на ранните
                                        преживявания.</li>
                                    <li><span class="icon-arrow-circle-check"></span>Повече внимание към собствените
                                        потребности.</li>
                                    <li><span class="icon-arrow-circle-check"></span>Изграждане на по-сигурна връзка
                                        със себе си.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img"><img
                                    src="{{ asset('assets/images/resources/about-3-1.png') }}"
                                    alt="Терапия на вътрешното дете" loading="lazy"></div>
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
                    <h4 class="video-three__card__v-title">Среща със себе си</h4>
                    <h2 class="video-three__card__title">Понякога най-важната среща е тази със самите нас.</h2>
                    <p class="video-three__card__text">Такива, каквито сме били тогава, и такива, каквито можем да
                        бъдем днес.</p>
                </div>
            </div>
        </section>


    </main>

</x-frontend>
