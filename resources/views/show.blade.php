@extends('layouts.main')

@section('container')
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <h3 class="mt-3 w-75">{{ $note->user->name }}'s note</h3>
        @if ($note->category)
            <span class="badge rounded-pill text-bg-info my-2">{{ $note->category->name }}</span>
        @endif
        <div class="card bg-body-secondary">
            <div class="card-body">
                <h5 class="card-title">{{ $note->title }}</h5>
                <div class="card-text">{{ $note->content }}</div>
            </div>
        </div>
    </main>
@endsection
