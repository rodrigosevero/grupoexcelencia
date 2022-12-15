@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(session('status'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                    @endif


                    <div class="row text-center">
                        <div class="col-md-6 text-center">
                            <p>
                                <a href="{{ route('client.test') }}">
                                    <img src="{{ asset('public/tema/assets/img/ico-simulado.png') }}" width="150" height="150"></a><br>
                                <a href="{{ route('client.test') }}">Acessar simulado</a>
                            </p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p>
                                <a href="{{ route('client.results.geral') }}">
                                    <img src="{{ asset('public/tema/assets/img/ico-resultado.png') }}" width="150" height="150"></a>
                                <br>
                                <a href="{{ route('client.results.geral') }}">Acessar resultados</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection