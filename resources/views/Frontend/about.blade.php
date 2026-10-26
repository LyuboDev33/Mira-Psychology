<x-frontend>



    <section class="page-header">
        <div class="page-header__bg">
            <div class="page-header__bg__img"
                style="background-image: url(/assets/images/backgrounds/page-header-img-1.png);">
            </div>
            <div class="page-header__bg__shape-1">
            </div>
            <div class="page-header__bg__shape-2">
            </div>
        </div>
        <div class="container">
            <h2 class="page-header__title">За мен </h2>
            <ul class="pelocis-breadcrumb list-unstyled">
                <li><a href="{{ route('home') }}">Начало</a></li>
                <li><span>За мен</span></li>
            </ul>
        </div>
        <img class="page-header__shape" src="assets/images/shapes/bannar-shape-2.png" alt="bannar-shape">
    </section>
    <!-- /.page-header -->

    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-one__image wow fadeInUp" data-wow-duration="1500ms" data-wow-delay='000ms'>
                        <img src="assets/images/resources/about-img-1.png" alt="pelocis">
                        <div class="about-one__shape--one count-box">
                            <p class="about-one__experiance"><span class="count-text" data-stop="32"
                                    data-speed="2500"></span>7+ години опит</p>
                        </div>
                    </div><!-- /.about-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-7">
                    <div class="about-one__content wow fadeInUp" data-wow-duration="1500ms" data-wow-delay='100ms'>
                        <div class="about-one__title">
                            <div class="sec-title">



                                <div class="sec-title__shape">
                                </div>
                                <h6 class="sec-title__tagline">ЗАПОЗНАЙТЕ СЕ С МЕН</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Мирослава Мацурева – пространство за разбиране, приемане и
                                    промяна</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <img src="assets/images/shapes/text-shape-2.png" alt="pelocis"
                                class="about-one__title__shape">
                        </div>

                        <p class="about-one__text">Понякога в живота ни се появяват моменти, в които старият начин, по
                            който сме се справяли, вече не работи. Терапията е пространство, в което можете да се
                            обърнете към себе си, да разберете преживяванията си и да откриете нови възможности за
                            промяна.</p>
                        <!-- /.about-one__text -->
                        <div class="about-one__content__box">
                            <div class="about-one__content__box-left">
                                <img src="assets/images/resources/about-img-2.png" alt="pelocis">
                            </div>

                            <div class="about-one__content__box-right">
                                <ul class="list-unstyled d-flex  flex-column m-0">
                                    <li>
                                        <span><i class="fa fa-arrow-right"></i></span>
                                        Вярвам, че всеки човек има свой собствен път и заслужава да бъде чут с уважение
                                        и приемане.
                                    <li>
                                        <span><i class="fa fa-arrow-right"></i></span>
                                        Работим заедно, с внимание към вашите потребности и в темпо, което е подходящо
                                        за вас.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list-unstyled service-details__card__list d-flex align-items-center gap-3 p-0">
                            <li>
                                <span class="icon-arrow-circle-check"></span>
                                Не е необходимо да знаете предварително какво точно да кажете. Понякога промяната
                                започва с един разговор.
                            </li>

                        </ul>
                        <a href="{{ route('services') }}" class="pelocis-btn about-one__link"><span>Научи повече <i
                                    class="icon-right-arrow-white"></i></span></a>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->



    <!-- best services -->
    <section class="service-three service-three--about-page">
        <img src="assets/images/resources/best-service-bg-shape-1.png" alt="pelocis" class="service-three__shape-one">
        <img src="assets/images/resources/best-service-bg-shape-2.png" alt="pelocis" class="service-three__shape-two">
        <div class="container">
            <div class="text-center text-white">
                <div class="sec-title">



                    <div class="sec-title__shape">
                    </div>
                    <h6 class="sec-title__tagline">ТЕРАПЕВТИЧНИ ПОДХОДИ</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Различни начини да се свържем <br> със себе си</h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
            </div>
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="service-three__card">
                        <div class="service-three__card__image">
                            <img src="assets/images/resources/service-3-1.jpg" alt="pelocis">
                        </div>
                        <div class="service-three__card__content">
                            <div class="service-three__card__icon"><i class="icon-brain"></i></div>
                            <div class="service-three__card__count"><i class="icon-wave-shape"></i></div>
                            <h2 class="service-three__card__title"><a>EMDR терапия</a>
                            </h2>
                            <p class="service-three__card__text">
                                Подход за преработване на травматични и силно натоварващи преживявания, с внимание към
                                сигурността и индивидуалното темпо.
                            </p>
                            <a href="{{ route('services') }}" class="service-three__card__link">
                                <span>Научи повече <i class="icon-right-arrow-white"></i></span>
                            </a>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="service-three__card">
                        <div class="service-three__card__image">
                            <img src="assets/images/resources/service-3-2.jpg" alt="pelocis">
                        </div>
                        <div class="service-three__card__content">
                            <div class="service-three__card__icon"><i class="icon-partnership"></i></div>
                            <div class="service-three__card__count"><i class="icon-wave-shape"></i></div>
                            <h2 class="service-three__card__title"><a>Арт терапия</a>
                            </h2>
                            <p class="service-three__card__text">
                                Когато думите не са достатъчни, творческият процес помага да изразим чувства и
                                преживявания чрез цвят, образ и движение.
                            </p>
                            <a href="{{ route('services') }}" class="service-three__card__link">
                                <span>Научи повече <i class="icon-right-arrow-white"></i></span>
                            </a>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-three__card">
                        <div class="service-three__card__image">
                            <img src="assets/images/resources/service-3-3.jpg" alt="pelocis">
                        </div>
                        <div class="service-three__card__content">
                            <div class="service-three__card__icon"><i class="icon-family-life"></i></div>
                            <div class="service-three__card__count"><i class="icon-wave-shape"></i></div>
                            <h2 class="service-three__card__title"><a>Психодрама</a></h2>
                            <p class="service-three__card__text">
                                Изследване на важни житейски ситуации чрез действие, роли и нови перспективи в защитена
                                терапевтична среда.
                            </p>
                            <a href="{{ route('services') }}" class="service-three__card__link">
                                <span>Научи повече <i class="icon-right-arrow-white"></i></span>
                            </a>
                        </div>
                    </div>
                </div><!-- item -->
                       <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="service-three__card">
                        <div class="service-three__card__image">
                            <img src="assets/images/resources/service-3-2.jpg" alt="pelocis">
                        </div>
                        <div class="service-three__card__content">
                            <div class="service-three__card__icon"><i class="icon-partnership"></i></div>
                            <div class="service-three__card__count"><i class="icon-wave-shape"></i></div>
                            <h2 class="service-three__card__title"><a>Семейни консталации</a>
                            </h2>
                            <p class="service-three__card__text">
                                Когато думите не са достатъчни, творческият процес помага да изразим чувства и
                                преживявания чрез цвят, образ и движение.
                            </p>
                            <a href="{{ route('services') }}" class="service-three__card__link">
                                <span>Научи повече <i class="icon-right-arrow-white"></i></span>
                            </a>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-three__card">
                        <div class="service-three__card__image">
                            <img src="assets/images/resources/service-3-3.jpg" alt="pelocis">
                        </div>
                        <div class="service-three__card__content">
                            <div class="service-three__card__icon"><i class="icon-family-life"></i></div>
                            <div class="service-three__card__count"><i class="icon-wave-shape"></i></div>
                            <h2 class="service-three__card__title"><a>Дихателни практики</a></h2>
                            <p class="service-three__card__text">
                                Изследване на важни житейски ситуации чрез действие, роли и нови перспективи в защитена
                                терапевтична среда.
                            </p>
                            <a href="{{ route('services') }}" class="service-three__card__link">
                                <span>Научи повече <i class="icon-right-arrow-white"></i></span>
                            </a>
                        </div>
                    </div>
                </div><!-- item -->
            </div>
        </div>
    </section>

    <!-- why-choose-one -->
    <section class="why-choose-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-one__content wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay='000ms'>
                        <div class="why-choose-one__title">
                            <div class="sec-title">



                                <div class="sec-title__shape">
                                </div>
                                <h6 class="sec-title__tagline">МОЯТ ПОДХОД</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Всеки човек има свой собствен път</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <img src="assets/images/shapes/text-shape-2.png" alt="pelocis"
                                class="why-choose-one__title__shape">
                        </div>
                        <p class="why-choose-one__text">
                            Не вярвам, че съществува един подход, подходящ за всички. В зависимост от вашите потребности
                            съчетавам различни терапевтични методи, като заедно изследваме връзката между настоящите
                            трудности и преживяванията от миналото.
                        </p><!-- /.why-choose-one__text -->
                        <ul class="list-unstyled why-choose-one__list">
                            <li class="why-choose-one__list__item-one">
                                <img src="assets/images/resources/about-img-3.png" alt="pelocis">
                                <ul class="list-unstyled  d-flex gap-1 flex-column m-0">
                                    <li>
                                        <span class="fa fa-arrow-circle-right"></span>
                                        <a >Индивидуален подход и лично темпо</a>
                                    </li>
                                    <li>
                                        <span class="fa fa-arrow-circle-right"></span>
                                        <a >Приемане, уважение и конфиденциалност</a>
                                    </li>
                                    <li>
                                        <span class="fa fa-arrow-circle-right"></span>
                                        <a >Пространство за осъзнаване и промяна</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="why-choose-one__list__item">
                                <div class="why-choose-one__list__icon">
                                    <i class="icon-cognitive"></i>
                                </div><!-- /.why-choose-one__list__icon -->
                                <div class="why-choose-one__list__content">
                                    <h4 class="why-choose-one__list__title"><a href="{{ route('services') }}">Работа с емоциите</a>
                                    </h4><!-- /.why-choose-one__list__title -->
                                    <p class="why-choose-one__list__text">
                                        Изследваме чувствата, потребностите и преживяванията, които стоят зад настоящите
                                        трудности.</p><!-- /.why-choose-one__list__text -->
                                </div>
                            </li><!-- /.why-choose-one__list__item -->
                            <li class="why-choose-one__list__item">
                                <div class="why-choose-one__list__icon">
                                    <i class="icon-partnership"></i>
                                </div><!-- /.why-choose-one__list__icon -->
                                <div class="why-choose-one__list__content">
                                    <h4 class="why-choose-one__list__title"><a href="{{ route('services') }}">Взаимоотношения и
                                            лични граници</a></h4><!-- /.why-choose-one__list__title -->
                                    <p class="why-choose-one__list__text">
                                        Обръщаме внимание на повтарящите се модели, близостта и начина, по който се
                                        свързваме с другите.</p><!-- /.why-choose-one__list__text -->
                                </div>
                            </li><!-- /.why-choose-one__list__item -->
                        </ul><!-- /.list-unstyled why-choose-one__list -->
                    </div><!-- /.why-choose-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="why-choose-one__image count-box wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay='100ms'>
                        <img src="assets/images/resources/about-img-4.png" alt="pelocis">
                        <div class="why-choose-one__image__content ">
                            <h3><span class="count-text" data-stop="650" data-speed="1500"></span>+</h3>
                            <p>ПОДКРЕПА И ПРИЕМАНЕ</p>
                        </div>
                    </div><!-- /.why-choose-one__image -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.why-choose-one -->



    <!-- testimonials section -->
    <section class="testimonials-one">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="00ms">
                    <div class="pelocis-stretch-element-inside-column">
                        <div class="testimonials-one__image">
                            <img src="assets/images/resources/testimonials-img-1.png" alt="pelocis">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="testimonials-card__content">
                        <div class="testimonials-card__title">
                            <div class="sec-title">



                                <div class="sec-title__shape">
                                </div>
                                <h6 class="sec-title__tagline">ЗА ТЕРАПЕВТИЧНИЯ ПРОЦЕС</h6>
                                <!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Понякога най-важната среща <br> е тази със самите нас</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.testimonials-one -->

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
                        [
                            'icon' => 'icon-cognitive',
                            'title' => 'EMDR терапия',
                            'text' =>
                                'Терапевтичен метод, използван в работата с травматични преживявания и свързаните с тях емоционални трудности.',
                        ],
                        [
                            'icon' => 'icon-family-life',
                            'title' => 'Семейни и системни констелации',
                            'text' =>
                                'Изследване на семейните истории, взаимоотношенията и повтарящите се модели чрез констелационна работа.',
                        ],
                        [
                            'icon' => 'icon-idea',
                            'title' => 'Арттерапия',
                            'text' =>
                                'Творчески и арттерапевтични техники за изследване и изразяване на лични преживявания и емоции.',
                        ],
                        [
                            'icon' => 'icon-partnership',
                            'title' => 'Психодрама',
                            'text' =>
                                'Преживелищна работа с житейски ситуации, отношения и емоции чрез психодраматични техники.',
                        ],
                        [
                            'icon' => 'icon-mental-health',
                            'title' => 'Дихателна терапия',
                            'text' =>
                                'Дихателни практики, включени в индивидуалната и преживелищната терапевтична работа.',
                        ],
                        [
                            'icon' => 'icon-hand',
                            'title' => 'Работа с вътрешното дете',
                            'text' =>
                                'Терапевтична работа с ранни преживявания, усещане за отхвърляне или изоставяне и повтарящи се емоционални модели.',
                        ],
                    ];
                @endphp
                @foreach ($approaches as $approach)
                    <div class="col-lg-4 col-md-6 service-card">
                        <div class="service-card__inner">
                            <div class="service-card__hover"
                                style="background-image: url('/assets/images/resources/service-1.png');"></div>
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


    <!-- call area -->
    <section class="call-area-one">
        <div class="call-area-one__left-shape">
            <img src="assets/images/shapes/call-area-shape-1.png" alt="pelocis">
        </div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8">
                    <div class="call-area-one__content wow fadeInUp" data-wow-delay='000ms'>
                        <h3 class="call-area-one__title">Понякога промяната започва с един разговор</h3>
                        <p class="call-area-one__text">
                            Първата среща е пространство за запознаване и изясняване на това, което ви води. <br>
                            Заедно ще поговорим за вашите очаквания и посоката, в която искате да работим. <br>
                            Не е нужно да преминавате през трудното сами. <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay='100ms'>
                    <div class="call-area-one__btn">
                        <a href="" class="pelocis-btn">
                            <span>Запиши си час <i class="icon-right-arrow-white"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-area-one__right-shape">
            <img src="assets/images/shapes/call-area-shape-2.png" alt="pelocis">
        </div>
    </section>



</x-frontend>
