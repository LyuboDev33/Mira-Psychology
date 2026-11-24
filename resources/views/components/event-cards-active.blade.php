@props([
    'events' => collect(),
    'isPast' => false
])

<!-- Events -->
<section class="service-one-home {{ $isPast ? 'bg-light' : '' }}">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">

            @if ($isPast)

                <h2>Минали събития</h2>

                <p>
                    Разгледайте събитията, терапевтичните групи и срещите,
                    които вече се проведоха.
                </p>

            @else

                <h2>Предстоящи събития</h2>

                <p>
                    Открийте предстоящите срещи, групи и събития.
                    Разгледайте подробностите и запазете своето място.
                </p>

            @endif

        </div>

        <div class="row gutter-y-30">

            @forelse ($events as $event)

                <div class="col-lg-4 col-md-6">

                    <div class="home-services__card event-card h-100 shadow">

                        <div class="home-services__card__shape--one"></div>
                        <div class="home-services__card__shape--two"></div>

                        <!-- Card Content -->
                        <div class="home-services__card__content">

                            <div class="home-services__card__icon">

                                @if ($isPast)
                                    <i class="fas fa-calendar-check"></i>
                                @else
                                    <i class="fas fa-calendar-alt"></i>
                                @endif

                            </div>

                            <!-- Date -->
                            <h4 class="home-services__card__count">
                                {{ $event->starts_at->format('d.m.Y') }}
                            </h4>

                            <!-- Title -->
                            <h2 class="home-services__card__title">

                                <a href="{{ $event->url }}">
                                    {{ $event->title }}
                                </a>

                            </h2>

                            <!-- Location -->
                            <p class="home-services__card__text event-card__detail">

                                <i class="fas fa-map-marker-alt"></i>

                                <span>
                                    {{ $event->location }}
                                </span>

                            </p>

                            <!-- Time -->
                            <p class="home-services__card__text event-card__detail">

                                <i class="far fa-clock"></i>

                                <span>
                                    {{ $event->starts_at->format('H:i') }} ч.
                                </span>

                            </p>

                            <!-- Event Status -->
                            @if ($isPast)

                                <div class="bg-danger text-white p-1 rounded-pill mt-3 mb-0 text-center">
                                    Събитието е приключило.
                                </div>

                            @endif

                            <!-- Visible CTA -->
                            <div class="event-card__action">

                                <a href="{{ route('events.show', $event->slug) }}"
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

                            <a href="{{ $event->url }}"
                                class="event-card__image-link"
                                aria-label="Разгледай {{ $event->title }}">

                                <img src="{{ asset('assets/images/events/' . $event->image) }}"
                                    alt="{{ $event->title }}"
                                    loading="lazy">

                            </a>

                            <div class="home-services__card__hover">

                                <a href="{{ $event->url }}"
                                    class="home-services__card__hover-link"
                                    aria-label="Виж {{ $event->title }}">

                                    <i class="icon-arrow-small-right"></i>

                                </a>

                            </div>

                            <a href="{{ $event->url }}"
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

                        @if ($isPast)

                            <i class="far fa-calendar-check"
                                style="font-size: 48px;"></i>

                        @else

                            <i class="far fa-calendar-alt"
                                style="font-size: 48px;"></i>

                        @endif

                    </div>

                    @if ($isPast)

                        <h3>Все още няма минали събития</h3>

                        <p>
                            Тук ще откриете информация за проведените
                            срещи, терапевтични групи и събития.
                        </p>

                    @else

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

                    @endif

                </div>

            @endforelse

        </div>

    </div>
</section>
