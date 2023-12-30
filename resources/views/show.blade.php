@extends('layouts.main')

@section('container')
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <h3 class="mt-3 w-75">{{ $note->user->name }}'s note</h3>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row mb-2">
            <div class="col d-flex align-items-center">
                @if ($note->category)
                    <span class="badge rounded-pill text-bg-info border-dark-subtle">{{ $note->category->name }}</span>
                @endif
            </div>
            <div class="col text-end">
                <a href="/edit/{{ $note->id }}" class="btn btn-warning border-dark-subtle"><i
                        class="bi bi-pencil-square"></i></a>
                <button class="btn btn-danger border-dark-subtle" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                        class="bi bi-trash"></i></button>
            </div>
        </div>
        <div class="card bg-body-secondary">
            <div class="card-body">
                <h5 class="card-title">{{ $note->title }}</h5>
                <div class="card-text">{!! $note->content !!}</div>
            </div>
        </div>
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
                <form action="/delete/{{ $note->id }}" method="post">
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
