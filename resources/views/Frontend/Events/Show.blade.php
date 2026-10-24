<x-frontend>

    <section class="service-details">
        <div class="container">

            <div class="row gutter-y-30">

                <!-- LEFT: Event Information -->
                <div class="col-md-12 col-lg-8">

                    <div class="service-details__content shadow">

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
                        <div class="service-sidebar__single shadow">

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
                                            <span id="availablePlaces">
                                                {{ $availablePlaces }}
                                            </span>
                                            / {{ $event->capacity }}
                                        </strong>
                                    </span>

                                </div>

                                <!-- AJAX Error Message -->
                                <div id="bookingGeneralError" class="alert alert-danger mt-3 d-none" role="alert">
                                </div>

                                @if ($canBook)

                                    <!-- AJAX Booking Form -->
                                    <form action="{{ route('events.store', $event->slug) }}" method="POST"
                                        class="event-booking-form" id="eventBookingForm">

                                        @csrf

                                        <!-- Name -->
                                        <div class="mb-3">

                                            <label for="name" class="form-label">
                                                Вашето име
                                                <span class="text-danger">*</span>
                                            </label>

                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Име и фамилия" autocomplete="name" >

                                            <div class="invalid-feedback" id="nameError"></div>

                                        </div>

                                        <!-- Email -->
                                        <div class="mb-3">

                                            <label for="email" class="form-label">
                                                Имейл адрес
                                                <span class="text-danger">*</span>
                                            </label>

                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="example@email.com" autocomplete="email" >

                                            <div class="invalid-feedback" id="emailError"></div>

                                        </div>

                                        <!-- Phone -->
                                        <div class="mb-4">

                                            <label for="phone" class="form-label">
                                                Телефон
                                                <span class="text-danger">*</span>
                                            </label>

                                            <input type="tel" name="phone" id="phone" class="form-control"
                                                placeholder="0888 123 456" autocomplete="tel" >

                                            <div class="invalid-feedback" id="phoneError"></div>

                                        </div>

                                        <!-- Submit -->
                                        <button type="submit" class="pelocis-btn pelocis-btn--black"
                                            id="bookingSubmitButton">

                                            <span id="bookingSubmitText">
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

                                        @if ($event->ends_at->isPast())
                                            Записването за това събитие е приключило.
                                        @else
                                            Всички места за това събитие са заети.
                                        @endif

                                    </div>

                                @endif

                                <!-- AJAX Booking Unavailable Message -->
                                <div id="bookingUnavailableMessage" class="alert alert-warning mt-3 mb-0 d-none">
                                    Всички места за това събитие са заети.
                                </div>

                            </div>

                        </div>

                        <!-- Event Details -->
                        <div class="service-sidebar__single shadow">

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

    <!-- SUCCESS MODAL -->
    <div class="booking-success-overlay"
        id="bookingSuccessModal"
        style="display: none;"
        aria-hidden="true">

        <div class="booking-success-modal" role="dialog" aria-modal="true" aria-labelledby="bookingSuccessTitle">

            <button type="button" class="booking-success-close" id="bookingModalClose" aria-label="Затвори">
                &times;
            </button>

            <div class="booking-success-icon">
                <i class="fas fa-check"></i>
            </div>

            <h3 id="bookingSuccessTitle">
                Успешно записване!
            </h3>

            <p id="bookingSuccessMessage"></p>

            <p class="booking-success-subtitle">
                Ще получите имейл потвърждение с информация за събитието.
            </p>

            <button type="button" class="booking-success-button" id="bookingModalConfirm">
                Разбрах
            </button>

        </div>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const form = document.getElementById('eventBookingForm');
            const submitButton = document.getElementById('bookingSubmitButton');
            const submitText = document.getElementById('bookingSubmitText');

            const generalError = document.getElementById('bookingGeneralError');
            const availablePlaces = document.getElementById('availablePlaces');
            const unavailableMessage = document.getElementById('bookingUnavailableMessage');

            const modal = document.getElementById('bookingSuccessModal');
            const modalMessage = document.getElementById('bookingSuccessMessage');
            const modalClose = document.getElementById('bookingModalClose');
            const modalConfirm = document.getElementById('bookingModalConfirm');

            let lastFocusedElement = null;

            function openSuccessModal(message) {
                lastFocusedElement = document.activeElement;
                modalMessage.textContent = message;
                modal.style.display = 'flex';
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
                modalConfirm.focus();
            }

            function closeSuccessModal() {
                modal.style.display = 'none';
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';

                if (lastFocusedElement && lastFocusedElement.isConnected) {
                    lastFocusedElement.focus();
                }
            }

            modalClose.addEventListener('click', closeSuccessModal);
            modalConfirm.addEventListener('click', closeSuccessModal);

            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    closeSuccessModal();
                }
            });

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && modal.style.display === 'flex') {
                    closeSuccessModal();
                }
            });

            function clearErrors() {
                generalError.classList.add('d-none');
                generalError.textContent = '';

                if (!form) return;

                form.querySelectorAll('.is-invalid').forEach(function(input) {
                    input.classList.remove('is-invalid');
                });

                form.querySelectorAll('.invalid-feedback').forEach(function(element) {
                    element.textContent = '';
                });
            }

            function showGeneralError(message) {
                generalError.textContent = message;
                generalError.classList.remove('d-none');
            }

            function showValidationErrors(errors) {
                Object.entries(errors).forEach(function([field, messages]) {

                    if (field === 'booking') {
                        showGeneralError(messages[0]);
                        return;
                    }

                    const input = form.elements.namedItem(field);
                    const errorElement = document.getElementById(field + 'Error');

                    if (input && errorElement) {
                        input.classList.add('is-invalid');
                        errorElement.textContent = messages[0];
                    } else {
                        showGeneralError(messages[0]);
                    }
                });
            }

            if (form) {

                form.addEventListener('submit', async function(event) {
                    event.preventDefault();

                    clearErrors();

                    submitButton.disabled = true;
                    submitText.innerHTML =
                        '<i class="fas fa-spinner fa-spin me-2"></i> Изпращане...';

                    try {
                        const response = await fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: new FormData(form)
                        });

                        const data = await response.json();

                        if (!response.ok) {

                            if (response.status === 422 && data.errors) {
                                showValidationErrors(data.errors);
                            } else {
                                showGeneralError(
                                    data.message || 'Възникна грешка. Моля, опитайте отново.'
                                );
                            }

                            return;
                        }

                        if (data.success) {

                            form.reset();

                            availablePlaces.textContent = data.available_places;

                            openSuccessModal(data.message);

                            if (Number(data.available_places) <= 0) {
                                form.classList.add('d-none');
                                unavailableMessage.classList.remove('d-none');
                            }
                        }

                    } catch (error) {
                        showGeneralError(
                            'Възникна проблем с връзката. Моля, опитайте отново.'
                        );
                    } finally {
                        submitButton.disabled = false;
                        submitText.innerHTML =
                            'Запиши се <i class="fas fa-arrow-right ms-2"></i>';
                    }
                });

                form.querySelectorAll('input').forEach(function(input) {
                    input.addEventListener('input', function() {
                        input.classList.remove('is-invalid');

                        const errorElement = document.getElementById(input.name + 'Error');

                        if (errorElement) {
                            errorElement.textContent = '';
                        }
                    });
                });
            }

        });
    </script>

</x-frontend>
