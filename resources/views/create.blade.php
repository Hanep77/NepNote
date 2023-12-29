@extends('layouts.main')

@section('container')
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <h3 class="my-3 w-75">Create Note</h3>
        <form action="/store" method="post">
            @csrf
            <div class="input-group mb-3">
                <select class="form-select bg-body-secondary border-dark-subtle" name="category_id" id="inputGroupSelect01">
                    <option>Choose Category</option>
                    @foreach (auth()->user()->categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="title" class="form-control bg-body-secondary border-dark-subtle" id="title"
                    name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control bg-body-secondary border-dark-subtle" id="content" name="content" rows="10"
                    required></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </main>
@endsection

@include('layouts.navigation')
