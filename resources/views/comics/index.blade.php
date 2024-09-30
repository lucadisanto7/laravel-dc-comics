@extends('layouts.app')
@section('content')

<div id="jumbotron">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-12">
            <div class="comic">
                <div class="thumb">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <h4 class="text-uppercase">{{ $comic['title'] }}</h4>
            </div>
            @endforeach
        </div>    
    </div>    
</div>  
    
@endsection