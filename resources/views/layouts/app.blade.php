<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Weeeb') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Weeeb') }}
                </a>
                <button data-toggle="collapse" data-target="#navbarResponsive"
                    class="navbar-toggler navbar-toggler-right" type="button"
                    data-toogle="collapse" aria-controls="navbarResponsive"
                    aria-expanded="false"aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                     <ul class="nav navbar-nav text-uppercase mx-auto">
                        <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">services</a></li>
                        <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/serch') }}">connect</a></li>
                        <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">how to</a></li>
                        <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">team</a></li>
                        <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/boards') }}">event</a></li>
                        <li class="nav-item "><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">contact</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{ url('/mypages.edit')}}">mypage</a></li>
                     </ul>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('ユーザー登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="my-xl-5 py-xl-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
