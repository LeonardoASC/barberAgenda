@extends('layouts.guest')
@section('content')
<div class="container">
    <h1>Formulário de hora</h1>
    <form action="{{ route('horario.update', ['horario' => $horario->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="hora">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora">
            </div>
        </div>
        <button type="submit" class="btn my-2 btn-primary">Atualizar</button>
    </form>
  </div>
@endsection
