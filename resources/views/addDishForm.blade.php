@extends("main")
@section("title","добавление блюда")
@section("content")
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('addDish.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Название:</strong>
                        <input type="text" name="name" class="form-control"
                               value="{{old('name')}}" placeholder="Название блюда">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Описание:</strong>
                        <input type="text" name="description" class="form-control"
                               value="{{old('description')}}" placeholder="Описание">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Цена:</strong>
                        <input type="text" name="price" class="form-control"
                               value="{{old('price')}}" placeholder="цена">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Категория:</strong>
                        <select name="menu_category_id">
                            @foreach($categories as $category)
                                <option  value="{{$category->id}}">{{$category->name}}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Добавить новое блюдо</button>
                </div>
            </div>
        </form>
    </div>
@endsection
