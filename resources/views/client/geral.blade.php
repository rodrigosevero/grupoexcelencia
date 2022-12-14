@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resultados</div>

                <div class="card-body">
                    @if(session('status'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                <p>{{ session('status') }}</p>

                                <a href="{{ route('client.test') }}" class="btn btn-primary">Start test again</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @foreach($results as $result)
                    <p>Data: {{ date ('d/m/Y H:i:s', strtotime($result->created_at)) }}<br>
                        Total points: {{ $result->total_points }} points</p>


                    <a href="{{ route('client.results.show', $result->id) }}" class="btn btn-primary">VER DETALHES</a>
                    <br><br>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection