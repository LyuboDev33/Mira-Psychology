        <header class="main-header main-header--two sticky-header sticky-header--one-page">
            <div class="container">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <x-logo />
                    </div><!-- /.main-header__logo -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li>
                                <a href="{{ route('home') }}">Начало</a>
                            </li>

                            <li>
                                <a href="{{ route('about') }}">За мен</a>
                            </li>

                            <li>
                                <a href="{{ route('services') }}">Услуги</a>
                            </li>

                            <li>
                                <a href="{{ route('events.index') }}">Събития</a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}">Контакти</a>
                            </li>

                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->

                        <div class="contact-wrapper">
                            <div class="contact-content">
                                <a target="_blank" class="pelocis-btn pelocis-btn--black text-white"
                                    data-cal-link="miroslava-matsureva-klzms5"
                                    data-cal-namespace="тераевтична-сесия-присъствено"
                                    data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}'>
                                    <span>Запиши си час<i class="icon-right-arrow-white"></i></span>
                                </a><!-- slider-btn -->
                            </div>
                        </div>

                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->



        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <x-logo mobileWidth="200" />
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:miroslavamatsureva@gmail.com">miroslavamatsureva@gmail.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:359888 354 227">0888 354 227</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__social">
                    <a href="https://facebook.com">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>

                </div><!-- /.mobile-nav__social -->
            </div>
            <!-- /.mobile-nav__content -->
        </div>
