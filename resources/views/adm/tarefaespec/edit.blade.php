@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Editar Serviço
                </div>
                <div class="card-body">
                    <form action="{{ route('tarefa.update', $tarefa->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control" value="{{ $tarefa->name }}" required>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                            <a href="{{ route('tarefa.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
