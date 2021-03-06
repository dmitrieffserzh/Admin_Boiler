<header class="header">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="header__content">
            <a class="header__logo" href="{{ url('/') }}">
                {{-- config('app.name', 'Laravel') --}}Logistam</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">
                            Новости
                        </a>
                    </li>

                 <!--   <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">
                            Статьи
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">
                            События
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">
                            Компании
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">
                            Блоги
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">
                            IT-решения
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">
                            Сервисы
                        </a>
                    </li>-->
                    <li class="nav-item">
                        {{--<a class="nav-link" href="{{ route('users.list') }}">--}}
                            Пользователи
                        </a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link is-modal-ajax" href="{{ route('login') }}" data-url="{{ route('login') }}" data-title="@lang('auth.login')">@lang('auth.login')</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">@lang('auth.register')</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.profile', Auth::user()->route ?? Auth::user()->username) }}">
                                {{ Auth::user()->username }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                @lang('auth.logout')
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>