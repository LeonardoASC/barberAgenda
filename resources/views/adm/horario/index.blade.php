@extends('layouts.app')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title fw-bold fs-1">Horários de atendimento</h3>
            <a href="{{ route('horario.create') }}" class="btn btn-primary">Cadastrar</a>
        </div>
        <div class="card-body">
            @if ($horarios->isEmpty())
                <p class="text-muted">Nenhum Horário registrado.</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Horário</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($horarios as $horario)
                            <tr>
                                <td class="fw-bold fs-3">{{ \Carbon\Carbon::parse($horario->hora)->format('H:i') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('horario.edit', ['horario' => $horario->id]) }}" class="btn btn-outline-secondary fs-5 mr-2">Editar</a>
                                    <form action="{{ route('horario.destroy', $horario->id) }}" method="POST" class="d-inline">
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
