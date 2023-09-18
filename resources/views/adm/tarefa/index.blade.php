@extends('layouts.app')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title fw-bold fs-1">Tipos de atendimento</h3>
            <a href="{{ route('tarefa.create') }}" class="btn btn-primary">Cadastrar</a>
        </div>
        <div class="card-body">
            @if ($tarefas->isEmpty())
                <p class="text-muted">Nenhum Horário registrado.</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tarefas as $tarefa)
                            <tr>
                                {{-- <td class="fw-bold fs-3">{{ \Carbon\Carbon::parse($tarefa->name)->format('H:i') }}</td> --}}
                                <td class="fw-bold fs-3">{{ $tarefa->name }}</td>
                                <td class="text-end">
                                    <a href="{{ route('tarefa.edit', ['tarefa' => $tarefa->id]) }}" class="btn btn-outline-secondary fs-5 mr-2">Editar</a>
                                    <form action="{{ route('tarefa.destroy', $tarefa->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger fs-5" type="submit">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>


@endsection
