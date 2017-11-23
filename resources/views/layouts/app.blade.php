<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="#" alt="DevMarketer Logo"/>
                    </a>

                    <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
                </div>
                <div class="navbar-end">
                @if (Auth::guest()) 
                        <a href="{{route('login')}}" class="navbar-item  is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Join The Community</a>  
                      @else 
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                        Hey Lakshman
                        </a>

                        <div class="navbar-dropdown dropdown-menu">
                        <a href="#" class="navbar-item">
                        <span class"icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></icon></span>Profiles</a>
                        <a href="#" class="navbar-item">Notifications</a>
                        <a href="#" class="navbar-item">Settings</a></li>
                        <a class="navbar-divider"/>
                        <a href="#" class="navbar-item">Logout</a></li>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
