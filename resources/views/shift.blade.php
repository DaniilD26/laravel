@extends("main")
@section("title","shifts")
@section("content")
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>имя</td>
            <td>login</td>
            <td>подробнее</td>
        </tr>
        @foreach($shifts as $shift)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->login}}</td>
                <td><a href="user/{{$user->id}}">Подробнее</a></td>
            </tr>
        @endforeach
    </table>
@endsection
