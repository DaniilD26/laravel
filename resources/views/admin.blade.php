@extends("main")
@section("title","Личный кабинет")
@section('content')
    <div class="container">
        <a href="{{route('register.create')}}" class="link-dark">Добавить пользователя</a><br>
        <a href="{{route('addDish.create')}}" class="link-dark">Добавить блюдо</a><br>
        <a href="{{route('createShift.create')}}" class="link-dark">Создать смену</a><br>
        <h1>Административная панель</h1>
        <h3>Привет, {{ Auth::user()->name }}!</h3>
{{--        <h3>Должность, {{ Auth::user()-> }}!</h3>--}}
        <div class="card" style="width: 30rem;">
            {{--        <img src="..." class="card-img-top" alt="...">--}}
            <div class="card-body">
                <h5 class="card-title">Профиль</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Имя:<b>{{ Auth::user()->name }}</b> </li>
                <li class="list-group-item">Фамилия: <b>{{ Auth::user()->surname }}</b></li>
                <li class="list-group-item">Отчество: <b>{{ Auth::user()->patronymic }}</b></li>
                <li class="list-group-item">Статус работника: <b>{{ Auth::user()->status }}</b></li>
            </ul>
            {{--        <div class="card-body">--}}
            {{--            <a href="#" class="card-link">Ссылка карточки</a>--}}
            {{--            <a href="#" class="card-link">Другая ссылка</a>--}}
            {{--        </div>--}}
        </div>

{{--        <a href="{{route('usert')}}" class="link-dark">Добавить товар</a>--}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
