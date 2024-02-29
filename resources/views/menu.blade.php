@extends("main")
@section("title","menu")
@section("content")
    <php>
        <table class="table table-striped">
            <tr>
                <td>id</td>
                <td>название</td>
                <td>подробнее</td>

            </tr>
            @foreach($menu as $dish)
            <tr>
                <td>{{$dish->id}}</td>
                <td>{{$dish->name}}</td>
{{--                <td>{{$dish->MenuCategory->name}}</td>--}}
                <td> <a href="menu/{{$dish->id}}">Подробнее</a></td>
            </tr>
            @endforeach
        </table>
    </php>
@endsection

