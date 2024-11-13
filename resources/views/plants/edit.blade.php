@extends('layouts.dressup')
@section('nav')

<div class="container">
    <form action="/plants/update/{{ $plant -> id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label mt-5">Plant Name</label>
            <input type="text" class="form-control" name="name" value="{{ $plant -> name }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Plant Image URL</label>
            <input type="text" class="form-control" name="image" value="{{ $plant -> image }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Plant Description</label>
            <input type="text" class="form-control" name="description" value="{{ $plant -> description }}">
        </div>

        <button type="submit" class="btn btn-success mt-2">Polish your plant!</button>
        @endsection
    </form>
</div>
