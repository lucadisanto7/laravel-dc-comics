@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="d-flex">
                    <h1>{{$comic['title']}}</h1>
                </div>
                <a href="{{route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-sm btn-warning">Modifica</a>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id])}}" method="POST"></form>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sei sicuro di voler cancellare?')">Cancella</button>
                <h3>{{$comic['series']}}</h3>
                <p><sub>{{$comic['type']}}</sub></p>
                <p>{{ $comic['description'] }}</p>
                <h4><strong>{{$comic['price']}}</strong></h4>
                <p>{{$comic['sale_date']}}</p>
                <p><strong>Artists:</strong> {{$comic['artists']}}</p>
                <p><strong>Writers:</strong> {{$comic['writers']}}</p>
            </div>
        </div>
    </div>
@endsection