<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Golf Champ') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="l-header">
            <div class="l-wrapper">
                <h1 class="c-logo">
                    <a class="c-logo-link" href="{{ url('login') }}">
                        {{ config('app.name', 'golfChamp') }}
                    </a>
                </h1>
                    <!-- Right Side Of Navbar -->
                <ul class="c-ul">
                        <!-- Authentication Links -->
                    @guest
                    <li class="c-li">
                        <a class="c-link" href="{{ route('login') }}">ログイン</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="c-li">
                        <a class="c-link" href="{{ route('register') }}">新規登録</a>
                    </li>
                    @endif
                    @else
                    <li class="c-li">
                        <a class="c-link" href="{{ route('home') }}">
                            マイページ
                        </a>
                    </li>
                    <li class="c-li">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="c-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                ログアウト
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </header>

        <main class="l-main">
            @yield('content')
        </main>
    </div>
</body>
</html>
