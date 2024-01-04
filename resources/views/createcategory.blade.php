@extends('layouts.main')

@section('container')
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <h3 class="my-3 w-75">Create Category</h3>
        <form action="/categories/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control bg-body-secondary border-dark-subtle" id="name" name="name"
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control bg-body-secondary border-dark-subtle" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </main>
@endsection

@include('layouts.navigation')
