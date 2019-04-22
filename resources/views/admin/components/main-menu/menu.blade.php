<ul class="main-menu">
    <li class="main-menu__item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard') }}" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home main-menu__icon"><path
                        d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline
                        points="9 22 9 12 15 12 15 22"></polyline></svg>Главная
        </a>
    </li>
    <li class="main-menu__item separator">Контент</li>
    <li class="main-menu__item {{ Request::routeIs('admin.news.*') ? 'active' : '' }}">
        <a href="{{ route('admin.news.index') }}" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-folder main-menu__icon"><path
                            d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Новости
        </a>

        <ul>
            <li class="main-menu__item {{ Request::routeIs('admin.news.index') ? 'active' : '' }}">
                <a href="{{ route('admin.news.index') }}" class="main-menu__link">
                    <span class="main-menu__icon"></span>Все новости
                </a>
            </li>
            <li class="main-menu__item {{ Request::routeIs('admin.news.category') ? 'active' : '' }}">
                <a href="{{ route('admin.news.category') }}" class="main-menu__link">
                    <span class="main-menu__icon"></span>Категории
                </a>
            </li>
        </ul>

    </li>
    <li class="main-menu__item">
        <a href="#" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book main-menu__icon"><path
                        d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path
                        d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>Статьи
        </a>
        <ul>
            <li class="main-menu__item ">
                <a href="{{ route('admin.news.category') }}" class="main-menu__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-right main-menu__icon"><polyline points="15 10 20 15 15 20"></polyline><path d="M4 4v7a4 4 0 0 0 4 4h12"></path></svg>Категории</a></li>
        </ul>
    </li>
    <li class="main-menu__item">
        <a href="#" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square main-menu__icon"><path
                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>Блоги
        </a>
        <ul>
            <li class="main-menu__item ">
                <a href="{{ route('admin.news.category') }}" class="main-menu__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-right main-menu__icon"><polyline points="15 10 20 15 15 20"></polyline><path d="M4 4v7a4 4 0 0 0 4 4h12"></path></svg>Категории</a></li>
        </ul>
    </li>
    <li class="main-menu__item">
        <a href="#" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase main-menu__icon">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>Компании
        </a>
        <ul>
            <li class="main-menu__item ">
                <a href="{{ route('admin.news.category') }}" class="main-menu__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-right main-menu__icon"><polyline points="15 10 20 15 15 20"></polyline><path d="M4 4v7a4 4 0 0 0 4 4h12"></path></svg>Категории</a></li>
        </ul>
    </li>
    <li class="main-menu__item">
        <a href="#" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file main-menu__icon"><path
                        d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline
                        points="13 2 13 9 20 9"></polyline></svg>Страницы
        </a>
    </li>
    <li class="main-menu__item separator">Пользователи и группы</li>
    <li class="main-menu__item">
        <a href="#" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users main-menu__icon"><path
                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path
                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>Пользователи
        </a>
    </li>
    <li class="main-menu__item">
        <a href="#" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield main-menu__icon"><path
                        d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Группы
        </a>
    </li>
    <li class="main-menu__item separator">Управление</li>
    <li class="main-menu__item">
        <a href="#" class="main-menu__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 30" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-settings main-menu__icon"><circle cx="12" cy="12" r="3"></circle>
                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Параметры
        </a>
    </li>
</ul>