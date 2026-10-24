<x-frontend>

    <!-- Начален банер -->
    <section class="main-slider-two">
        <div class="main-slider-two__carousel pelocis-owl__carousel owl-carousel"
            data-owl-options='{"loop":false,"items":1,"autoplay":false,"nav":false,"dots":false,"margin":0}'>
            <div class="item">
                <div class="main-slider-two__item">
                    <img src="/assets/images/shapes/home-two-shape-1.png" alt="" class="main-slider-two__shape-1">
                    <img src="/assets/images/shapes/home-two-shape-2.png" alt="" class="main-slider-two__shape-2">
                    <div class="main-slider-two__shape-3"></div>
                    <div class="main-slider-two__shape-4"></div>
                    <div class="main-slider-two__bg"
                        {{-- style="background-image: url('/assets/images/backgrounds/slider-2-1.jpg');" --}}
                        >
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="main-slider-two__content">
                                    <h5 class="main-slider-two__sub-title">Индивидуална терапия • EMDR • Терапевтични групи • Семейни констелация</h5>
                                    <h1 class="main-slider-two__title">Подкрепа за <span class="text-shape">промяната<img src="/assets/images/shapes/home-two-text-shape.png" alt=""></span> и връзката със себе си</h1>
                                    <p class="main-slider-two__text">Мирослава Мацурева предлага индивидуална терапевтична работа, EMDR терапия, семейни и системни констелации, арттерапевтични и психодраматични подходи, както и терапевтични групи и семинари.</p>
                                    <div class="main-slider-two__btn">
                                        <a href="{{ route('services') }}" class="pelocis-btn"><span>Разгледайте терапиите <i class="icon-right-arrow-white"></i></span></a>
                                        <a href="#about" class="pelocis-btn pelocis-btn--black"><span>За Мирослава <i class="icon-right-arrow-white"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <img src="/assets/images/welcome-img-test.png" alt="" class="main-slider-two__img">
                            <img src="/assets/images/shapes/home-two-shape-5.png" alt="" class="main-slider-two__shape-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Въведение -->
    <section class="call-area-two">
        <div class="call-area-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            {{-- style="background-image: url('/assets/images/backgrounds/call-area-twp-bg.png');" --}}
            >
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h3 class="call-area-two__title">Индивидуална терапия, EMDR, констелации и групова работа — различни пътища към себепознание, емоционална подкрепа и личностно развитие.</h3>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a href="{{ route('services') }}" class="pelocis-btn"><span>Вижте терапиите <i class="icon-right-arrow-white"></i></span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- За Мирослава -->
    <section class="about-two" id="about">
        <div class="about-two__shape"></div>
        <img src="/assets/images/shapes/home-two-about-shape-1.png" alt="" class="about-two__shape__two">
        <img src="/assets/images/shapes/home-two-about-shape-2.png" alt="" class="about-two__shape__three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="about-two__img">
                        <!-- Заменете примерната снимка с портрет на Мирослава. -->
                        <img src="/assets/images/resources/about-2-1.jpg" alt="Представяне на Мирослава Мацурева">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="sec-title">
                            <div class="sec-title__shape"></div>
                            <h6 class="sec-title__tagline">ЗА МЕН</h6>
                            <h2 class="sec-title__title">Мирослава Мацурева</h2>
                        </div>
                        <p class="about-two__text">Мирослава Мацурева има магистърска степен по криминална психология и професионална подготовка в различни направления на психотерапевтичната и психологическата практика.</p>
                        <p class="about-two__text">През 2021 г. основава център „Албена“ — център за терапевтична и личностна работа. Работи като фасилитатор и води индивидуални терапевтични срещи, семейни и системни констелации, терапевтични групи и преживелищни процеси, насочени към себеизследване, личностно развитие и взаимоотношенията.</p>
                        <ul class="about-two__list">
                            <li>
                                <span class="icon-social-care"></span>
                                <div class="about-two__list__content">
                                    <h3 class="about-two__list__title">Индивидуална терапия и EMDR</h3>
                                    <p class="about-two__list__text">Индивидуални срещи, в които могат да се включват EMDR, арттерапия, психодрама, дихателни практики и работа с вътрешното дете.</p>
                                </div>
                            </li>
                            <li>
                                <span class="icon-mental-health"></span>
                                <div class="about-two__list__content">
                                    <h3 class="about-two__list__title">Констелации и терапевтични групи</h3>
                                    <p class="about-two__list__text">Семейни и системни констелации, терапевтични групи, семинари и обучения за личностно развитие и себеизследване.</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="about-two__author">
                            <li class="d-flex align-items-center gap-4">
                                <div class="about-two__author__content">
                                    <h3 class="about-two__author__title">Мирослава Мацурева</h3>
                                    <p class="about-two__author__text">Психотерапевт и фасилитатор</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Терапии и терапевтични подходи -->
    <section class="service-one" id="therapies">
        <div class="container">
            <div class="service-one__title text-center">
                <div class="sec-title">
                    <div class="sec-title__shape"></div>
                    <h6 class="sec-title__tagline">ТЕРАПИИ И УСЛУГИ</h6>
                    <h2 class="sec-title__title">С какви терапии и подходи <br> мога да ви подкрепя</h2>
                </div>
            </div>
            <div class="row">
                @php
                    $approaches = [
                        ['icon' => 'icon-cognitive', 'title' => 'EMDR терапия', 'text' => 'Терапевтичен метод, използван в работата с травматични преживявания и свързаните с тях емоционални трудности.'],
                        ['icon' => 'icon-family-life', 'title' => 'Семейни и системни констелации', 'text' => 'Изследване на семейните истории, взаимоотношенията и повтарящите се модели чрез констелационна работа.'],
                        ['icon' => 'icon-idea', 'title' => 'Арттерапия', 'text' => 'Творчески и арттерапевтични техники за изследване и изразяване на лични преживявания и емоции.'],
                        ['icon' => 'icon-partnership', 'title' => 'Психодрама', 'text' => 'Преживелищна работа с житейски ситуации, отношения и емоции чрез психодраматични техники.'],
                        ['icon' => 'icon-mental-health', 'title' => 'Дихателна терапия', 'text' => 'Дихателни практики, включени в индивидуалната и преживелищната терапевтична работа.'],
                        ['icon' => 'icon-hand', 'title' => 'Работа с вътрешното дете', 'text' => 'Терапевтична работа с ранни преживявания, усещане за отхвърляне или изоставяне и повтарящи се емоционални модели.'],
                    ];
                @endphp
                @foreach ($approaches as $approach)
                    <div class="col-lg-4 col-md-6 service-card">
                        <div class="service-card__inner">
                            <div class="service-card__hover" style="background-image: url('/assets/images/resources/service-1.png');"></div>
                            <div class="service-card__shape"></div>
                            <div class="service-card__icon"><span class="{{ $approach['icon'] }}"></span></div>
                            <h3 class="service-card__title">{{ $approach['title'] }}</h3>
                            <p class="service-card__text">{{ $approach['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Теми в терапевтичната работа -->
    <section class="why-choose-two">
        <img src="/assets/images/shapes/why-chosse-2-shape.png" alt="" class="why-choose-two__shape-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="why-choose-two__content">
                        <div class="sec-title">
                            <div class="sec-title__shape"></div>
                            <h6 class="sec-title__tagline">С КАКВО РАБОТЯ</h6>
                            <h2 class="sec-title__title">Пространство за важните теми в живота</h2>
                        </div>
                        <p class="why-choose-two__text">В индивидуалните срещи и груповите процеси Мирослава съчетава EMDR, семейни и системни констелации, психодрама, арттерапия и дихателни практики според индивидуалните потребности.</p>
                        <div class="why-choose-two__box">
                            <ul class="why-choose-two__list">
                                <li class="why-choose-two__item">
                                    <div class="why-choose-two__count"></div>
                                    <div class="why-choose-two__icon"><span class="icon-mental-health"></span></div>
                                    <div class="why-choose-two__item__content">
                                        <h3 class="why-choose-two__item__title">Тревожност и емоционални трудности</h3>
                                        <p class="why-choose-two__item__text">Индивидуална терапевтична работа с трудни емоции, самооценка и лични граници.</p>
                                    </div>
                                </li>
                                <li class="why-choose-two__item">
                                    <div class="why-choose-two__count"></div>
                                    <div class="why-choose-two__icon"><span class="icon-family-life"></span></div>
                                    <div class="why-choose-two__item__content">
                                        <h3 class="why-choose-two__item__title">Взаимоотношения и повтарящи се модели</h3>
                                        <p class="why-choose-two__item__text">Семейни и системни констелации и психодраматични техники за изследване на отношенията и преживяванията на отхвърляне и изоставяне.</p>
                                    </div>
                                </li>
                                <li class="why-choose-two__item">
                                    <div class="why-choose-two__count"></div>
                                    <div class="why-choose-two__icon"><span class="icon-cognitive"></span></div>
                                    <div class="why-choose-two__item__content">
                                        <h3 class="why-choose-two__item__title">Травматични преживявания и вътрешното дете</h3>
                                        <p class="why-choose-two__item__text">EMDR терапия и работа с вътрешното дете за изследване на личната история и емоционалните ѝ последствия.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="pelocis-stretch-element-inside-column">
                        <div class="why-choose-two__shape-one">
                            <img src="/assets/images/resources/why-choose-two-img-1.png" alt="Терапевтична подкрепа и личностно развитие">
                        </div>
                        <div class="why-choose-two__shape-two"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Професионална подготовка -->
    <section class="history-two" id="education">
        <div class="history-two__bg" style="background-image: url('/assets/images/resources/history-2-4.png');"></div>
        <div class="container">
            <div class="history-two__title text-center">
                <div class="sec-title">
                    <div class="sec-title__shape"></div>
                    <h6 class="sec-title__tagline">ОБРАЗОВАНИЕ И КВАЛИФИКАЦИИ</h6>
                    <h2 class="sec-title__title">Професионална подготовка</h2>
                </div>
            </div>
            <div class="row history-two__wrapper">
                @php
                    $training = [
                        ['title' => 'Криминална психология', 'text' => 'Магистърска степен по криминална психология.'],
                        ['title' => 'Семейни интегрални констелации', 'text' => 'Обучение към Института по интегрално развитие с обучител Лоренцо Кампезе.'],
                        ['title' => 'EMDR терапия', 'text' => 'Обучение към Института по интегрално развитие с д-р Уди Орен, оторизиран EMDR преподавател на EMDR Institute, USA.'],
                        ['title' => 'Дихателна терапия', 'text' => 'Обучение с Михаела Симова към Института по интегрално развитие.'],
                        ['title' => 'Арттерапия', 'text' => 'Следдипломна квалификация към Софийски университет „Св. Климент Охридски“.'],
                        ['title' => 'Психодрама', 'text' => 'Специализация и работа като асистент с обучител Георги Добриков; психодрама и работа с деца с обучител Даниела Тахирова.'],
                    ];
                @endphp
                @foreach ($training as $item)
                    <div class="col-lg-6 mb-4">
                        <div class="history-two__border">
                            <div class="history-two__content">
                                <div class="history-two__content__count"></div>
                                <h3 class="history-two__content__title">{{ $item['title'] }}</h3>
                                <p class="history-two__content__text">{{ $item['text'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Групи и обучения -->
    <section class="call-area-three">
        <div class="call-area-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            style="background-image: url('/assets/images/backgrounds/counter-area-two-bg.png');"></div>
        <div class="container">
            <div class="call-area-three__content">
                <h2 class="call-area-three__title">Терапевтични групи, семинари и обучения</h2>
                <p class="call-area-three__text">Мира води терапевтични групи, семейни и системни констелации, семинари и преживелищни процеси, посветени на себеизследването, взаимоотношенията, личностното развитие и емоционалното освобождаване.</p>
                <a href="{{ route('services') }}" class="pelocis-btn"><span>Разгледайте терапиите <i class="icon-right-arrow-white"></i></span></a>
            </div>
        </div>
    </section>

    <!-- Философия -->
    <section class="faq-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-one__title">
                        <div class="sec-title">
                            <div class="sec-title__shape"></div>
                            <h6 class="sec-title__tagline">МОЯТА ФИЛОСОФИЯ</h6>
                            <h2 class="sec-title__title">Всяка история заслужава да бъде чута</h2>
                        </div>
                    </div>
                    <p class="faq-one__text">За Мирослава терапевтичният процес е пространство, в което човек може да се срещне със себе си с повече разбиране, приемане и без осъждане.</p>
                    <p class="faq-one__text">Тя вярва, че зад всеки повтарящ се модел, трудност или емоционална реакция стои история, която заслужава да бъде чута и разбрана.</p>
                </div>
                <div class="col-lg-6">
                    <div class="faq-one__accordion pelocis-accrodion" data-grp-name="pelocis-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title"><div class="accrodion-title__shape"></div><div class="accrodion-title__icon"><i class="fa fa-check"></i></div><h4>Индивидуален подход <i class="icon-right-arrow-white"></i></h4></div>
                            <div class="accrodion-content"><div class="inner"><div class="accrodion-content__icon"><span class="icon-faq1"></span></div><p>Индивидуалните срещи могат да включват EMDR, арттерапия, психодрама, дихателни практики и работа с вътрешното дете според потребностите на човека.</p></div></div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title"><div class="accrodion-title__shape"></div><div class="accrodion-title__icon"><i class="fa fa-check"></i></div><h4>Интегративна работа <i class="icon-right-arrow-white"></i></h4></div>
                            <div class="accrodion-content"><div class="inner"><div class="accrodion-content__icon"><span class="icon-faq1"></span></div><p>Мирослава съчетава EMDR, констелации, арттерапевтични техники, психодрама, дихателни практики и работа с вътрешното дете.</p></div></div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title"><div class="accrodion-title__shape"></div><div class="accrodion-title__icon"><i class="fa fa-check"></i></div><h4>Пространство без осъждане <i class="icon-right-arrow-white"></i></h4></div>
                            <div class="accrodion-content"><div class="inner"><div class="accrodion-content__icon"><span class="icon-faq1"></span></div><p>Среща със себе си с повече разбиране, приемане и уважение към личната история.</p></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend>
