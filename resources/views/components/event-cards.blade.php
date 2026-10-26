@props(['events' => collect()])

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
