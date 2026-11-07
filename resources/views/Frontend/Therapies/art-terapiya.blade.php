
<x-frontend>

    @section('SEO')
        <title>Арт терапия | Мирослава Мацурева</title>

        <meta name="description"
            content="Арт терапия с Мирослава Мацурева – изразяване на емоции и самопознание чрез рисуване, цвят, образ и други творчески средства.">

        <meta name="robots" content="index,follow">
        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:locale" content="bg_BG">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Мира Терапия">
        <meta property="og:title" content="Арт терапия | Мирослава Мацурева">
        <meta property="og:description"
            content="Арт терапията създава пространство за изразяване и изследване на вътрешния свят чрез творчество.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/images/resources/about-img-1.png') }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Арт терапия | Мирослава Мацурева">
        <meta name="twitter:description"
            content="Как протича арт терапията и защо не са необходими художествени умения.">
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
                                    alt="Арт терапия – творческо изразяване"
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
                                            Арт терапия
                                            <img
                                                src="{{ asset('assets/images/shapes/home-3-shape-1.png') }}"
                                                alt=""
                                                class="main-slider-three__title--shape"
                                            >
                                        </h1>

                                        <p class="main-slider-three__text">
                                            Когато думите не са достатъчни – пространство
                                            за изразяване чрез цвят, образ и творчество.
                                        </p>

                                        <div class="main-slider-three__btn">
                                            <a href="#about-art-therapy"
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


        <!-- ABOUT ART THERAPY -->
        <section class="about-three" id="about-art-therapy">
            <div class="about-three__bg">
                <div class="about-three__shape-one"><img src="{{ asset('assets/images/shapes/about-3-shape-1.png') }}" alt=""></div>
                <div class="about-three__shape-two"><img src="{{ asset('assets/images/shapes/about-3-shape-2.png') }}" alt=""></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="about-three__content">
                            <div class="sec-title">
                                <div class="sec-title__shape"></div>
                                <h6 class="sec-title__tagline">Повече за арт терапията</h6>
                                <h2 class="sec-title__title">Когато думите не са достатъчни</h2>
                            </div>
                            <p class="about-three__text">Понякога има преживявания, за които трудно намираме думи.</p>
                            <p class="about-three__text">Арт терапията създава пространство, в което можем да изразим и изследваме вътрешния си свят чрез рисуване, цвят, образ, движение, работа с материали и други творчески средства.</p>
                            <div class="about-three__card">
                                <ul class="about-three__card__list">
                                    <li class="about-three__card__item">
                                        <div class="about-three__card__icon"><i class="icon-social-care"></i></div>
                                        <h3>Творчеството като начин за изразяване</h3>
                                    </li>
                                    <li><span class="icon-arrow-circle-check"></span> Не е необходимо да умеете да рисувате или да имате художествени умения.</li>
                                    <li><span class="icon-arrow-circle-check"></span> Важното е какво преживявате, докато творите, а не да създадете „красива картина“.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img">
                                <img src="{{ asset('assets/images/resources/about-3-1.png') }}" alt="Арт терапия и творческо изразяване" loading="lazy">
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
                        <h6 class="sec-title__tagline">Области на приложение</h6>
                        <h2 class="sec-title__title">С какво може да бъде полезна?</h2>
                        <p>Арт терапията може да подкрепи терапевтичния процес при различни емоционални и житейски трудности.</p>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-mental-health"></i></div>
                            <h3 class="feature-three__card__title">Тревожност и напрежение</h3>
                            <p class="feature-three__card__text">Тревожност и вътрешно напрежение; емоционални трудности.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-social-care"></i></div>
                            <h3 class="feature-three__card__title">Травма и загуба</h3>
                            <p class="feature-three__card__text">Преживяна травма, загуба и раздяла.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-brain"></i></div>
                            <h3 class="feature-three__card__title">Изразяване на чувства</h3>
                            <p class="feature-three__card__text">Трудности при изразяване на чувства и свързаните с тях преживявания.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-partnership"></i></div>
                            <h3 class="feature-three__card__title">Взаимоотношения</h3>
                            <p class="feature-three__card__text">Трудности във взаимоотношенията и повтарящи се житейски модели.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-mental-health"></i></div>
                            <h3 class="feature-three__card__title">Самооценка</h3>
                            <p class="feature-three__card__text">Ниска самооценка и несигурност.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-social-care"></i></div>
                            <h3 class="feature-three__card__title">Вътрешното дете</h3>
                            <p class="feature-three__card__text">Работа с вътрешното дете и преживяванията, свързани с него.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-brain"></i></div>
                            <h3 class="feature-three__card__title">Самопознание</h3>
                            <p class="feature-three__card__text">Личностно развитие и самопознание.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-business-trip"></i></div>
                            <h3 class="feature-three__card__title">Житейски промени</h3>
                            <p class="feature-three__card__text">Периоди на промяна и житейски преходи.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- THERAPY PROCESS -->
        <section class="work-process-three" id="art-process">
            <div class="container">
                <div class="text-center">
                    <div class="sec-title">
                        <div class="sec-title__shape"></div>
                        <h6 class="sec-title__tagline">Терапевтичният процес</h6>
                        <h2 class="sec-title__title">Как протича арт терапията?</h2>
                        <p>Творческият процес се адаптира към вашите потребности и темите, с които работим.</p>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-social-care"></i></div>
                            <h3 class="feature-three__card__title">01. Избор на подход</h3>
                            <p class="feature-three__card__text">Използваме различни творчески средства според темата и потребностите на човека.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-partnership"></i></div>
                            <h3 class="feature-three__card__title">02. Творчески процес</h3>
                            <p class="feature-three__card__text">Може да работим с рисуване, колаж, цветове, символи, глина, движение, образи и други експресивни техники.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-brain"></i></div>
                            <h3 class="feature-three__card__title">03. Изследване</h3>
                            <p class="feature-three__card__text">След творческия процес обръщаме внимание на чувствата, телесните усещания, асоциациите и спомените, които са се появили.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-mental-health"></i></div>
                            <h3 class="feature-three__card__title">04. Лично значение</h3>
                            <p class="feature-three__card__text">Изследваме личните значения, без да търсим универсално „правилно“ тълкуване на образа.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CREATIVE TECHNIQUES -->
        <section class="skills-three">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="skills-three__images">
                            <img src="{{ asset('assets/images/resources/skills-3-1.png') }}" alt="Творчески процес в арт терапията" class="skills-three__images__one" loading="lazy">
                            <img src="{{ asset('assets/images/resources/skills-3-2.png') }}" alt="Изразяване чрез творчески материали" class="skills-three__images__two" loading="lazy">
                            <img src="{{ asset('assets/images/shapes/skills-3-shape-1.png') }}" alt="" class="skills-three__images__shape-one">
                            <div class="skills-three__images__shape-two"></div>
                            <div class="skills-three__images__shape-three"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="skills-three__content">
                            <div class="skills-three__title">
                                <div class="sec-title">
                                    <div class="sec-title__shape"></div>
                                    <h6 class="sec-title__tagline">Творчески средства</h6>
                                    <h2 class="sec-title__title">Много начини да изразим вътрешния свят</h2>
                                </div>
                                <p class="skills-three__text">В терапевтичния процес можем да използваме различни творчески средства според темата и потребностите на човека.</p>
                            </div>
                            <ul class="skills-three__content__list">
                                <li><span class="icon-arrow-circle-check"></span> Рисуване, цветове и колаж</li>
                                <li><span class="icon-arrow-circle-check"></span> Символи, образи и работа с глина</li>
                                <li><span class="icon-arrow-circle-check"></span> Движение и други експресивни техники</li>
                            </ul>
                            <p class="skills-three__text mt-4">След творческия процес обръщаме внимание на това, което се е появило – чувства, телесни усещания, асоциации, спомени и лични значения.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KEY MESSAGE -->
        <section class="video-three">
            <div class="container-fluid">
                <div class="video-three__card" style="background-image: url('{{ asset('assets/images/backgrounds/video-3-bg.png') }}');">
                    <h4 class="video-three__card__v-title">Вашият личен смисъл</h4>
                    <h2 class="video-three__card__title">Не търсим универсално „правилно“ значение на образа.</h2>
                    <p class="video-three__card__text">Това, което е важно, е какво означава той за вас.</p>
                </div>
            </div>
        </section>

        <!-- NO ARTISTIC SKILLS REQUIRED -->
        <section class="about-three">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="about-three__content">
                            <div class="sec-title">
                                <div class="sec-title__shape"></div>
                                <h6 class="sec-title__tagline">Творчество без оценка</h6>
                                <h2 class="sec-title__title">Арт терапията не изисква да бъдете художник</h2>
                            </div>
                            <p class="about-three__text">Не оценяваме рисунката и не търсим дали е добре или красиво нарисувана.</p>
                            <p class="about-three__text">Творческият процес позволява да се доближим до преживявания, които понякога са трудни за изразяване само чрез разговор.</p>
                            <p class="about-three__text">Понякога една линия, цвят или образ може да отвори врата към нещо, което дълго е било трудно да бъде назовано.</p>
                            <div class="about-three__card">
                                <ul class="about-three__card__list">
                                    <li class="about-three__card__item">
                                        <div class="about-three__card__icon"><i class="icon-partnership"></i></div>
                                        <h3>Няма правилна или грешна рисунка</h3>
                                    </li>
                                    <li><span class="icon-arrow-circle-check"></span> Не са необходими художествени умения.</li>
                                    <li><span class="icon-arrow-circle-check"></span> Важен е вашият личен опит по време на творческия процес.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img">
                                <img src="{{ asset('assets/images/resources/about-3-1.png') }}" alt="Арт терапия без оценяване на творческия резултат" loading="lazy">
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
                        <h6 class="sec-title__tagline">Важно е да знаете</h6>
                        <h2 class="sec-title__title">Творческият процес е за вас</h2>
                        <p>Не е нужно да умеете да рисувате. Арт терапията е пространство за изразяване, изследване и самопознание.</p>
                    </div>
                </div>
                <div class="row gutter-y-30 justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-social-care"></i></div>
                            <h3 class="feature-three__card__title">Без художествена оценка</h3>
                            <p class="feature-three__card__text">Не търсим красива картина. Важното е какво преживявате, докато творите.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="feature-three__card">
                            <div class="feature-three__card__icon"><i class="icon-mental-health"></i></div>
                            <h3 class="feature-three__card__title">Вашето лично значение</h3>
                            <p class="feature-three__card__text">Образите не се тълкуват по универсален начин. Изследваме какво означават за вас.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-frontend>
