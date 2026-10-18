<x-backend>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h3 class="mb-1">Управление на събития</h3>
            <p class="text-muted mb-0">
                Преглед и управление на всички създадени събития.
            </p>
        </div>

        <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>
            Създай събитие
        </a>
    </div>


    <!-- Events -->
    <section class="service-one-home service-one-home--service-carousel">

        <div class="row g-4">

            @forelse ($events as $event)
                <div class="col-lg-4 col-md-6 col-12">

                    <a href="{{ route('admin.events.show', $event->slug) }}" class="admin-event-card">

                        <!-- Event Image -->
                        <div class="admin-event-card__image">

                            <img src="{{ asset('assets/images/events/' . $event->image) }}" alt="{{ $event->title }}"
                                loading="lazy">

                            <!-- Status -->
                            <span
                                class="admin-event-card__status {{ $event->is_active ? 'is-active' : 'is-inactive' }}">
                                <span class="admin-event-card__status-dot"></span>
                                {{ $event->is_active ? 'Активно' : 'Неактивно' }}
                            </span>

                        </div>

                        <!-- Event Content -->
                        <div class="admin-event-card__content">

                            <div class="admin-event-card__meta">
                                <span>
                                    <i class="far fa-calendar-alt me-1"></i>
                                    {{ $event->starts_at->format('d.m.Y') }}
                                </span>

                                <span>
                                    <i class="far fa-clock me-1"></i>
                                    {{ $event->starts_at->format('H:i') }}
                                </span>
                            </div>

                            <h4 class="admin-event-card__title">
                                {{ $event->title }}
                            </h4>

                            <div class="admin-event-card__footer">

                                <span class="admin-event-card__location">
                                    <i class="fas fa-map-marker-alt me-1"></i>
                                    {{ $event->location }}
                                </span>

                                <span class="admin-event-card__arrow">
                                    <i class="fas fa-arrow-right"></i>
                                </span>

                            </div>

                        </div>

                    </a>

                </div>


            @empty

                <div class="col-12">

                    <div class="text-center py-5">

                        <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>

                        <h4>Все още няма създадени събития</h4>

                        <p class="text-muted">
                            Създайте първото си събитие, за да се появи тук.
                        </p>

                        <a href="{{ route('admin.events.create') }}" class="btn btn-primary mt-3">
                            <i class="fas fa-plus me-2"></i>
                            Създай събитие
                        </a>

                    </div>

                </div>
            @endforelse

        </div>

    </section>

</x-backend>
