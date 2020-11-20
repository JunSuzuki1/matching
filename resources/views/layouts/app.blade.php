<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Links</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style>
            html, body {
                background-color: #fff;
								background-image: url('/image/background.jpg');
								/* color: #fff; */
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
						#cover {
								background-color: rgba(128,39,63,0.7); 
								height: 100vh;
								<!--min-height: 100vh;-->
						}
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
								border-bottom: solid 1px #fff;
								padding-top: 10px;
								padding-bottom: 10px;
								margin-left: 10px;
								margin-right: 10px;
            }
						.lonks > a:hover {
								background-color: rgba(0,0,0,0.3);
						}
						.top > a {
                color: #ffffff;
								font-size: 18px;
                padding: 0 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
								padding-top: 10px;
								padding-bottom: 10px;
								margin-left: 10px;
								margin-right: 10px;
						}
		</style>

</head>
<body>
	<div id="cover">
    <div id="app">
        <!--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">-->
        <!--    <div class="container">-->
        <!--        <a class="navbar-brand" href="{{ url('/') }}">-->
        <!--            {{ config('app.name', 'error') }}-->
        <!--        </a>-->
        <!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--            <span class="navbar-toggler-icon"></span>-->
        <!--        </button>-->

        <!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <!-- Left Side Of Navbar -->
        <!--            <ul class="navbar-nav mr-auto">-->

        <!--            </ul>-->

                    <!-- Right Side Of Navbar -->
        <!--            <ul class="navbar-nav ml-auto">-->
                        <!-- Authentication Links -->
        <!--                @guest-->
        <!--                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>-->
        <!--                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>-->
        <!--                @else-->
        <!--                    <li class="nav-item dropdown">-->
        <!--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
        <!--                            {{ Auth::user()->name }} <span class="caret"></span>-->
        <!--                        </a>-->

        <!--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
        <!--                            <a class="dropdown-item" href="{{ route('logout') }}"-->
        <!--                               onclick="event.preventDefault();-->
        <!--                                             document.getElementById('logout-form').submit();">-->
        <!--                                {{ __('Logout') }}-->
        <!--                            </a>-->

        <!--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
        <!--                                @csrf-->
        <!--                            </form>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                @endguest-->
        <!--            </ul>-->
                <div class="top-left top">
                        <a href="{{ url('/') }}">Links</a>
                </div>
        <!--           </div>-->
        <!--</nav>-->

        <!--<main class="py-4">-->
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>
                        <a href="{{ route('register') }}">登録</a>
                    @endauth
                </div>
        <div class="py-5"></div>
        <main class="py-5">
            @yield('content')
        </main>
        <div class="py-5"></div>
    </div>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>