@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Cadastro de Dados</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tarefaespec.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome" id="nome"
                                    placeholder="Digite o nome" required>
                            </div>

                            <div class="form-group">
                                <label for="preco">Preço:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" step="0.01" class="form-control" name="preco" id="preco"
                                        placeholder="0.00" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tempo_de_duracao">Tempo de Duração (em horas):</label>
                                <input type="number" class="form-control" name="tempo_de_duracao" id="tempo_de_duracao"
                                    placeholder="0" required>
                            </div>

                            <div class="form-group">
                                <label for="imagem">Link da Imagem:</label>
                                <input type="text" class="form-control" name="imagem" id="imagem" placeholder="Insira o link da imagem" required>
                            </div>


                            <div class="form-group">
                                <label for="tarefa_id">Tarefa:</label>
                                <select class="form-control" name="tarefa_id" id="tarefa_id">
                                    <option class="text-zinc-400" placeholder="categoria">-- Selecione --</option>
                                    @foreach ($tarefas as $tarefa)
                                        <option value="{{ $tarefa->id}}">{{ $tarefa->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mt-4">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js and Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Script para atualizar o nome do arquivo no input file customizado do Bootstrap
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script> --}}
@endsection
