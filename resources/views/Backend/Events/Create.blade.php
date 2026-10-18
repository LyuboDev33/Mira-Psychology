<x-backend>

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h3 class="mb-1">Създаване на събитие</h3>
            <p class="text-muted mb-0">
                Попълнете информацията за новото събитие.
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

    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row g-4">

            <!-- Title -->
            <div class="col-lg-4">
                <label for="title" class="form-label">
                    Заглавие <span class="text-danger">*</span>
                </label>

                <input type="text" name="title" id="title"
                    class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                    placeholder="Въведете заглавие" required>

                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Image -->
            <div class="col-lg-4">
                <label for="image" class="form-label">
                    Снимка <span class="text-danger">*</span>
                </label>

                <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/webp"
                    class="form-control @error('image') is-invalid @enderror" required>

                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Location -->
            <div class="col-lg-4">
                <label for="location" class="form-label">
                    Локация <span class="text-danger">*</span>
                </label>

                <input type="text" name="location" id="location"
                    class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}"
                    placeholder="Например: София" required>

                @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Capacity -->
            <div class="col-lg-4">
                <label for="capacity" class="form-label">
                    Брой места <span class="text-danger">*</span>
                </label>

                <input type="number" name="capacity" id="capacity" min="1" step="1"
                    class="form-control @error('capacity') is-invalid @enderror" value="{{ old('capacity') }}"
                    placeholder="Например: 15" required>

                @error('capacity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Host -->
            <div class="col-lg-4">
                <label for="host" class="form-label">
                    Водещ <span class="text-danger">*</span>
                </label>

                <input type="text" name="host" id="host"
                    class="form-control @error('host') is-invalid @enderror" value="{{ old('host') }}"
                    placeholder="Име на водещия" required>

                @error('host')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Starts At -->
            <div class="col-lg-4">
                <label for="starts_at" class="form-label">
                    Начало на събитието <span class="text-danger">*</span>
                </label>

                <input type="datetime-local" name="starts_at" id="starts_at"
                    class="form-control @error('starts_at') is-invalid @enderror" value="{{ old('starts_at') }}"
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

                <input type="datetime-local" name="ends_at" id="ends_at"
                    class="form-control @error('ends_at') is-invalid @enderror" value="{{ old('ends_at') }}" required>

                @error('ends_at')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Duration -->
            <div class="col-lg-4">
                <label for="duration" class="form-label">
                    Продължителност (минути) <span class="text-danger">*</span>
                </label>

                <input type="number" name="duration" id="duration" min="1" step="1"
                    class="form-control @error('duration') is-invalid @enderror" value="{{ old('duration') }}"
                    placeholder="Например: 120" required>

                @error('duration')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Price -->
            <div class="col-lg-4">
                <label for="price" class="form-label">
                    Цена (€) <span class="text-danger">*</span>
                </label>

                <input type="number" name="price" id="price" min="0" step="0.01"
                    class="form-control @error('price') is-invalid @enderror" value="{{ old('price', 0) }}"
                    placeholder="0.00" required>

                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Type -->
            <div class="col-lg-4">
                <label for="type" class="form-label">
                    Вид събитие <span class="text-danger">*</span>
                </label>

                <input type="text" name="type" id="type"
                    class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}"
                    placeholder="Например: Групова терапия" required>

                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Is Active -->
            <div class="col-lg-4">
                <label for="is_active" class="form-label">
                    Статус <span class="text-danger">*</span>
                </label>

                <select name="is_active" id="is_active" class="form-select @error('is_active') is-invalid @enderror"
                    required>

                    <option value="1" @selected(old('is_active', '1') == '1')>
                        Активно
                    </option>

                    <option value="0" @selected(old('is_active') == '0')>
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

                <textarea name="description" id="description" rows="12"
                    class="form-control @error('description') is-invalid @enderror" placeholder="Въведете описание на събитието...">{{ old('description') }}</textarea>

                @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit -->
            <div class="col-12">
                <div class="d-flex justify-content-end gap-3 mt-3">

                    <a href="{{ route('admin.events.index') }}" class="btn btn-outline-secondary">
                        Отказ
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>
                        Създай събитие
                    </button>

                </div>
            </div>

        </div>
    </form>




    <!-- Place the following <script>
        and < textarea > tags your HTML 's <body> -->
    <script >
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
    </script>


</x-backend>
