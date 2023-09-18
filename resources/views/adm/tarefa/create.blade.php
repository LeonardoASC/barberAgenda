@extends('layouts.app')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1>Cadastrar um tipo de tarefa</h1>
        </div>
        <div class="card-body ">
            <form action="{{ route('tarefa.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Salvar</button>
            </form>
        </div>
    </div>
</div>
@endsection
