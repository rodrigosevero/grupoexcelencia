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

                    Você esta logado!
                    <br><br>
                    <p><a href="{{ route('client.test') }}">Acessar simulado</a></p>
                    
                    <p><a href="{{ route('client.results.geral') }}">Acessar resultados</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection