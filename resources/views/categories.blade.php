@extends('layouts.main')

@section('container')
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="my-3 w-50">Categories</h3>
            <a href="/categories/create" type="submit" class="btn btn-success">Create New Category</a>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <ol class="list-group list-group-numbered">
            @foreach ($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-start bg-body-secondary">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $category->name }}</div>
                        <span class="badge bg-primary rounded-pill">{{ count($category->notes) }}</span>
                    </div>
                    <div class="dropdown">
                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    onclick="anjay({{ $category->id }})"><i class="bi bi-trash"></i> Delete</button></li>
                        </ul>
                    </div>
                </li>
            @endforeach
        </ol>
    </main>
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-body-secondary">
            <div class="text-center pt-3">
                <i class="bi bi-trash-fill fs-2 text-secondary"></i>
                <h5 class="modal-title p-3" id="exampleModalLabel">Are you sure you want to delete this
                    note?</h5>
            </div>
            <div class="pb-3 text-center">
                <form action="/categories/delete/{{ $category->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" type="button" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.navigation')


<script>
    const form = document.querySelector('form')

    function anjay(id) {
        form.action = '/categories/delete/' + id
    }
</script>
