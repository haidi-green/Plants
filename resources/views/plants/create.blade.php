@extends('layouts.dressup')
@section('nav')

<div class="container">
    <form action="/create/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label mt-5">Plant Name</label>
            <input type="text" class="form-control" name="name" placeholder="Dandelion">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Plant Image URL</label>
            <input type="text" class="form-control" name="image" placeholder="URL">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Plant Description</label>
            <input type="text" class="form-control" name="description" placeholder="Pretty!">
        </div>

        <button type="submit" class="btn btn-success mt-2">Add a new plant!</button>
        @endsection
    </form>
</div>
