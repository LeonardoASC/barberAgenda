@extends('layouts.guest')
@section('content')
    <div class="container">
        <h2>Cadastro</h2>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Dados Pessoais</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dadospessoais.store') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required
                                        placeholder="Digite seu nome...">
                                </div>


                                <div class="form-group">
                                    <label for="dia">Dia:</label>
                                    <input type="date" class="form-control" id="dia" name="dia" required
                                        min="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"
                                        max="{{ \Carbon\Carbon::today()->addDays(10)->format('Y-m-d') }}">
                                </div>



                                <div class="form-group">
                                    <label for="horario">Horário:</label>
                                    <select class="form-control" id="horario" name="horario" required>
                                        <option value="">-- Escolha um horário --</option>
                                        @foreach ($horarios as $horario)
                                            <option value="{{ \Carbon\Carbon::parse($horario->hora)->format('H:i') }}">
                                                {{ \Carbon\Carbon::parse($horario->hora)->format('H:i') }}</option>
                                            {{-- {{ \Carbon\Carbon::parse($horario->hora)->format('H:i') }} --}}
                                        @endforeach
                                    </select>
                                </div>

                            

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
