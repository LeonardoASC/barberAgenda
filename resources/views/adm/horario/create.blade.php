@extends('layouts.app')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h1>Cadastrar hora</h1>
            </div>
            <div class="card-body ">
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
        </div>
    </div>
@endsection
