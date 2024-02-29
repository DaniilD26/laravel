<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body style="background-color: #fff ">
<div class="container">
    <header>
        <h1>Онлайн-Касса</h1>
            @guest()
                <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('loginForm') }}">Создать заказ</a>
                <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('loginForm') }}">Войти</a>
                <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('register') }}">Регистрация</a>
            @endguest
            @auth()
                @if(Auth::user()->isAdmin())
                    <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('admin') }}">кабинет админа</a>
                    <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('user.index') }}">вывод пользователей</a>
                    <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('menu.index') }}">вывод меню</a>
                        {{-- <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('shift.index') }}">вывод смен</a> --}}
                @else
                    <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('profile') }}">личный кабинет</a>
                    <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('menu.index') }}">вывод меню</a>
                @endif
                <a style="width: 50px; font-size: 15pt; margin-right: 20px; color: #c38134" href="{{ route('logout') }}">Выйти</a>
                <a href="{{ route('logout') }}">Выйти</a>
            @endauth
            <hr>
    </header>
    <img src="{{asset('/images/onlajn-kassy.jpg')}}" alt="kassy">
    @yield('content')
</div>
</body>
</html>
