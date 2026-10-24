
<footer class="main-footer main-footer--home-two background-black">
    <div class="main-footer__bg background-black"
        {{-- style="background-image: url(/assets/images/backgrounds/footer-bg.png);" --}}
        >
    </div>
    <!-- /.main-footer__bg -->

    <div class="main-footer__top">
        <img src="/assets/images/shapes/footer-shape.png"
            alt="Декоративен елемент"
            class="main-footer__shape-1">

        <div class="container">
            <div class="row">

                <!-- За Албета -->
                <div class="col-md-4 col-xl-4">
                    <div class="footer-widget footer-widget--about">

                        <x-logo width="250" mobileWidth="200" />

                        <p class="footer-widget__text">
                            Пространство за себепознание, приемане и промяна.
                            Индивидуална терапия, EMDR, арт терапия,
                            психодрама и терапевтични групи с внимание
                            към вашите потребности и личен път.
                        </p>

                        <div class="footer-widget__social">
                            <a href="https://facebook.com"
                                aria-label="Facebook">
                                <i class="fab fa-facebook-f"
                                    aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>

                            <a href="https://instagram.com"
                                aria-label="Instagram">
                                <i class="fab fa-instagram"
                                    aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Навигация -->
                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title footer-widget__title--ml-18">
                            Навигация
                        </h2>

                        <ul class="list-styled footer-widget__links">
                            <li><a href="/">Начало</a></li>
                            <li><a href="{{ route('about') }}">За мен</a></li>
                            <li><a href="{{ route('services') }}">Услуги</a></li>
                            <li><a href="{{ route('events.index') }}">Събития</a></li>
                            <li><a href="{{ route('contact') }}">Контакти</a></li>
                        </ul>
                    </div>
                </div>



                <!-- Контакти -->
                <div class="col-md-4 col-xl-4">
                    <div class="footer-widget footer-widget--gallery">
                        <h2 class="footer-widget__title">
                            Свържете се с мен
                        </h2>

                        <p class="footer-widget__text">
                            Ако усещате, че е време за промяна,
                            можете да направите първата крачка
                            и да запазите своя час.
                        </p>

                        <ul class="list-unstyled footer-widget__links">
                            <li>
                                <a href="tel:YOUR_PHONE">
                                    <i class="fas fa-phone-alt me-2"></i>
                                    Вашият телефон
                                </a>
                            </li>

                            <li>
                                <a href="mailto:YOUR_EMAIL">
                                    <i class="fas fa-envelope me-2"></i>
                                    Вашият имейл
                                </a>
                            </li>

                            <li>
                                <a href="/contact">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    Адрес на кабинета
                                </a>
                            </li>
                        </ul>

                        <a href="/calendar" class="pelocis-btn mt-3">
                            <span>
                                Запази час
                                <i class="icon-right-arrow-white"></i>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <img src="/assets/images/shapes/footer-bg-shape.png"
            alt="Декоративен елемент"
            class="main-footer__shape-2">
    </div>

    <!-- Долна част -->
    <div class="main-footer__bottom">
        <p class="main-footer__copyright">
            &copy; {{ date('Y') }} Албета – Мирослава Мацурева.
            Всички права запазени.

            <span class="mx-2">|</span>

            <a href="/privacy-policy">
                Политика за поверителност
            </a>

            <span class="mx-2">|</span>

            <a href="/terms-and-conditions">
                Общи условия
            </a>
        </p>
    </div>
</footer>
