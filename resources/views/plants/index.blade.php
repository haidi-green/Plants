@extends('layouts.dressup')
@section('nav')

<div class="container">
    <div class="row">

    @foreach ($plants as $plant)
        <div class="col-lg-4 col-md-6">
            <div class="card index-card my-5">
                <img class="card-img-top index-image" src="{{ $plant -> image }}" alt="Plant">
                <div class="card-body bud">
                    <h3 class="card-title">{{ $plant -> name }}</h3>
                    <a href="/plants/show/{{ $plant -> id }}" class="btn btn-success">Unfold</a>
                    <a href="/plants/edit/{{ $plant -> id }}" class="btn btn-success">Polish</a>
                    <a href="/plants/destroy/{{ $plant -> id }}" class="btn btn-success">Burn</a>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>

@endsection
