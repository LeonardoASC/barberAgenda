@extends('layouts.guest')
@section('content')
    <div class="container">
        <h1>Cadastrar hora</h1>
        <form action="{{ route('horario.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="hora">Hora</label>
                    <input type="time" class="form-control" id="hora" name="hora">
                </div>
            </div>
            <button type="submit" class="btn my-2 btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
