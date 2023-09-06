@extends('layouts.guest')
@section('content')
    <div class="col row">
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title">Lista de horarios disponiveis!</h3>
                <a href="{{ route('horario.create') }}">
                    <button type="button" class="btn btn-success mx-2">Cadastrar horario</button>
                </a>
            </div>
            <div class="list-group list-group-flush">
                @if ($horarios->isEmpty())
                    <p>Nenhum Horario disponivel.</p>
                @else
                    @foreach ($horarios as $horario)
                        <div href="#" class="list-group-item list-group-item-action d-flex gap-2"> {{ $horario->hora }}
                        <a href="{{ route('horario.edit', ['horario' => $horario->id]) }}"
                            class="border p-2  text-black">Editar</a>

                        <form action="{{ route('horario.destroy', $horario->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="border p-2 bg-white text-red"
                                type="submit">Excluir</button>
                        </form>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    
@endsection
