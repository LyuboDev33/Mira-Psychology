
<x-frontend>

    @section('SEO')
        <title>Дихателна терапия | Мирослава Мацурева</title>

        <meta name="description"
            content="Дихателна терапия с Мирослава Мацурева – изразяване на емоции и самопознание чрез рисуване, цвят, образ и други творчески средства.">

        <meta name="robots" content="index,follow">
        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:locale" content="bg_BG">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Мира Терапия">
        <meta property="og:title" content="Дихателна терапия | Мирослава Мацурева">
        <meta property="og:description"
            content="Дихателна терапията създава пространство за изразяване и изследване на вътрешния свят чрез творчество.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/images/resources/about-img-1.png') }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Дихателна терапия | Мирослава Мацурева">
        <meta name="twitter:description"
            content="Как протича дихателна терапията и защо не са необходими художествени умения.">
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
                                    alt="Дихателна терапия – творческо изразяване"
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
                                            Дихателна терапия
                                            <img
                                                src="{{ asset('assets/images/shapes/home-3-shape-1.png') }}"
                                                alt=""
                                                class="main-slider-three__title--shape"
                                            >
                                        </h1>

                                        <p class="main-slider-three__text">
                                            Дъхът като път обратно към себе си –
                                            пространство за осъзнатост и присъствие.
                                        </p>

                                        <div class="main-slider-three__btn">
                                            <a href="#about-breath-therapy"
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


        <!-- ABOUT BREATH THERAPY -->
        <section class="about-three" id="about-breath-therapy">
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
                                <h6 class="sec-title__tagline">Повече за дихателната терапия</h6>
                                <h2 class="sec-title__title">Дъхът като път обратно към себе си</h2>
                            </div>
                            <p class="about-three__text">Дишането е неразделна част от начина, по който преживяваме света.</p>
                            <p class="about-three__text">Когато сме под стрес, тревожни или уплашени, дишането ни естествено се променя. Понякога задържаме дъха си, дишаме повърхностно или усещаме напрежение в тялото.</p>
                            <p class="about-three__text">Дихателната терапия използва различни техники на дишане и телесно осъзнаване като част от терапевтичния процес. Чрез тях можем да насочим вниманието към тялото, да разпознаем натрупаното напрежение и да развием по-добра способност за саморегулация.</p>
                            <div class="about-three__card">
                                <ul class="about-three__card__list">
                                    <li class="about-three__card__item">
                                        <div class="about-three__card__icon"><i class="icon-social-care"></i></div>
                                        <h3>Връзка между дъха, тялото и емоциите</h3>
                                    </li>
                                    <li><span class="icon-arrow-circle-check"></span> Насочваме вниманието към телесните усещания.</li>
                                    <li><span class="icon-arrow-circle-check"></span> Развиваме осъзнатост и способност за саморегулация.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="pelocis-stretch-element-inside-column">
                            <div class="about-three__img"><img src="{{ asset('assets/images/resources/about-3-1.png') }}" alt="Дихателна терапия и телесно осъзнаване" loading="lazy"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- APPLICATIONS -->
        <section class="feature-three">
            <div class="container">
                <div class="feature-three__title text-center">
                    <div class="sec-title"><div class="sec-title__shape"></div><h6 class="sec-title__tagline">Области на приложение</h6><h2 class="sec-title__title">С какво може да бъде полезна?</h2><p>Дихателните практики могат да бъдат включени в работата при различни състояния и потребности.</p></div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms">
                        <div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-mental-health"></i></div><h3 class="feature-three__card__title">Стрес и напрежение</h3><p class="feature-three__card__text">Натрупан стрес и психическо напрежение.</p></div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-brain"></i></div><h3 class="feature-three__card__title">Тревожност</h3><p class="feature-three__card__text">Тревожност и усещане за вътрешно неспокойствие.</p></div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-social-care"></i></div><h3 class="feature-three__card__title">Отпускане</h3><p class="feature-three__card__text">Трудности с отпускането и усещане за напрежение в тялото.</p></div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-partnership"></i></div><h3 class="feature-three__card__title">Емоционално претоварване</h3><p class="feature-three__card__text">Емоционално претоварване и силни емоционални преживявания.</p></div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms">
                        <div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-mental-health"></i></div><h3 class="feature-three__card__title">Контакт с тялото</h3><p class="feature-three__card__text">Усещане за откъснатост от тялото.</p></div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-brain"></i></div><h3 class="feature-three__card__title">Собствени потребности</h3><p class="feature-three__card__text">Необходимост от по-добър контакт със собствените потребности.</p></div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-social-care"></i></div><h3 class="feature-three__card__title">Самопознание</h3><p class="feature-three__card__text">Личностно развитие и самопознание.</p></div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-partnership"></i></div><h3 class="feature-three__card__title">Саморегулация</h3><p class="feature-three__card__text">Развиване на по-добра способност за саморегулация чрез дишане и телесно осъзнаване.</p></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- THERAPY PROCESS -->
        <section class="work-process-three" id="breath-therapy-process">
            <div class="container">
                <div class="text-center"><div class="sec-title"><div class="sec-title__shape"></div><h6 class="sec-title__tagline">Терапевтичният процес</h6><h2 class="sec-title__title">Как протича дихателната терапия?</h2><p>Практиките се съобразяват с индивидуалното ви състояние и потребности.</p></div></div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6"><div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-mental-health"></i></div><h3 class="feature-three__card__title">01. Настройване към настоящето</h3><p class="feature-three__card__text">Сесиите започват с настройване към настоящото състояние – какво усещате в тялото, какво преживявате емоционално и от какво имате нужда в момента.</p></div></div>
                    <div class="col-lg-3 col-md-6"><div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-brain"></i></div><h3 class="feature-three__card__title">02. Подходящи дихателни техники</h3><p class="feature-three__card__text">Използваме дихателни техники, съобразени с индивидуалното ви състояние и терапевтичната цел.</p></div></div>
                    <div class="col-lg-3 col-md-6"><div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-social-care"></i></div><h3 class="feature-three__card__title">03. Дъх, тяло и емоции</h3><p class="feature-three__card__text">Можем да работим с дъха, телесните усещания, движението, гласа и емоциите.</p></div></div>
                    <div class="col-lg-3 col-md-6"><div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-partnership"></i></div><h3 class="feature-three__card__title">04. Повече свързаност със себе си</h3><p class="feature-three__card__text">Постепенно развиваме способността да оставаме свързани със себе си дори в моменти на напрежение.</p></div></div>
                </div>
            </div>
        </section>

        <!-- BREATHING AND BODY AWARENESS -->
        <section class="skills-three">
            <div class="container"><div class="row align-items-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="skills-three__images">
                        <img src="{{ asset('assets/images/resources/skills-3-1.png') }}" alt="Дихателни практики" class="skills-three__images__one" loading="lazy">
                        <img src="{{ asset('assets/images/resources/skills-3-2.png') }}" alt="Телесно осъзнаване" class="skills-three__images__two" loading="lazy">
                        <img src="{{ asset('assets/images/shapes/skills-3-shape-1.png') }}" alt="" class="skills-three__images__shape-one">
                        <div class="skills-three__images__shape-two"></div><div class="skills-three__images__shape-three"></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="skills-three__content">
                        <div class="skills-three__title"><div class="sec-title"><div class="sec-title__shape"></div><h6 class="sec-title__tagline">Практики и подходи</h6><h2 class="sec-title__title">Дъхът, тялото и емоциите</h2></div>
                            <p class="skills-three__text">В процеса можем да работим с дъха, телесните усещания, движението, гласа и емоциите, като постепенно развиваме по-голяма способност да оставаме свързани със себе си дори в моменти на напрежение.</p>
                        </div>
                        <ul class="skills-three__content__list">
                            <li><span class="icon-arrow-circle-check"></span> Дихателни техники</li>
                            <li><span class="icon-arrow-circle-check"></span> Телесно осъзнаване и движение</li>
                            <li><span class="icon-arrow-circle-check"></span> Глас, емоции и присъствие</li>
                        </ul>
                        <p class="skills-three__text mt-4">Дихателната терапия може да бъде самостоятелна практика или да бъде интегрирана с други подходи, които използвам в работата си – арт терапия, психодрама, EMDR и работа с вътрешното дете.</p>
                    </div>
                </div>
            </div></div>
        </section>

        <!-- KEY MESSAGE -->
        <section class="video-three">
            <div class="container-fluid"><div class="video-three__card" style="background-image: url('{{ asset('assets/images/backgrounds/video-3-bg.png') }}');">
                <h4 class="video-three__card__v-title">Връзка с настоящия момент</h4>
                <h2 class="video-three__card__title">Дъхът ни връща към настоящия момент.</h2>
                <p class="video-three__card__text">Когато забавим и усетим дъха си, започваме отново да чуваме тялото си.</p>
            </div></div>
        </section>

        <!-- RETURNING TO THE BODY -->
        <section class="about-three">
            <div class="container"><div class="row align-items-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="about-three__content">
                        <div class="sec-title"><div class="sec-title__shape"></div><h6 class="sec-title__tagline">Осъзнатост и присъствие</h6><h2 class="sec-title__title">Да се върнем в тялото</h2></div>
                        <p class="about-three__text">Много често живеем предимно „в главата си“ – мислим, анализираме, планираме и се опитваме да контролираме преживяванията си.</p>
                        <p class="about-three__text">Дъхът ни връща към настоящия момент.</p>
                        <p class="about-three__text">Когато забавим и усетим дъха си, започваме отново да чуваме тялото си.</p>
                        <p class="about-three__text">Дихателната терапия е покана да се свържете с това, което се случва вътре във вас – с повече осъзнатост, приемане и присъствие.</p>
                        <div class="about-three__card"><ul class="about-three__card__list">
                            <li class="about-three__card__item"><div class="about-three__card__icon"><i class="icon-partnership"></i></div><h3>Връзка със себе си</h3></li>
                            <li><span class="icon-arrow-circle-check"></span> Повече осъзнатост за телесните усещания.</li>
                            <li><span class="icon-arrow-circle-check"></span> Повече приемане и присъствие в настоящето.</li>
                        </ul></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms"><div class="pelocis-stretch-element-inside-column"><div class="about-three__img"><img src="{{ asset('assets/images/resources/about-3-1.png') }}" alt="Връщане към тялото чрез дъха" loading="lazy"></div></div></div>
            </div></div>
        </section>

        <!-- FINAL MESSAGE -->
        <section class="feature-three">
            <div class="container">
                <div class="feature-three__title text-center"><div class="sec-title"><div class="sec-title__shape"></div><h6 class="sec-title__tagline">Дихателна терапия</h6><h2 class="sec-title__title">Дъхът е мостът между тялото, емоциите и настоящия момент.</h2><p>Дихателната терапия е покана за повече осъзнатост, приемане и присъствие.</p></div></div>
                <div class="row gutter-y-30 justify-content-center">
                    <div class="col-lg-6 col-md-6"><div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-social-care"></i></div><h3 class="feature-three__card__title">Индивидуален подход</h3><p class="feature-three__card__text">Дихателните техники се съобразяват с индивидуалното ви състояние и терапевтичната цел.</p></div></div>
                    <div class="col-lg-6 col-md-6"><div class="feature-three__card"><div class="feature-three__card__icon"><i class="icon-mental-health"></i></div><h3 class="feature-three__card__title">Част от терапевтичния процес</h3><p class="feature-three__card__text">Практиките могат да се използват самостоятелно или в комбинация с арт терапия, психодрама, EMDR и работа с вътрешното дете.</p></div></div>
                </div>
            </div>
        </section>

</x-frontend>
