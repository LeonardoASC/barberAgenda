@extends('layouts.guest')
@section('content')


    <div class="card">
        @if (Route::has('login'))
            <div class="d-flex justify-content-center my-3">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-secondary mr-2">Inicio</a>
                @else
                    <div class="">
                        <a href="{{ route('login') }}" class="btn btn-secondary mr-2">Entrar</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-secondary">Registrar</a>
                        @endif
                    </div>
                @endauth
            </div>
        @endif
        <div class="d-flex justify-content-center my-3">
            <a href="{{ route('dadospessoais.index') }}">
                <button type="button" class="btn btn-primary ">Marcar Corte</button>
            </a>
        </div>
    </div>


@endsection
