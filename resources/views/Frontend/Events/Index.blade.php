
<x-frontend>

    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header__bg">
            <div class="page-header__bg__img"
                style="background-image: url('/assets/images/backgrounds/page-header-img-1.png');">
            </div>
            <div class="page-header__bg__shape-1"></div>
            <div class="page-header__bg__shape-2"></div>
        </div>

        <div class="container">
            <h2 class="page-header__title">Предстоящи събития</h2>

            <ul class="pelocis-breadcrumb list-unstyled">
                <li><a href="/">Начало</a></li>
                <li><span>Събития</span></li>
            </ul>
        </div>

        <img class="page-header__shape"
            src="/assets/images/shapes/bannar-shape-2.png"
            alt="">
    </section>

    <!-- Events -->
    <section class="service-one-home">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Предстоящи събития</h2>
                <p>
                    Открийте предстоящите срещи, групи и събития.
                    Разгледайте подробностите и запазете своето място.
                </p>
            </div>

            <div class="row gutter-y-30">

                @forelse ($events as $event)
                    @php
                        $availablePlaces = max(
                            0,
                            $event->capacity - $event->bookings_count
                        );

                        $eventUrl = route('events.show', $event->slug);
                    @endphp

                    <div class="col-lg-4 col-md-6">

                        <div class="home-services__card event-card h-100">

                            <div class="home-services__card__shape--one"></div>
                            <div class="home-services__card__shape--two"></div>

                            <!-- Card Content -->
                            <div class="home-services__card__content">

                                <div class="home-services__card__icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>

                                <!-- Date -->
                                <h4 class="home-services__card__count">
                                    {{ $event->starts_at->format('d.m.Y') }}
                                </h4>

                                <!-- Title -->
                                <h2 class="home-services__card__title">
                                    <a href="{{ $eventUrl }}">
                                        {{ $event->title }}
                                    </a>
                                </h2>

                                <!-- Location -->
                                <p class="home-services__card__text event-card__detail">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>{{ $event->location }}</span>
                                </p>

                                <!-- Time -->
                                <p class="home-services__card__text event-card__detail">
                                    <i class="far fa-clock"></i>
                                    <span>
                                        {{ $event->starts_at->format('H:i') }} ч.
                                    </span>
                                </p>

                                <!-- Available Places -->
                                <p class="home-services__card__text event-card__detail">
                                    <i class="fas fa-users"></i>

                                    <span>
                                        @if ($availablePlaces > 0)
                                            Свободни места:
                                            <strong>{{ $availablePlaces }}</strong>
                                        @else
                                            <strong>Няма свободни места</strong>
                                        @endif
                                    </span>
                                </p>

                                <!-- Visible CTA -->
                                <div class="event-card__action">
                                    <a href="{{ $eventUrl }}"
                                        class="pelocis-btn event-card__button">
                                        <span>
                                            Разгледай събитието
                                            <i class="icon-right-arrow-white"></i>
                                        </span>
                                    </a>
                                </div>

                            </div>

                            <!-- Image -->
                            <div class="home-services__card__image">

                                <a href="{{ $eventUrl }}"
                                    class="event-card__image-link"
                                    aria-label="Разгледай {{ $event->title }}">

                                    <img
                                        src="{{ asset('assets/images/events/' . $event->image) }}"
                                        alt="{{ $event->title }}"
                                        loading="lazy">
                                </a>

                                <div class="home-services__card__hover">
                                    <a href="{{ $eventUrl }}"
                                        class="home-services__card__hover-link"
                                        aria-label="Виж {{ $event->title }}">
                                        <i class="icon-arrow-small-right"></i>
                                    </a>
                                </div>

                                <a href="{{ $eventUrl }}"
                                    class="home-services__card__link"
                                    aria-label="Виж {{ $event->title }}">
                                    <i class="icon-arrow-small-right"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12 text-center py-5">
                        <div class="mb-4">
                            <i class="far fa-calendar-alt"
                                style="font-size: 48px;"></i>
                        </div>

                        <h3>В момента няма предстоящи събития</h3>

                        <p>
                            Скоро ще споделим информация за нови
                            срещи и събития. Очаквайте ни!
                        </p>

                        <a href="/" class="pelocis-btn mt-3">
                            <span>
                                Към началната страница
                                <i class="icon-right-arrow-white"></i>
                            </span>
                        </a>
                    </div>

                @endforelse

            </div>

        </div>
    </section>

    <style>
        /* Event card layout */
        .event-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .event-card .home-services__card__content {
            display: flex;
            flex-direction: column;
            flex: 1;
            width: 100%;
        }

        /* Location, time and available places */
        .event-card__detail {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 12px;
        }

        .event-card__detail i {
            flex-shrink: 0;
            width: 18px;
            margin-top: 5px;
        }

        .event-card__detail span {
            flex: 1;
            min-width: 0;
        }

        /* Keep button at bottom */
        .event-card__action {
            margin-top: auto;
            padding-top: 25px;
            position: relative;
            z-index: 3;
        }

        .event-card__button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            max-width: 100%;
        }

        /* Clickable image */
        .event-card__image-link {
            display: block;
        }

        .event-card__image-link img {
            display: block;
            width: 100%;
        }

        /* Mobile improvements */
        @media (max-width: 767px) {
            .event-card__action {
                width: 100%;
                padding-top: 20px;
            }

            .event-card__button {
                display: flex;
                width: 100%;
            }

            .event-card__button span {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
            }

            .event-card__detail {
                margin-bottom: 10px;
            }
        }
    </style>

</x-frontend>
