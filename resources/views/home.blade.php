@extends('layouts.app')
@section('content')
<div class="p-5 bg-light">
    <div class="container">
        
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-2">
                <div class="card">
                    <h3 class="text-primary">{{$movie->title}}</h3>
                    <p><strong>Titolo originale: </strong>{{$movie->original_title}}</p>
                    <p><strong>Nazionalità: </strong>{{$movie->nationality}}</p>
                    <p><strong>Data: </strong>{{$movie->date}}</p>
                    <p><strong>Voto: </strong>{{$movie->vote}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection