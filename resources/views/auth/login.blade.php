
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Вход | Mira Psychology</title>

    <meta name="description"
        content="Влезте в своя профил, за да управлявате резервациите и настройките на акаунта си.">

    <meta name="robots" content="noindex,nofollow">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;500;600;700&family=Saira:wght@400;500;600;700&family=Solway:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pelocis.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">



</head>

<body>

    <div class="auth log-register-form">

        <div class="auth__container">

            <!-- LEFT SIDE -->
            <div class="auth__side auth__side--left">

                <div class="auth__form">

                    <!-- Logo and Welcome -->
                    <div class="text-center">

                        <div class="auth__logo">
                            <x-logo width="200" />
                        </div>

                        <h1 class="auth__title">
                            Добре дошли отново!
                        </h1>

                        <p class="auth__description">
                            Влезте в профила си и продължете оттам,
                            докъдето сте стигнали.
                        </p>

                    </div>

                    <!-- PELOCIS LOGIN FORM -->
                    <div class="login-page__wrap">

                        <form action="{{ route('login') }}"
                              method="POST"
                              class="login-page__form">

                            @csrf

                            <!-- Email -->
                            <div class="login-page__form-input-box">

                                <label for="formEmail" class="auth__field-label">
                                    Имейл адрес
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    id="formEmail"
                                    placeholder="Имейл адрес *"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    required
                                >

                                @error('email')
                                    <p class="auth__error">{{ $message }}</p>
                                @enderror

                            </div>

                            <!-- Password -->
                            <div class="login-page__form-input-box">

                                <label for="formPassword" class="auth__field-label">
                                    Парола
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    id="formPassword"
                                    placeholder="Парола *"
                                    autocomplete="current-password"
                                    required
                                >

                                @error('password')
                                    <p class="auth__error">{{ $message }}</p>
                                @enderror

                            </div>

                            <!-- Remember Me and Forgot Password -->
                            <div class="login-page__checked-box">

                                <input
                                    type="checkbox"
                                    name="remember"
                                    id="save-data"
                                    value="1"
                                    {{ old('remember') ? 'checked' : '' }}
                                >

                                <label for="save-data">
                                    <span></span>
                                    Запомни ме
                                </label>

                                @if (Route::has('password.request'))

                                    <div class="login-page__form-forgot-password">

                                        <a href="{{ route('password.request') }}">
                                            Забравена парола?
                                        </a>

                                    </div>

                                @endif

                            </div>

                            <!-- Submit -->
                            <div class="login-page__form-btn-box">

                                <button type="submit" class="pelocis-btn">
                                    <span>Вход</span>
                                </button>

                            </div>

                            <!-- Register -->
                            @if (Route::has('register'))

                                <p class="auth__signup">

                                    Нямате акаунт?

                                    <a href="{{ route('register') }}">
                                        Регистрирайте се
                                    </a>

                                </p>

                            @endif

                        </form>

                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div
                class="auth__side auth__side--right"
                style="background-image: url('{{ asset('assets/images/auth/login-illustrate.png') }}');">
            </div>

        </div>

    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
