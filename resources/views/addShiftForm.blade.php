@extends("main")
@section("title","добавление смены")
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
        <form action="{{ route('createShift.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>начало смены:</strong>
                        <input type="datetime-local" name="start" class="form-control"
                               value="{{old('start')}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>конец смены:</strong>
                        <input type="datetime-local" name="end" class="form-control"
                               value="{{old('end')}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">создать смену</button>
                </div>
            </div>
        </form>
    </div>
@endsection
