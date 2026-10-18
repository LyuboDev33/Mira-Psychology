<!-- Странично меню -->
<aside class="dashboard-sidebar" id="dashboardSidebar" aria-label="Навигация на таблото">
    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="dashboard-brand">
            <span class="dashboard-brand-mark"><i class="fas fa-layer-group"></i></span>
            <span>Табло</span>
        </a>
        <button class="dashboard-close-button" id="dashboardClose" type="button" aria-label="Затвори менюто">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <div class="dashboard-nav-label">Основно меню</div>
    <nav class="dashboard-nav">
        <a href="{{ route('dashboard') }}"
            class="dashboard-nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
            @if (request()->routeIs('dashboard')) aria-current="page" @endif>
            <i class="fas fa-th-large"></i>Табло
        </a>

        <a href="{{ route('admin.events.index') }}"
            class="dashboard-nav-link {{ request()->routeIs('admin.events.*') ? 'active' : '' }}"
            @if (request()->routeIs('admin.events.*')) aria-current="page" @endif>
            <i class="fas fa-calendar-alt"></i>Създаване на групи
        </a>
    </nav>

    <div class="dashboard-nav-label">Акаунт</div>
    <nav class="dashboard-nav">
        <a href="/profile" class="dashboard-nav-link"><i class="fas fa-user-circle"></i> Моят профил</a>
    </nav>

    <div class="dashboard-sidebar-bottom">
        <nav class="dashboard-nav">
            <a href="/" class="dashboard-nav-link"><i class="fas fa-arrow-left"></i> Обратно към сайта</a>
            <!-- Заменете с Laravel форма/маршрут за изход, когато е необходимо. -->
        </nav>
    </div>
</aside>
