<x-frontend>

    <!-- Начален банер -->


    <section class="main-slider-two hero-therapy">
        <div class="main-slider-two__item hero-therapy__item">

            <div class="hero-therapy__container container">
                <div class="hero-therapy__label">
                    ТЕРАПИЯ <span>•</span> <strong>EMDR</strong>
                    <span>•</span> КОНСТЕЛАЦИИ <span>•</span> АРТТЕРАПИЯ
                </div>

                <div class="hero-therapy__content">
                    <h1 class="hero-therapy__title">
                        Когато искаш промяна,
                        започни от себе си
                    </h1>

                    <p class="hero-therapy__text">
                        Промяната започва с по-дълбока
                        среща със себе си.
                    </p>

                    <div class="hero-therapy__author">
                        <h4>Мирослава Мацурева</h4>
                        <p>Психотерапевт и фасилитатор</p>
                    </div>

                    <a href="{{ route('services') }}" class="hero-therapy__button">
                        <span>Разгледайте терапиите</span>
                        <i class="icon-right-arrow-white"></i>
                    </a>
                </div>

                <img src="/assets/images/test-2.png" alt="Мирослава Мацурева — психотерапевт и фасилитатор"
                    class="hero-therapy__image">
            </div>

        </div>
    </section>

    <style>
        /* =========================================
   THERAPY HERO
========================================= */

        .hero-therapy {
            position: relative;
            width: 100%;
            overflow: hidden;
            background: #f4eadb;
            color: #211d1a;
        }

        .hero-therapy .hero-therapy__item {
            position: relative;
            min-height: 760px;
            overflow: hidden;
            background: #f4eadb;
        }

        .hero-therapy__container {
            position: relative;
            width: min(100% - 60px, 1440px);
            min-height: 760px;
            margin: 0 auto;
            padding: 70px 0 65px;
        }

        /* Therapy category ribbon */

        .hero-therapy__label {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 13px;
            width: fit-content;
            max-width: 100%;
            min-height: 72px;
            padding: 20px 30px;
            margin-bottom: 90px;
            background: #a97c59;
            color: #fff8ef;
            font-size: 17px;
            font-weight: 400;
            letter-spacing: 0.3px;
            line-height: 1.5;
            text-transform: uppercase;
        }

        .hero-therapy__label::after {
            position: absolute;
            bottom: -24px;
            left: 0;
            width: 0;
            height: 0;
            border-top: 25px solid #a97c59;
            border-right: 25px solid transparent;
            content: "";
        }

        .hero-therapy__label span {
            color: #f8e9d9;
        }

        .hero-therapy__label strong {
            color: #4b2c1d;
            font-weight: 700;
        }

        /* Text content */

        .hero-therapy__content {
            position: relative;
            z-index: 2;
            width: 59%;
            max-width: 740px;
            padding-bottom: 5px;
        }

        .hero-therapy__title {
            max-width: 740px;
            margin: 0 0 28px;
            color: #211d1a;
            font-size: 44px;
            font-weight: 750;
            line-height: 1.12;
            letter-spacing: -2px;
        }

        .hero-therapy__text {
            max-width: 590px;
            margin: 0;
            color: #5e3e2b;
            font-size: clamp(21px, 2.1vw, 30px);
            font-weight: 400;
            line-height: 1.5;
        }

        /* Author */

        .hero-therapy__author {
            margin-top: 35px;
        }

        .hero-therapy__author h4 {
            margin: 0 0 8px;
            color: #211d1a;
            font-size: clamp(23px, 2.2vw, 32px);
            font-weight: 700;
            line-height: 1.3;
        }

        .hero-therapy__author p {
            margin: 0;
            color: #6b4b36;
            font-size: clamp(18px, 1.8vw, 25px);
            line-height: 1.45;
        }

        /* CTA button */

        .hero-therapy__button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
            min-height: 64px;
            margin-top: 42px;
            padding: 18px 30px;
            border: 0;
            border-radius: 50px;
            background: #a97c59;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            line-height: 1.3;
            text-decoration: none;
            text-transform: uppercase;
            transition:
                background-color 0.25s ease,
                transform 0.25s ease;
        }

        .hero-therapy__button:hover {
            background: #80583d;
            color: #fff;
            transform: translateY(-2px);
        }

        .hero-therapy__button i {
            font-size: 17px;
            transition: transform 0.25s ease;
        }

        .hero-therapy__button:hover i {
            transform: translateX(4px);
        }

        /* Therapist image */

        .hero-therapy__image {
            position: absolute;
            z-index: 1;
            right: -15px;
            bottom: 0;
            display: block;
            width: 43%;
            max-width: 590px;
            /* max-height: 88%; */
            object-fit: contain;
            object-position: right bottom;
        }

        /* =========================================
   RESPONSIVE
========================================= */

        @media (min-width: 1500px) {
            .hero-therapy__container {
                padding-top: 85px;
            }

            .hero-therapy .hero-therapy__item,
            .hero-therapy__container {
                min-height: 820px;
            }

            .hero-therapy__label {
                margin-bottom: 100px;
                font-size: 19px;
            }

            .hero-therapy__image {
                width: 45%;
                max-width: 650px;
            }
        }

        @media (max-width: 1199px) {

            .hero-therapy .hero-therapy__item,
            .hero-therapy__container {
                min-height: 690px;
            }

            .hero-therapy__container {
                padding-top: 55px;
            }

            .hero-therapy__label {
                margin-bottom: 75px;
                padding: 17px 22px;
                gap: 9px;
                font-size: 14px;
            }

            .hero-therapy__content {
                width: 62%;
            }

            .hero-therapy__title {
                letter-spacing: -1.5px;
            }

            .hero-therapy__author {
                margin-top: 75px;
            }

            .hero-therapy__image {
                right: -25px;
                width: 44%;
            }
        }

        @media (max-width: 767px) {

            .hero-therapy .hero-therapy__item,
            .hero-therapy__container {
                min-height: 0;
            }

            .hero-therapy__container {
                width: calc(100% - 40px);
                padding: 35px 0 0;
            }

            .hero-therapy__label {
                width: calc(100% - 12px);
                min-height: 0;
                flex-wrap: wrap;
                justify-content: flex-start;
                gap: 5px 8px;
                margin-bottom: 48px;
                padding: 15px 16px;
                font-size: 11px;
                line-height: 1.6;
            }

            .hero-therapy__label::after {
                bottom: -17px;
                border-top-width: 18px;
                border-right-width: 18px;
            }

            .hero-therapy__content {
                width: 100%;
                max-width: none;
            }

            .hero-therapy__title {
                max-width: 520px;
                margin-bottom: 18px;
                font-size: clamp(39px, 9vw, 58px);
                line-height: 1.1;
                letter-spacing: -1.5px;
            }

            .hero-therapy__text {
                max-width: 240px;
                font-size: clamp(20px, 5vw, 26px);
                line-height: 1.45;
            }

            .hero-therapy__author {
                position: relative;
                z-index: 2;
                margin-top: 40px;
                padding-bottom: 0;
            }

            .hero-therapy__author h4 {
                max-width: 300px;
                font-size: 25px;
            }

            .hero-therapy__author p {
                max-width: 290px;
                font-size: 18px;
            }

            .hero-therapy__button {
                position: relative;
                z-index: 2;
                gap: 12px;
                min-height: 54px;
                margin-top: 30px;
                margin-bottom: 35px;
                padding: 16px 22px;
                font-size: 13px;
            }

            .hero-therapy__image {
                right: -80px;
                bottom: -115px;
                width: min(82%, 390px);
                max-width: none;
                max-height: none;
            }
        }

        @media (max-width: 420px) {
            .hero-therapy__container {
                width: calc(100% - 32px);
                padding-top: 28px;
            }

            .hero-therapy__label {
                font-size: 13px;
            }

            .hero-therapy__title {
                font-size: 39px;
            }

            .hero-therapy__author {
                margin-top: 40px;
            }

            .hero-therapy__image {
                right: -95px;
                bottom: -48px;
                width: 80%;
            }

            .hero-therapy__button {
                padding: 15px 18px;
                font-size: 12px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .hero-therapy__button,
            .hero-therapy__button i {
                transition: none;
            }
        }

        .scrolling-ticker {
            padding: 15px 0;
            color: #ffffff;
            background-color: #a97c59;
        }

        .scrolling-ticker-box {
            --gap: 20px;
            position: relative;
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: 20px;
        }

        .scrolling-content {
            flex-shrink: 0;
            display: flex;
            gap: 20px;
            min-width: 100%;
            animation: scroll 50s linear infinite;
        }

        .scrolling-content span {
            display: inline-flex;
            align-items: center;
            font-family: inherit;
            font-size: 40px;
            line-height: 1.4em;
            font-weight: 700;
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(calc(-100% - 20px));
            }
        }


        .scrolling-content span i {
            font-size: 8px;
            color: var(--white-color);
            margin-right: 20px;
        }
    </style>

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

    <div class="scrolling-ticker">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><i class="fa-solid fa-circle"></i>ТЕРАПИЯ</span>
                <span><i class="fa-solid fa-circle"></i>EMDR</span>
                <span><i class="fa-solid fa-circle"></i>КОНСТЕЛАЦИИ</span>
                <span><i class="fa-solid fa-circle"></i>АРТТЕРАПИЯ</span>
                    <span><i class="fa-solid fa-circle"></i>ТЕРАПИЯ</span>
                <span><i class="fa-solid fa-circle"></i>EMDR</span>
                <span><i class="fa-solid fa-circle"></i>КОНСТЕЛАЦИИ</span>
                <span><i class="fa-solid fa-circle"></i>АРТТЕРАПИЯ</span>

            </div>

            <div class="scrolling-content">
                <span><i class="fa-solid fa-circle"></i>ТЕРАПИЯ</span>
                <span><i class="fa-solid fa-circle"></i>EMDR</span>
                <span><i class="fa-solid fa-circle"></i>КОНСТЕЛАЦИИ</span>
                <span><i class="fa-solid fa-circle"></i>АРТТЕРАПИЯ</span>
                    <span><i class="fa-solid fa-circle"></i>ТЕРАПИЯ</span>
                <span><i class="fa-solid fa-circle"></i>EMDR</span>
                <span><i class="fa-solid fa-circle"></i>КОНСТЕЛАЦИИ</span>
                <span><i class="fa-solid fa-circle"></i>АРТТЕРАПИЯ</span>
            </div>
        </div>
    </div>


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
