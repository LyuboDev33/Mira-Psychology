
<x-backend>

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h3 class="mb-1">Редактиране на събитие</h3>
            <p class="text-muted mb-0">
                Редактирайте информацията за събитието и прегледайте записванията.
            </p>
        </div>

        <a href="{{ route('admin.events.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>
            Назад
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Моля, коригирайте следните грешки:</strong>

            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Затвори"></button>
        </div>
    @endif

    <!-- EVENT EDIT FORM -->
    <form action="{{ route('admin.events.update', $event->slug) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="row g-4">

            <!-- Title -->
            <div class="col-lg-4">
                <label for="title" class="form-label">
                    Заглавие <span class="text-danger">*</span>
                </label>

                <input type="text"
                       name="title"
                       id="title"
                       class="form-control @error('title') is-invalid @enderror"
                       value="{{ old('title', $event->title) }}"
                       required>

                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="col-lg-4">
                <label for="image" class="form-label">
                    Нова снимка
                </label>

                <input type="file"
                       name="image"
                       id="image"
                       accept="image/jpeg,image/png,image/webp"
                       class="form-control @error('image') is-invalid @enderror">

                <small class="text-muted">
                    Оставете празно, за да запазите текущата снимка. Максимум 1 MB.
                </small>

                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Current Image -->
            <div class="col-lg-4">
                <label class="form-label d-block">Текуща снимка</label>

                @if ($event->image)
                    <img src="{{ asset('assets/images/events/' . $event->image) }}"
                         alt="{{ $event->title }}"
                         class="img-fluid rounded border"
                         style="max-height: 160px; object-fit: cover;">
                @else
                    <p class="text-muted">Няма качена снимка.</p>
                @endif
            </div>

            <!-- Location -->
            <div class="col-lg-4">
                <label for="location" class="form-label">
                    Локация <span class="text-danger">*</span>
                </label>

                <input type="text"
                       name="location"
                       id="location"
                       class="form-control @error('location') is-invalid @enderror"
                       value="{{ old('location', $event->location) }}"
                       required>

                @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Capacity -->
            <div class="col-lg-4">
                <label for="capacity" class="form-label">
                    Брой места <span class="text-danger">*</span>
                </label>

                <input type="number"
                       name="capacity"
                       id="capacity"
                       min="1"
                       step="1"
                       class="form-control @error('capacity') is-invalid @enderror"
                       value="{{ old('capacity', $event->capacity) }}"
                       required>

                @error('capacity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Host -->
            <div class="col-lg-4">
                <label for="host" class="form-label">
                    Водещ <span class="text-danger">*</span>
                </label>

                <input type="text"
                       name="host"
                       id="host"
                       class="form-control @error('host') is-invalid @enderror"
                       value="{{ old('host', $event->host) }}"
                       required>

                @error('host')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Starts At -->
            <div class="col-lg-4">
                <label for="starts_at" class="form-label">
                    Начало на събитието <span class="text-danger">*</span>
                </label>

                <input type="datetime-local"
                       name="starts_at"
                       id="starts_at"
                       class="form-control @error('starts_at') is-invalid @enderror"
                       value="{{ old('starts_at', $event->starts_at->format('Y-m-d\TH:i')) }}"
                       required>

                @error('starts_at')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Ends At -->
            <div class="col-lg-4">
                <label for="ends_at" class="form-label">
                    Край на събитието <span class="text-danger">*</span>
                </label>

                <input type="datetime-local"
                       name="ends_at"
                       id="ends_at"
                       class="form-control @error('ends_at') is-invalid @enderror"
                       value="{{ old('ends_at', $event->ends_at->format('Y-m-d\TH:i')) }}"
                       required>

                @error('ends_at')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Duration -->
            <div class="col-lg-4">
                <label for="duration" class="form-label">
                    Продължителност (минути) <span class="text-danger">*</span>
                </label>

                <input type="number"
                       name="duration"
                       id="duration"
                       min="1"
                       step="1"
                       class="form-control @error('duration') is-invalid @enderror"
                       value="{{ old('duration', $event->duration) }}"
                       required>

                @error('duration')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Price -->
            <div class="col-lg-4">
                <label for="price" class="form-label">
                    Цена (€) <span class="text-danger">*</span>
                </label>

                <input type="number"
                       name="price"
                       id="price"
                       min="0"
                       step="0.01"
                       class="form-control @error('price') is-invalid @enderror"
                       value="{{ old('price', $event->price) }}"
                       required>

                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Type -->
            <div class="col-lg-4">
                <label for="type" class="form-label">
                    Вид събитие <span class="text-danger">*</span>
                </label>

                <input type="text"
                       name="type"
                       id="type"
                       class="form-control @error('type') is-invalid @enderror"
                       value="{{ old('type', $event->type) }}"
                       required>

                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Is Active -->
            <div class="col-lg-4">
                <label for="is_active" class="form-label">
                    Статус <span class="text-danger">*</span>
                </label>

                <select name="is_active"
                        id="is_active"
                        class="form-select @error('is_active') is-invalid @enderror"
                        required>

                    <option value="1"
                        @selected(old('is_active', (int) $event->is_active) == 1)>
                        Активно
                    </option>

                    <option value="0"
                        @selected(old('is_active', (int) $event->is_active) == 0)>
                        Неактивно
                    </option>

                </select>

                @error('is_active')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="col-lg-12">
                <label for="description" class="form-label">
                    Описание <span class="text-danger">*</span>
                </label>

                <textarea name="description"
                          id="description"
                          rows="12"
                          class="form-control @error('description') is-invalid @enderror">{{ old('description', $event->description) }}</textarea>

                @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit -->
            <div class="col-12">
                <div class="d-flex justify-content-end gap-3 mt-3">

                    <a href="{{ route('admin.events.index') }}"
                       class="btn btn-outline-secondary">
                        Отказ
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>
                        Запази промените
                    </button>

                </div>
            </div>

        </div>

    </form>

    <hr>

    <!-- EVENT BOOKINGS TABLE -->
    <div class="card border-0 shadow-sm mt-5">

        <div class="card-header bg-white py-4">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                <div>
                    <h4 class="mb-1">
                        <i class="fas fa-users me-2 text-primary"></i>
                        Записани участници
                    </h4>

                    <p class="text-muted mb-0">
                        Списък с всички записвания за това събитие.
                    </p>
                </div>

                <div class="d-flex gap-2 flex-wrap">

                    <span class="badge bg-primary fs-6">
                        Записани: {{ $event->bookings->count() }}
                    </span>

                    <span class="badge bg-secondary fs-6">
                        Капацитет: {{ $event->capacity }}
                    </span>

                    @if ($event->bookings->count() >= $event->capacity)
                        <span class="badge bg-danger fs-6">
                            Няма свободни места
                        </span>
                    @else
                        <span class="badge bg-success fs-6">
                            Свободни: {{ max(0, $event->capacity - $event->bookings->count()) }}
                        </span>
                    @endif

                </div>

            </div>

        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="ps-4">#</th>
                            <th scope="col">Име и фамилия</th>
                            <th scope="col">Имейл адрес</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Дата на записване</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($event->bookings as $booking)

                            <tr>

                                <!-- Booking ID -->
                                <td class="ps-4">
                                    <span class="text-muted">
                                        #{{ $booking->id }}
                                    </span>
                                </td>

                                <!-- Name -->
                                <td>
                                    <div class="d-flex align-items-center gap-2">

                                        <div class="bg-light rounded-circle d-flex align-items-center justify-content-center"
                                             style="width: 38px; height: 38px; flex-shrink: 0;">
                                            <i class="fas fa-user text-secondary"></i>
                                        </div>

                                        <span class="fw-semibold">
                                            {{ $booking->name }}
                                        </span>

                                    </div>
                                </td>

                                <!-- Email -->
                                <td>
                                    <a href="mailto:{{ $booking->email }}"
                                       class="text-decoration-none">
                                        {{ $booking->email }}
                                    </a>
                                </td>

                                <!-- Phone -->
                                <td>
                                    <a href="tel:{{ $booking->phone }}"
                                       class="text-decoration-none text-dark">
                                        {{ $booking->phone }}
                                    </a>
                                </td>

                                <!-- Registration Date -->
                                <td>
                                    <div class="d-flex flex-column">

                                        <span class="fw-medium">
                                            {{ $booking->created_at->format('d.m.Y') }}
                                        </span>

                                        <small class="text-muted">
                                            {{ $booking->created_at->format('H:i') }} ч.
                                        </small>

                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="text-center py-5">

                                    <div class="text-muted">

                                        <i class="fas fa-user-slash fa-3x mb-3 opacity-50"></i>

                                        <h5 class="mb-2">
                                            Все още няма записани участници
                                        </h5>

                                        <p class="mb-0">
                                            Когато някой се запише за събитието,
                                            информацията ще се появи тук.
                                        </p>

                                    </div>

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        @if ($event->bookings->isNotEmpty())

            <div class="card-footer bg-white py-3">

                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

                    <small class="text-muted">
                        Общо записвания:
                        <strong>{{ $event->bookings->count() }}</strong>
                    </small>

                    <small class="text-muted">
                        Събитие:
                        <strong>{{ $event->title }}</strong>
                    </small>

                </div>

            </div>

        @endif

    </div>

    @push('scripts')
        <script>
            tinymce.init({
                selector: '#description',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat'
            });
        </script>
    @endpush

</x-backend>
