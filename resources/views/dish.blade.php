@extends("main")
@section("title","Подробнее о блюде")
@section("content")
        <div class="card" style="font-size: 35pt; margin-top: 200px">
            <div class="card-header" >
                Название блюда: {{$dish->name}}
            </div>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20pt">Цена: {{$dish->price}}</h5>
{{--                <h5 class="card-title" style="font-size: 20pt">Цена: {{$category->name}}</h5>--}}
                <p class="card-text" style="font-size: 15pt">Описание блюда: {{$dish->description}}</p>
            </div>
        </div>
@endsection
