@extends("main")
@section("title","Категории")
@section("content")
    <php>
        <ul>
            @foreach($categories as $category)
                <li>{{$category->name}}</li>
            @endforeach
        </ul>
    </php>
@endsection
