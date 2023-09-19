@extends('layouts.app')
@section('content')



    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title fw-bold fs-1">Tipos de atendimento</h3>
                <a href="{{ route('tarefaespec.create') }}" class="btn btn-primary">Cadastrar</a>
            </div>
            <div class="card-body">
                @if ($tarefaespecs->isEmpty())
                    <p class="text-muted">Nenhum Horário registrado.</p>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Tempo de Duração</th>
                                <th>Imagem</th>
                                <th>Tipo</th>
                                <th class="text-end">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefaespecs as $tarefaespec)
                                <tr>
                                    <td>{{ $tarefaespec->nome }}</td>
                                    <td>{{ $tarefaespec->preco }}</td>
                                    <td>{{ $tarefaespec->tempo_de_duracao }}</td>
                                    <td>
                                        <div class="card" style="width: 12rem;">
                                            <img src="{{ $tarefaespec->imagem }}" alt="{{ $tarefaespec->nome }}" class="card-img-top">
                                            {{-- <div class="card-body">
                                                <h5 class="card-title">{{ $tarefaespec->nome }}</h5>
                                            </div> --}}
                                        </div>
                                    </td>
                                    <td>{{ $tarefaespec->tarefa->name }}</td>


                                    {{-- @foreach ($tarefaespecs as $tarefa)
                            <tr>
                                <td class="fw-bold fs-3">{{ $tarefa->name }}</td>

                            </tr>
                            @endforeach --}}
                                    <td class="text-end">
                                        <a href="{{ route('tarefaespec.edit', $tarefaespec->id) }}"
                                            class="btn btn-outline-secondary fs-5 mr-2">Editar</a>
                                        <form action="{{ route('tarefaespec.destroy', $tarefaespec->id) }}" method="POST"
                                            class="d-inline">
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
