
<x-frontend>

    <section class="service-one-home">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Предстоящи събития</h2>
                <p>Разгледайте нашите събития и запазете своето място.</p>
            </div>

            <div class="row gutter-y-30">

                @forelse ($events as $event)

                    @php
                        $availablePlaces = max(0, $event->capacity - $event->bookings_count);
                    @endphp

                    <div class="col-lg-4 col-md-6">

                        <div class="home-services__card h-100">

                            <div class="home-services__card__shape--one"></div>
                            <div class="home-services__card__shape--two"></div>

                            <div class="home-services__card__content">

                                <div class="home-services__card__icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>

                                <h4 class="home-services__card__count">
                                    {{ $event->starts_at->format('d.m.Y') }}
                                </h4>

                                <h2 class="home-services__card__title">
                                    <a href="{{ route('events.show', $event->slug) }}">
                                        {{ $event->title }}
                                    </a>
                                </h2>

                                <p class="home-services__card__text">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    {{ $event->location }}
                                </p>

                                <p class="home-services__card__text">
                                    <i class="fas fa-users me-2"></i>
                                    Свободни места: {{ $availablePlaces }}
                                </p>

                            </div>

                            <div class="home-services__card__image">

                                <img
                                    src="{{ asset('assets/images/events/' . $event->image) }}"
                                    alt="{{ $event->title }}"
                                    loading="lazy">

                                <div class="home-services__card__hover">
                                    <a
                                        href="{{ route('events.show', $event->slug) }}"
                                        class="home-services__card__hover-link"
                                        aria-label="Виж {{ $event->title }}">

                                        <i class="icon-arrow-small-right"></i>

                                    </a>
                                </div>

                                <a
                                    href="{{ route('events.show', $event->slug) }}"
                                    class="home-services__card__link"
                                    aria-label="Виж {{ $event->title }}">

                                    <i class="icon-arrow-small-right"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12 text-center py-5">
                        <h3>В момента няма активни събития.</h3>
                        <p>Очаквайте скоро нови събития!</p>
                    </div>

                @endforelse

            </div>

        </div>
    </section>

</x-frontend>
