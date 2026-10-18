<x-frontend>


    <section class="service-details">
        <div class="container">

            <div class="row gutter-y-30">

                <!-- LEFT: Event Information -->
                <div class="col-md-12 col-lg-8">

                    <div class="service-details__content">

                        <!-- Event Image -->
                        {{-- <div class="service-details__thumbnail">
                            <img
                                src="{{ asset('assets/images/events/' . $event->image) }}"
                                alt="{{ $event->title }}"
                                class="img-fluid w-100">
                        </div> --}}

                        <!-- Event Title -->
                        <h3 class="service-details__title">
                            {{ $event->title }}
                        </h3>

                        <!-- Event Meta -->
                        <div class="event-details-meta mb-4">

                            <span>
                                <i class="far fa-calendar-alt"></i>
                                {{ $event->starts_at->format('d.m.Y') }}
                            </span>

                            <span>
                                <i class="far fa-clock"></i>
                                {{ $event->starts_at->format('H:i') }}
                            </span>

                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                {{ $event->location }}
                            </span>

                        </div>

                        <!-- Event Description -->
                        <div class="service-details__text event-description">
                            {!! $event->description !!}
                        </div>

                    </div>

                </div>

                <!-- RIGHT: Sidebar -->
                <div class="col-md-12 col-lg-4">

                    <div class="service-sidebar">

                        <!-- Booking Form -->
                        <div class="service-sidebar__single">

                            <div class="event-booking-card">

                                <h3 class="service-sidebar__title">
                                    Запишете се за събитието
                                </h3>

                                <!-- Price -->
                                <div class="event-booking-price">

                                    @if ($event->price > 0)
                                        <span class="event-booking-price__amount">
                                            {{ number_format($event->price, 2, ',', ' ') }} €
                                        </span>
                                    @else
                                        <span class="event-booking-price__free">
                                            Безплатно
                                        </span>
                                    @endif

                                </div>

                                <!-- Available Places -->
                                <div class="event-booking-availability">

                                    <i class="fas fa-users"></i>

                                    <span>
                                        Свободни места:
                                        <strong>
                                            {{ $availablePlaces }} / {{ $event->capacity }}
                                        </strong>
                                    </span>

                                </div>

                                <!-- Success Message -->
                                @if (session('success'))
                                    <div class="booking-success-overlay" id="bookingSuccessModal">
                                        <div class="booking-success-modal" role="dialog" aria-modal="true"
                                            aria-labelledby="bookingSuccessTitle">

                                            <button type="button"
                                                class="booking-success-close"
                                                onclick="closeBookingSuccessModal()"
                                                aria-label="Затвори">
                                                &times;
                                            </button>

                                            <div class="booking-success-icon">
                                                <i class="fas fa-check"></i>
                                            </div>

                                            <h3 id="bookingSuccessTitle">Успешно записване!</h3>

                                            <p>{{ session('success') }}</p>

                                            <p class="booking-success-subtitle">
                                                Благодарим Ви за доверието!
                                            </p>

                                            <button type="button" class="booking-success-button"
                                                onclick="closeBookingSuccessModal()">
                                                Разбрах
                                            </button>

                                        </div>
                                    </div>
                                @endif

                                <!-- Validation Errors -->
                                @if ($errors->any())

                                    <div class="alert alert-danger mt-3">

                                        <ul class="mb-0 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>

                                    </div>

                                @endif

                                @if ($canBook)

                                    <!-- Booking Form -->
                                    <form action="{{ route('events.store', $event->slug) }}" method="POST"
                                        class="event-booking-form">

                                        @csrf

                                        <!-- Name -->
                                        <div class="mb-3">

                                            <label for="name" class="form-label">
                                                Вашето име
                                                <span class="text-danger">*</span>
                                            </label>

                                            <input type="text" name="name" id="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}" placeholder="Име и фамилия"
                                                autocomplete="name" required>

                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>

                                        <!-- Email -->
                                        <div class="mb-3">

                                            <label for="email" class="form-label">
                                                Имейл адрес
                                                <span class="text-danger">*</span>
                                            </label>

                                            <input type="email" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" placeholder="example@email.com"
                                                autocomplete="email" required>

                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>

                                        <!-- Phone -->
                                        <div class="mb-4">

                                            <label for="phone" class="form-label">
                                                Телефон
                                                <span class="text-danger">*</span>
                                            </label>

                                            <input type="tel" name="phone" id="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                value="{{ old('phone') }}" placeholder="0888 123 456"
                                                autocomplete="tel" required>

                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>

                                        <!-- Submit -->
                                        <button type="submit" class="thm-btn w-100">

                                            <span>
                                                Запиши се
                                                <i class="fas fa-arrow-right ms-2"></i>
                                            </span>

                                        </button>

                                        <p class="event-booking-note mt-3 mb-0">
                                            <i class="fas fa-lock me-1"></i>
                                            Не е необходима регистрация.
                                        </p>

                                    </form>
                                @else
                                    <!-- Booking Unavailable -->
                                    <div class="alert alert-warning mt-3 mb-0">

                                        @if ($event->starts_at->isPast())
                                            Записването за това събитие е приключило.
                                        @else
                                            Всички места за това събитие са заети.
                                        @endif

                                    </div>

                                @endif

                            </div>

                        </div>

                        <!-- Event Details -->
                        <div class="service-sidebar__single">

                            <h3 class="service-sidebar__title">
                                Информация за събитието
                            </h3>

                            <ul class="list-unstyled event-info-list">

                                <li>
                                    <i class="far fa-calendar-alt"></i>

                                    <div>
                                        <strong>Дата</strong>
                                        <span>
                                            {{ $event->starts_at->format('d.m.Y') }}
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <i class="far fa-clock"></i>

                                    <div>
                                        <strong>Час</strong>
                                        <span>
                                            {{ $event->starts_at->format('H:i') }}
                                            -
                                            {{ $event->ends_at->format('H:i') }}
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fas fa-map-marker-alt"></i>

                                    <div>
                                        <strong>Място</strong>
                                        <span>{{ $event->location }}</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fas fa-user-tie"></i>

                                    <div>
                                        <strong>Водещ</strong>
                                        <span>{{ $event->host }}</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fas fa-hourglass-half"></i>

                                    <div>
                                        <strong>Продължителност</strong>
                                        <span>{{ $event->duration }} минути</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fas fa-tag"></i>

                                    <div>
                                        <strong>Вид събитие</strong>
                                        <span>{{ $event->type }}</span>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    @push('styles')
        <style>
            .event-details-meta {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                color: #777;
                font-size: 15px;
            }

            .event-details-meta span {
                display: inline-flex;
                align-items: center;
                gap: 8px;
            }

            .event-details-meta i {
                color: #8a6cbd;
            }

            .event-description img {
                max-width: 100%;
                height: auto;
            }

            .event-booking-card {
                background: #fff;
            }

            .event-booking-price {
                margin-bottom: 18px;
            }

            .event-booking-price__amount {
                font-size: 30px;
                font-weight: 700;
                color: #222;
            }

            .event-booking-price__free {
                font-size: 24px;
                font-weight: 700;
                color: #198754;
            }

            .event-booking-availability {
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 14px;
                background: #f5f6f8;
                border-radius: 10px;
                font-size: 14px;
                margin-bottom: 22px;
            }

            .event-booking-availability i {
                color: #8a6cbd;
            }

            .event-booking-form .form-label {
                font-size: 14px;
                font-weight: 600;
                color: #333;
                margin-bottom: 7px;
            }

            .event-booking-form .form-control {
                width: 100%;
                min-height: 48px;
                padding: 12px 15px;
                border: 1px solid #e2e5ea;
                border-radius: 8px;
                background: #fff;
                font-size: 14px;
                color: #222;
            }

            .event-booking-form .form-control:focus {
                border-color: #8a6cbd;
                box-shadow: 0 0 0 3px rgba(138, 108, 189, 0.12);
            }

            .event-booking-note {
                text-align: center;
                font-size: 12px;
                color: #888;
            }

            .event-info-list {
                margin: 0;
            }

            .event-info-list li {
                display: flex;
                align-items: flex-start;
                gap: 15px;
                padding: 15px 0;
                border-bottom: 1px solid #eee;
            }

            .event-info-list li:last-child {
                border-bottom: none;
            }

            .event-info-list li>i {
                color: #8a6cbd;
                font-size: 17px;
                margin-top: 5px;
                width: 20px;
            }

            .event-info-list li div {
                display: flex;
                flex-direction: column;
                gap: 4px;
            }

            .event-info-list li strong {
                color: #222;
                font-size: 14px;
            }

            .event-info-list li span {
                color: #777;
                font-size: 14px;
            }
        </style>
    @endpush

</x-frontend>
