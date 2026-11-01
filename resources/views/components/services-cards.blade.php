
<div class="services-navigation">

    <button type="button"
        class="services-navigation__toggle"
        data-services-open
        aria-expanded="false"
        aria-controls="services-navigation-panel">

        <i class="fa-solid fa-list"></i>
        Виж всички услуги
        <i class="fa-solid fa-arrow-right"></i>

    </button>

    <div class="services-navigation__overlay"
        data-services-overlay></div>

    <div class="services-navigation__panel"
        id="services-navigation-panel"
        data-services-panel>

        <div class="services-navigation__mobile-header">

            <h3>Всички услуги</h3>

            <button type="button"
                class="services-navigation__close"
                data-services-close
                aria-label="Затвори услугите">

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>

        <div class="service-sidebar__single">

            <h3 class="service-sidebar__title">
                Всички услуги
            </h3>

            <ul class="list-unstyled service-sidebar__nav">
                <li><a href="{{  route('service.show', 'individualna-terapiya') }}">Индивидуална терапия</a></li>
                <li><a href="{{  route('service.show', 'semeina-terapiya') }}">Семейна терапия</a></li>
                <li><a href="{{  route('service.show', 'individualna-konstelaciya-s-figurki') }}">Индивидуална констелация с фигурки</a></li>
            </ul>

        </div>

    </div>

</div>
