@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store')}}" method="post">
                @csrf
                <div class="row gy-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Image</label>
                        <input type="text" name="image" id="" class="form-control" placeholder="img">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Series</label>
                        <input type="text" name="Series" id="" class="form-control" placeholder="Series">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Price</label>
                        <input type="text" name="price" id="" class="form-control" placeholder="Price">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Date</label>
                        <input type="text" name="date" id="" class="form-control" placeholder="date">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Type</label>
                        <input type="text" name="type" id="" class="form-control" placeholder="Type">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Description</label>
                        <textarea type="text" name="title" id="" class="form-control" placeholder="description"></textarea>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Artists</label>
                        <textarea type="text" name="artists" id="" class="form-control" placeholder="Artists"></textarea>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Writers</label>
                        <textarea type="text" name="writers" id="" class="form-control" placeholder="Writers"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-sm btn-success"></button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection