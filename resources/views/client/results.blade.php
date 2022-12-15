@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <p>
            <h1>Usuario: {{ Auth::user()->name }}</h1>
            </p>

            <div class="card">
                <div class="card-header">Resultado do simulado - Data: <b>{{ date ('d/m/Y H:i:s', strtotime($result->created_at)) }}</b></div>

                <div class="card-body">
                    @if(session('status'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                <p>{{ session('status') }}</p>

                                <a href="{{ route('client.test') }}" class="btn btn-primary">Começar novamente</a>
                            </div>
                        </div>
                    </div>
                    @endif



                    <p>Total de pontos: {{ $result->total_points }} pontos</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Questão</th>
                                <th>Pontos</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result->questions as $question)
                            <tr>
                                <td>{{ $question->question_text }}</td>
                                <td>{{ $question->pivot->points }}</td>                                
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>

                    <!-- <a href="{{ route('client.results.send', $result->id) }}" class="btn btn-primary">GET DETAILS IN PDF BY EMAIL</a> -->
                    <a href="{{ url()->previous() }}" class="btn btn-primary">VOLTAR</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection