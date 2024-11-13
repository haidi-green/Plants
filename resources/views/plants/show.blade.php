@extends('layouts.dressup')
@section('nav')

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card index-card my-5">
                <img class="card-img-top index-image" src="{{ $plant -> image }}" alt="Plant">
            </div>
        </div>
        <div class="col-lg-8 col-md-6">
            <div class="card-body">
                <h1 class="card-title snow">{{ $plant -> name }}</h1>
                <p class="card-text snow">{{ $plant -> description }}</p>
            </div>
        </div>
        @endsection
    </div>
</div>
