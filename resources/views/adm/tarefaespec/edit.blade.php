@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Editar Serviço
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tarefaespec.update', $tarefaespec->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Adicione isso para especificar que é uma requisição PUT -->

                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome" id="nome"
                                    value="{{ $tarefaespec->nome }}" placeholder="Digite o nome" required>
                            </div>

                            <div class="form-group">
                                <label for="preco">Preço:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" step="0.01" class="form-control" name="preco" id="preco"
                                        value="{{ $tarefaespec->preco }}" placeholder="0.00" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tempo_de_duracao">Tempo de Duração (em horas):</label>
                                <input type="number" class="form-control" name="tempo_de_duracao" id="tempo_de_duracao"
                                    value="{{ $tarefaespec->tempo_de_duracao }}" placeholder="0" required>
                            </div>

                            <div class="form-group">
                                <label for="imagem">Imagem:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="imagem" id="imagem">
                                    <label class="custom-file-label" for="imagem">Escolha uma imagem</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tarefa_id">Tarefa:</label>
                                <select class="form-control" name="tarefa_id" id="tarefa_id">
                                    <option class="text-zinc-400" placeholder="categoria">-- Selecione --</option>
                                    @foreach ($tarefas as $tarefa)
                                        <option value="{{ $tarefa->id }}"
                                            {{ $tarefa->id == $tarefaespec->tarefa_id ? 'selected' : '' }}>
                                            {{ $tarefa->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mt-4">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card-body">
    <form action="{{ route('tarefaespec.update', $tarefaespec->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Adicione isso para especificar que é uma requisição PUT -->

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ $tarefaespec->nome }}" placeholder="Digite o nome" required>
        </div>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" step="0.01" class="form-control" name="preco" id="preco" value="{{ $tarefaespec->preco }}" placeholder="0.00" required>
            </div>
        </div>

        <div class="form-group">
            <label for="tempo_de_duracao">Tempo de Duração (em horas):</label>
            <input type="number" class="form-control" name="tempo_de_duracao" id="tempo_de_duracao" value="{{ $tarefaespec->tempo_de_duracao }}" placeholder="0" required>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="imagem" id="imagem">
                <label class="custom-file-label" for="imagem">Escolha uma imagem</label>
            </div>
            <!-- Se necessário, adicione uma pré-visualização da imagem atual aqui -->
        </div>

        <div class="form-group">
            <label for="tarefa_id">Tarefa:</label>
            <select class="form-control" name="tarefa_id" id="tarefa_id">
                <option class="text-zinc-400" placeholder="categoria">-- Selecione --</option>
                @foreach ($tarefas as $tarefa)
                    <option value="{{ $tarefa->id }}" {{ $tarefa->id == $tarefaespec->tarefa_id ? 'selected' : '' }}>{{ $tarefa->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-4">Atualizar</button>
    </form>
</div> --}}
@endsection
