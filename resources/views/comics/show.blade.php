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
                <a href="{{route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-sm btn-warning">modifica</a>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id])}}" method="POST"></form>
                @csrf
                @method('DES')
                <button type="submit" class="btn btn-sm btn-danger">Cancella</button>
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