@extends('layouts.guest')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Seleção de Serviço</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('servico.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="tipo_servico">Tipo de Serviço:</label>
                            <select class="form-control" id="tipo_servico" name="tipo_servico">
                                <option value="Manutenção">Manutenção</option>
                                <option value="Instalação">Instalação</option>
                            </select>
                        </div>

                        <div class="form-group mt-2">
                            <label for="servico_especifico">Serviço Específico:</label>
                            <select class="form-control" id="servico_especifico" name="servico_especifico">
                                <option value="Troca de óleo">Troca de óleo</option>
                                <option value="Reparo no motor">Reparo no motor</option>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-4">Selecionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
