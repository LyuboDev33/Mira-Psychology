<x-frontend>

    <!-- Начален банер -->

    <section class="main-slider-two">
        <div class="main-slider-two__carousel pelocis-owl__carousel owl-carousel"
            data-owl-options='{"loop":false,"items":1,"autoplay":false,"nav":false,"dots":false,"margin":0}'>

            <div class="item">
                <div class="main-slider-two__item">

                    <div class="main-slider-two__bg"
                        style="background-image: url('/assets/images/backgrounds/slider-2-1.png');">
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-lg-8">
                                <div class="main-slider-two__content">

                                    <h5 class="main-slider-two__sub-title">
                                        Индивидуална терапия • EMDR • Семейни и системни констелации
                                        • Арттерапия • Психодрама • Терапевтични групи и семинари
                                    </h5>

                                    <h1 class="main-slider-two__title">
                                        Когато искаш промяна,
                                        започни от себе си
                                    </h1>

                                    <p class="main-slider-two__text">
                                        Понякога знаем какво искаме да променим,
                                        но не знаем как да стигнем дотам.
                                    </p>

                                    <p class="main-slider-two__text">
                                        В терапевтичната работа създавам пространство,
                                        в което можеш да се срещнеш със себе си по един
                                        по-дълбок и истински начин – да разбереш какво
                                        стои зад повтарящите се модели, да преработиш
                                        преживяното и да изградиш по-свободна връзка
                                        със себе си и с другите.
                                    </p>

                                    <div class="main-slider-two__author">
                                        <h4>Мирослава Мацурева</h4>
                                        <p>Психотерапевт и фасилитатор</p>
                                    </div>

                                    <div class="main-slider-two__btn">
                                        <a href="{{ route('services') }}" class="pelocis-btn">
                                            <span>
                                                Разгледайте терапиите
                                                <i class="icon-right-arrow-white"></i>
                                            </span>
                                        </a>

                                        <a href="#about" class="pelocis-btn pelocis-btn--black">
                                            <span>
                                                За Мирослава
                                                <i class="icon-right-arrow-white"></i>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <img src="/assets/images/test-2.png" alt="Мирослава Мацурева — психотерапевт и фасилитатор"
                                class="main-slider-two__img">

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!-- Въведение -->
    <section class="call-area-two">
        <div class="call-area-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            {{-- style="background-image: url('/assets/images/backgrounds/call-area-twp-bg.png');" --}}>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h3 class="call-area-two__title">Индивидуална терапия, EMDR, констелации и групова работа — различни
                        пътища към себепознание, емоционална подкрепа и личностно развитие.</h3>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a href="{{ route('services') }}" class="pelocis-btn"><span>Вижте терапиите <i
                                class="icon-right-arrow-white"></i></span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- За Мирослава -->
    <section class="about-two mb-5" id="about">
        <div class="about-two__shape"></div>
        {{-- <img src="/assets/images/shapes/home-two-about-shape-1.png" alt="" class="about-two__shape__two">
        <img src="/assets/images/shapes/home-two-about-shape-2.png" alt="" class="about-two__shape__three"> --}}
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="about-two__img">
                        <!-- Заменете примерната снимка с портрет на Мирослава. -->
                        <img src="/assets/images/mira.jpg" alt="Представяне на Мирослава Мацурева">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="sec-title">
                            <div class="sec-title__shape"></div>
                            <h6 class="sec-title__tagline">ЗА МЕН</h6>
                            <h2 class="sec-title__title">Мирослава Мацурева</h2>
                        </div>
                        <p class="about-two__text">Мирослава Мацурева има магистърска степен по криминална психология и
                            професионална подготовка в различни направления на психотерапевтичната и психологическата
                            практика.</p>
                        <p class="about-two__text">През 2021 г. основава център „Албена“ — център за терапевтична и
                            личностна работа. Работи като фасилитатор и води индивидуални терапевтични срещи, семейни и
                            системни констелации, терапевтични групи и преживелищни процеси, насочени към
                            себеизследване, личностно развитие и взаимоотношенията.</p>
                        <ul class="about-two__list">
                            <li>
                                {{-- <span class="icon-social-care"></span> --}}
                                <img class="clean-welcome" src="/assets/images/clean-1.jpg" alt="">
                                <div class="about-two__list__content">
                                    <h3 class="about-two__list__title">Индивидуална терапия и EMDR</h3>
                                    <p class="about-two__list__text">Индивидуални срещи, в които могат да се включват
                                        EMDR, арттерапия, психодрама, дихателни практики и работа с вътрешното дете.</p>
                                </div>
                            </li>
                            <li>
                                <img class="clean-welcome" src="/assets/images/clean-2.jpg" alt="">
                                {{-- <span class="icon-mental-health"></span> --}}
                                <div class="about-two__list__content">
                                    <h3 class="about-two__list__title">Констелации и терапевтични групи</h3>
                                    <p class="about-two__list__text">Семейни и системни констелации, терапевтични групи,
                                        семинари и обучения за личностно развитие и себеизследване.</p>
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

    @include('components.event-cards', $events)


    <!-- team section -->
    <section class="team-two">
        <div class="container">
            <div class="team-two__title text-center">
                <div class="sec-title">



                    <div class="sec-title__shape">
                    </div>
                    <h6 class="sec-title__tagline">ПОВЕЧЕ ЗА МОЯТА РАБОТА</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Терапевтични методи за <br>лично осъзнаване и промяна</h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
            </div>
            <div class="row gutter-y-30">
                <div class="col-lg-3 col-md-6">
                    <div class="team-two__card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay='000ms'>
                        <div class="team-two__card__img">
                            <img src="assets/images/resources/emdr-therapy.png" alt="pelocis">
                            <div class="team-two__card__hover">
                                <a href="{{ route('services') }}" class="pelocis-btn about-one__link"><span>Научи
                                        повече <i class="icon-right-arrow-white"></i></span></a>
                            </div>
                        </div>
                        <div class="team-two__card__content">
                            <h3 class="team-two__card__name"><a href="{{ route('services') }}">EMDR терапия</a></h3>
                            <span class="team-two__card__designation">Работа с травматични преживявания</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-two__card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay='100ms'>
                        <div class="team-two__card__img">
                            <img src="assets/images/resources/team-img-8.png" alt="pelocis">
                            <div class="team-two__card__hover">
                                <a href="{{ route('services') }}" class="pelocis-btn about-one__link"><span>Научи
                                        повече <i class="icon-right-arrow-white"></i></span></a>
                            </div>
                        </div>
                        <div class="team-two__card__content">
                            <h3 class="team-two__card__name"><a href="{{ route('services') }}">Арт терапия</a></h3>
                            <span class="team-two__card__designation">Творчество и себеизразяване</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-two__card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay='200ms'>
                        <div class="team-two__card__img">
                            <img src="assets/images/resources/team-img-9.png" alt="pelocis">
                            <div class="team-two__card__hover">
                                <a href="{{ route('services') }}" class="pelocis-btn about-one__link"><span>Научи
                                        повече <i class="icon-right-arrow-white"></i></span></a>
                            </div>
                        </div>
                        <div class="team-two__card__content">
                            <h3 class="team-two__card__name"><a href="{{ route('services') }}">Психодрама</a></h3>
                            <span class="team-two__card__designation">Преживяване чрез действие</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-two__card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay='300ms'>
                        <div class="team-two__card__img">
                            <img src="assets/images/resources/team-img-10.png" alt="pelocis">
                            <div class="team-two__card__hover">
                                <a href="{{ route('services') }}" class="pelocis-btn about-one__link"><span>Научи
                                        повече <i class="icon-right-arrow-white"></i></span></a>
                            </div>
                        </div>
                        <div class="team-two__card__content">
                            <h3 class="team-two__card__name"><a href="{{ route('services') }}">Дихателни практики</a>
                            </h3>
                            <span class="team-two__card__designation">Контакт с тялото и емоциите</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-two__card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay='300ms'>
                        <div class="team-two__card__img">
                            <img src="/assets/images/resources/team-img-15.png" alt="pelocis">
                            <div class="team-two__card__hover">
                                <a href="{{ route('services') }}" class="pelocis-btn about-one__link"><span>Научи
                                        повече <i class="icon-right-arrow-white"></i></span></a>
                            </div>
                        </div>
                        <div class="team-two__card__content">
                            <h3 class="team-two__card__name"><a href="{{ route('services') }}">Семейни
                                    консталации</a>
                            </h3>
                            <span class="team-two__card__designation">Помагат да видим семейните модели, които влияят
                                на живота ни.</span>
                        </div>
                    </div>
                </div>
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
                        <p class="why-choose-two__text">В индивидуалните срещи и груповите процеси Мирослава съчетава
                            EMDR, семейни и системни констелации, психодрама, арттерапия и дихателни практики според
                            индивидуалните потребности.</p>
                        <div class="why-choose-two__box">
                            <ul class="why-choose-two__list">
                                <li class="why-choose-two__item">
                                    <div class="why-choose-two__count"></div>
                                    <div class="why-choose-two__icon"><span class="icon-mental-health"></span></div>
                                    <div class="why-choose-two__item__content">
                                        <h3 class="why-choose-two__item__title">Тревожност и емоционални трудности</h3>
                                        <p class="why-choose-two__item__text">Индивидуална терапевтична работа с трудни
                                            емоции, самооценка и лични граници.</p>
                                    </div>
                                </li>
                                <li class="why-choose-two__item">
                                    <div class="why-choose-two__count"></div>
                                    <div class="why-choose-two__icon"><span class="icon-family-life"></span></div>
                                    <div class="why-choose-two__item__content">
                                        <h3 class="why-choose-two__item__title">Взаимоотношения и повтарящи се модели
                                        </h3>
                                        <p class="why-choose-two__item__text">Семейни и системни констелации и
                                            психодраматични техники за изследване на отношенията и преживяванията на
                                            отхвърляне и изоставяне.</p>
                                    </div>
                                </li>
                                <li class="why-choose-two__item">
                                    <div class="why-choose-two__count"></div>
                                    <div class="why-choose-two__icon"><span class="icon-cognitive"></span></div>
                                    <div class="why-choose-two__item__content">
                                        <h3 class="why-choose-two__item__title">Травматични преживявания и вътрешното
                                            дете</h3>
                                        <p class="why-choose-two__item__text">EMDR терапия и работа с вътрешното дете
                                            за изследване на личната история и емоционалните ѝ последствия.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="pelocis-stretch-element-inside-column">
                        <div class="why-choose-two__shape-one">
                            <img src="/assets/images/resources/why-choose-two-img-1.png"
                                alt="Терапевтична подкрепа и личностно развитие">
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
                        [
                            'title' => 'Семейни интегрални констелации',
                            'text' => 'Обучение към Института по интегрално развитие с обучител Лоренцо Кампезе.',
                        ],
                        [
                            'title' => 'EMDR терапия',
                            'text' =>
                                'Обучение към Института по интегрално развитие с д-р Уди Орен, оторизиран EMDR преподавател на EMDR Institute, USA.',
                        ],
                        [
                            'title' => 'Дихателна терапия',
                            'text' => 'Обучение с Михаела Симова към Института по интегрално развитие.',
                        ],
                        [
                            'title' => 'Арттерапия',
                            'text' => 'Следдипломна квалификация към Софийски университет „Св. Климент Охридски“.',
                        ],
                        [
                            'title' => 'Психодрама',
                            'text' =>
                                'Специализация и работа като асистент с обучител Георги Добриков; психодрама и работа с деца с обучител Даниела Тахирова.',
                        ],
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
                <p class="call-area-three__text">Мира води терапевтични групи, семейни и системни констелации, семинари
                    и преживелищни процеси, посветени на себеизследването, взаимоотношенията, личностното развитие и
                    емоционалното освобождаване.</p>
                <a href="{{ route('services') }}" class="pelocis-btn"><span>Разгледайте терапиите <i
                            class="icon-right-arrow-white"></i></span></a>
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
                    <p class="faq-one__text">За Мирослава терапевтичният процес е пространство, в което човек може да
                        се срещне със себе си с повече разбиране, приемане и без осъждане.</p>
                    <p class="faq-one__text">Тя вярва, че зад всеки повтарящ се модел, трудност или емоционална реакция
                        стои история, която заслужава да бъде чута и разбрана.</p>
                </div>
                <div class="col-lg-6">
                    <div class="faq-one__accordion pelocis-accrodion" data-grp-name="pelocis-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <div class="accrodion-title__shape"></div>
                                <div class="accrodion-title__icon"><i class="fa fa-check"></i></div>
                                <h4>Индивидуален подход <i class="icon-right-arrow-white"></i></h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="accrodion-content__icon"><span class="icon-faq1"></span></div>
                                    <p>Индивидуалните срещи могат да включват EMDR, арттерапия, психодрама, дихателни
                                        практики и работа с вътрешното дете според потребностите на човека.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <div class="accrodion-title__shape"></div>
                                <div class="accrodion-title__icon"><i class="fa fa-check"></i></div>
                                <h4>Интегративна работа <i class="icon-right-arrow-white"></i></h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="accrodion-content__icon"><span class="icon-faq1"></span></div>
                                    <p>Мирослава съчетава EMDR, констелации, арттерапевтични техники, психодрама,
                                        дихателни практики и работа с вътрешното дете.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <div class="accrodion-title__shape"></div>
                                <div class="accrodion-title__icon"><i class="fa fa-check"></i></div>
                                <h4>Пространство без осъждане <i class="icon-right-arrow-white"></i></h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="accrodion-content__icon"><span class="icon-faq1"></span></div>
                                    <p>Среща със себе си с повече разбиране, приемане и уважение към личната история.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend>
