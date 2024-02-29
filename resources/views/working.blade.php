@extends("main")
@section("title","Подробнее о работнике")
@section("content")
    <div class="card" style="width: 30rem;">
{{--        <img src="..." class="card-img-top" alt="...">--}}
        <div class="card-body">
            <h5 class="card-title">Профиль</h5>
        </div>
        <img style="width: 200px" src="../../public/storage/{{$working->photo_file}}" alt="">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Логин:<b>{{$working->login}}</b> </li>
            <li class="list-group-item">Имя:<b>{{$working->name}}</b> </li>
            <li class="list-group-item">Фамилия: <b>{{$working->surname}}</b></li>
            <li class="list-group-item">Отчество: <b>{{$working->patronymic}}</b></li>
            <li class="list-group-item">Статус работника:
                <select name="status">
                    <option value="working">working</option>
                    <option value="dismissed">dismissed</option>
                </select>
            </li>
        </ul>
        <button></button>
{{--        <div class="card-body">--}}
{{--            <a href="#" class="card-link">Ссылка карточки</a>--}}
{{--            <a href="#" class="card-link">Другая ссылка</a>--}}
{{--        </div>--}}
    </div>
@endsection



