@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store')}}" method="post"></form>
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="title">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection