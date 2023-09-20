@extends('layouts.guest')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Seleção de Sub-Serviços</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('agendamento.index') }}" method="post">
                            @csrf

                           <div class="form-group">
                                <label for="tipo_servico">Tipo de Serviço:</label>
                                <select class="form-control" id="tipo_servico" name="tipo_servico">
                                    @foreach ($tarefas as $tarefa)
                                        <option value="{{$tarefa->id}}">{{$tarefa->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- <button type="submit" class="btn btn-primary btn-block mt-4">Selecionar</button> --}}
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary">Selecionar</button>
                                <a href="{{ url()->previous() }}">
                                    <button type="button" class="btn btn-primary">Voltar</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
