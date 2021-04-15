<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Compass') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                <a class="navbar-brand" href="/{{app()->getLocale()}}/">
                   Compass
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        @if (Auth::user())
                            <li class="nav-item">
                                <a class="nav-link" href="/{{app()->getLocale()}}/myprofile/{{Auth::user()->id}}">
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if (Auth::user())
                                        {{ __('Share with us!') }}
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/{{app()->getLocale()}}/myprofile/items/car/add_new_car">
                                        @if (Auth::user())
                                           {{__('New Car')}}
                                        @endif
                                    </a>
                                    <a class="dropdown-item" href="/{{app()->getLocale()}}/myprofile/items/office/add_new_office">
                                        @if (Auth::user())
                                            {{__('New Property')}}
                                        @endif
                                    </a>
                                    <a class="dropdown-item" href="/{{app()->getLocale()}}/myprofile/items/boat/add_new_boat">
                                        @if (Auth::user())
                                            {{__('New Boat')}}
                                        @endif
                                    </a>
                                </div>
                            </li>
                        @endif
                            @if (Auth::user())
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @if (Auth::user())
                                            {{ __('Followed providers') }}
                                        @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/{{app()->getLocale()}}/followed_car">
                                            @if (Auth::user())
                                                {{__('Cars')}}
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="/{{app()->getLocale()}}/followed_office">
                                            @if (Auth::user())
                                                {{__('Properties')}}
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="/{{app()->getLocale()}}/followed_boat">
                                            @if (Auth::user())
                                                {{__('Boats')}}
                                            @endif
                                        </a>
                                    </div>
                                </li>

                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="/{{app()->getLocale()}}/registered_users">
                                    {{ __('Registered users') }}
                                </a>
                            </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('LAN') }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/en">
                                        EN
                                </a>
                                <a class="dropdown-item" href="/hu">
                                        HU
                                </a>
                            </div>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login',app()->getLocale()) }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register',app()->getLocale()) }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if (Auth::user())
                                        {{__('Settings')}}
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/{{app()->getLocale()}}/myprofile/{{Auth::user()->id}}/edit">
                                    @if (Auth::user())
                                        {{__('Edit my profile')}}
                                    @endif
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout',app()->getLocale()) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">
            {{__('Made by: Henrik Horváth')}}<br>
            <a href="https://github.com/Mehii/Compass">Github</a>
        </div>
    </footer>

    @yield('jquery')
    <script src="{{ asset('js/select2.js') }}" defer></script>
    <script src="{{ asset('js/select.js') }}" defer></script>
    <script src="{{ asset('js/index_for.js') }}" defer></script>
    <script src="{{ asset('js/modal.js') }}" defer></script>
    @yield('javascript')
</body>
</html>
