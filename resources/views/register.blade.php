@extends("main")
@section("title","Регистрация")
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
 <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
 @csrf
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Имя:</strong>
 <input type="text" name="name" class="form-control"
value="{{old('name')}}" placeholder="Имя">
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>фамилия:</strong>
    <input type="text" name="surname" class="form-control"
   value="{{old('surname')}}" placeholder="фамилия">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Отчество:</strong>
        <input type="text" name="patronymic" class="form-control"
       value="{{old('patronymic')}}" placeholder="отчество">
        </div>
        </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Логин:</strong>
 <input type="text" name="login" class="form-control"
value="{{old('login')}}" placeholder="Логин">
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Пароль:</strong>
 <input type="password" name="password" class="form-control"
placeholder="Пароль">
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>роль</strong>
    <input type="text" name="role_id" class="form-control"
   placeholder="1-админ, 2-официант, 3-повар">
    </div>
 </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
         <strong>Выберите изображение </strong>
         <input class="form-control form-control-lg" type="file" name="photo_file">
     </div>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btn-primary">Зарегистрировать нового пользователя</button>
 </div>
 </div>
 </form>
 </div>
@endsection
