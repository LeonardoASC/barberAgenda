@extends('layouts.guest')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Confirme seu agendamento!</h4>
                </div>
                <div class="card-body">
                    @if(session('tipo_servico') || session('servico_especifico')|| session('nome') ||  session('dia') || session('horario'))

                        <p><strong>Nome:</strong> {{ session('nome', 'Não definido') }}</p>
                        <p><strong>Data:</strong> {{ session('dia', 'Não definido') }}</p>
                        <p><strong>Horario:</strong> {{ session('horario', 'Não definido') }}</p>
                        <p><strong>Tipo de Serviço:</strong> {{ session('tipo_servico', 'Não definido') }}</p>
                        <p><strong>Serviço Específico:</strong> {{ session('servico_especifico', 'Não definido') }}</p>
                        <form action="{{route('agendamento.store')}}" method="POST" class="row justify-content-center">
                            @csrf
                            <input type="hidden" name="nome" value="{{session('nome')}}">
                            <input type="hidden" name="dia" value="{{session('dia')}}">
                            <input type="hidden" name="horario" value="{{session('horario')}}">
                            <input type="hidden" name="tipo_servico" value="{{session('tipo_servico')}}">
                            <input type="hidden" name="servico_especifico" value="{{session('servico_especifico')}}">
                            <div class="">
                                <button type="submit" class="btn btn-primary">Agendar</button>

                                <a href="{{ url()->previous() }}">
                                    <button type="button" class="btn btn-primary">Voltar</button>
                                </a>
                            </div>
                        </form>

                    @else
                        <p>Não há dados de serviço na sessão atual.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
