@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', ['comic' => $comic->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row gy-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title" value="{{$comic->title}}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Image</label>
                        <input type="text" name="image" id="" class="form-control" placeholder="img"value="{{$comic->thumb}}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Series</label>
                        <input type="text" name="Series" id="" class="form-control" placeholder="Series"value="{{$comic->series}}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Price</label>
                        <input type="text" name="price" id="" class="form-control" placeholder="Price"value="{{$comic->price}}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Date</label>
                        <input type="text" name="date" id="" class="form-control" placeholder="date"value="{{$comic->sale_date}}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Type</label>
                        <input type="text" name="type" id="" class="form-control" placeholder="Type"value="{{$comic->type}}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Description</label>
                        <textarea type="text" name="title" id="" class="form-control" placeholder="description">{{$comic->description}}</textarea>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Artists</label>
                        <textarea type="text" name="artists" id="" class="form-control" placeholder="Artists">{{$comic->artists}}</textarea>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Writers</label>
                        <textarea type="text" name="writers" id="" class="form-control" placeholder="Writers">{{$comic->writers}}</textarea>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" >
                        <button type="submit" class="btn btn-sm btn-success">Create a comic</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection