
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Регистрация | Mira Psychology</title>

    <meta name="description"
        content="Създайте своя профил в Mira Psychology, за да управлявате резервациите и настройките на акаунта си.">

    <meta name="robots" content="noindex,nofollow">

    <meta property="og:title" content="Регистрация | Mira Psychology">
    <meta property="og:description"
        content="Създайте своя профил за лесно управление на резервациите.">
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;500;600;700&family=Saira:wght@400;500;600;700&family=Solway:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/css/pelocis.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/css/auth.css') }}">

</head>

<body>

    <div class="auth log-register-form">

        <div class="auth__container">

            <!-- LEFT SIDE -->
            <div class="auth__side auth__side--left">

                <div class="auth__form">

                    <!-- Logo -->
                    <div class="text-center">

                        <div class="auth__logo">
                            <x-logo width="200" />
                        </div>

                        <h1 class="auth__title">
                            Създайте профил
                        </h1>

                    </div>

                    <!-- Registration Form -->
                    <div class="login-page__wrap">

                        <form action="{{ route('register') }}"
                            method="POST"
                            class="login-page__form">

                            @csrf

                            <!-- Name -->
                            <div class="mb-4">

                                <label for="formName"
                                    class="auth__field-label d-block mb-2">
                                    Име
                                </label>

                                <div class="login-page__form-input-box">

                                    <input
                                        type="text"
                                        name="name"
                                        id="formName"
                                        class="d-block w-100"
                                        placeholder="Вашето име *"
                                        value="{{ old('name') }}"
                                        autocomplete="name"
                                        autofocus
                                        required>

                                </div>

                                @error('name')
                                    <p class="auth__error">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <!-- Email -->
                            <div class="mb-4">

                                <label for="formEmail"
                                    class="auth__field-label d-block mb-2">
                                    Имейл адрес
                                </label>

                                <div class="login-page__form-input-box">

                                    <input
                                        type="email"
                                        name="email"
                                        id="formEmail"
                                        class="d-block w-100"
                                        placeholder="Имейл адрес *"
                                        value="{{ old('email') }}"
                                        autocomplete="email"
                                        required>

                                </div>

                                @error('email')
                                    <p class="auth__error">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <!-- Password -->
                            <div class="mb-4">

                                <label for="formPassword"
                                    class="auth__field-label d-block mb-2">
                                    Парола
                                </label>

                                <div class="login-page__form-input-box">

                                    <input
                                        type="password"
                                        name="password"
                                        id="formPassword"
                                        class="d-block w-100"
                                        placeholder="Парола *"
                                        autocomplete="new-password"
                                        required>

                                </div>

                                @error('password')
                                    <p class="auth__error">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">

                                <label for="formPasswordConfirmation"
                                    class="auth__field-label d-block mb-2">
                                    Потвърдете паролата
                                </label>

                                <div class="login-page__form-input-box">

                                    <input
                                        type="password"
                                        name="password_confirmation"
                                        id="formPasswordConfirmation"
                                        class="d-block w-100"
                                        placeholder="Повторете паролата *"
                                        autocomplete="new-password"
                                        required>

                                </div>

                                @error('password_confirmation')
                                    <p class="auth__error">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <!-- Submit -->
                            <div class="login-page__form-btn-box">

                                <button type="submit"
                                    class="pelocis-btn w-100">

                                    <span class="justify-content-center">
                                        Регистрация
                                    </span>

                                </button>

                            </div>

                            <!-- Login Link -->
                            <p class="auth__signup text-center mt-4">

                                Вече имате акаунт?

                                <a href="{{ route('login') }}">
                                    Влезте оттук
                                </a>

                            </p>

                        </form>

                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="auth__side auth__side--right"
                style="background-image: url('{{ asset('assets/images/auth/register-illustrate.jpg') }}');">
            </div>

        </div>

    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
