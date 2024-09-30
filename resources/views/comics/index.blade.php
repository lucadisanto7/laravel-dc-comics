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
        <div class="col-12">
            @foreach ($comics as $comic)
                
            @endforeach
        </div>    
    </div>    
</div>  
    
@endsection