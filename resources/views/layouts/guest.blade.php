{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }} ">
    @livewireStyles
</head>
<body class="home-page home-01 ">


       <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+123) 456 789" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>

                                <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="#"><span class="img label-before"><img
                                                src="{{asset('assets/images/lang-en.png')}}" alt="lang-en"></span>English<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu lang">
                                        <li class="menu-item"><a title="hungary" href="#"><span
                                                    class="img label-before"><img src="{{asset('assets/images/lang-hun.png')}}"
                                                        alt="lang-hun"></span>Hungary</a></li>
                                        <li class="menu-item"><a title="german" href="#"><span
                                                    class="img label-before"><img src="{{asset('assets/images/lang-ger.png')}}"
                                                        alt="lang-ger"></span>German</a></li>
                                        <li class="menu-item"><a title="french" href="#"><span
                                                    class="img label-before"><img src="{{asset('assets/images/lang-fra.png')}}"
                                                        alt="lang-fre"></span>French</a></li>
                                        <li class="menu-item"><a title="canada" href="#"><span
                                                    class="img label-before"><img src="{{asset('assets/images/lang-can.png')}}"
                                                        alt="lang-can"></span>Canada</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                        </li>
                                    </ul>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->user_type === 'ADM')
                                            <li class="menu-item menu-item-has-children parent">
                                                <a title="My Account" href="#">My Account {{ Auth::user()->name }}<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency">
                                                    <li class="menu-item">
                                                        <a title="Dashbord" href="{{route('admin.dashboard')}}">Dashbord</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Dashbord" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                                                    </li>
                                                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                        @csrf

                                                    </form>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="menu-item menu-item-has-children parent">
                                                <a title="My Account" href="#">My Account {{ Auth::user()->name }}<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency">
                                                    <li class="menu-item">
                                                        <a title="Dashbord" href="{{route('user.dashboard')}}">Dashbord</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Dashbord" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                                                    </li>
                                                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @endif
                                @else
                                <li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Login</a></li>
                                <li class="menu-item"><a title="Register or Login" href="{{route('register')}}">Register</a></li>
                                @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>


    {{$slot}}




    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }} "></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }} "></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }} "></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }} "></script>
    <script src="{{ asset('assets/js/functions.js') }} "></script>
    @livewireScripts
</body>
</html>
