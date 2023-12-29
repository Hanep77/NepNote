@extends('layouts.main')

@section('container')
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="my-3 w-75">NepNotes</h3>
            <a href="/login" class="btn btn-outline-success">Login</a>
        </div>

        <div class="input-group mb-3 max-w border border-dark-subtle rounded">
            <input type="text" class="form-control bg-body-secondary" placeholder="Recipient's username"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
        </div>

        <div class="d-flex gap-1 my-2">
            <div class="w-50 d-flex flex-column gap-1">
                @for ($i = 0; $i < count($notes); $i += 2)
                    <div class="card bg-body-secondary">
                        <div class="card-body">
                            <h5 class="card-title">{{ $notes[$i]->title }}</h5>
                            <p class="card-text">{{ $notes[$i]->excerpt }}</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="w-50 d-flex flex-column gap-1">
                @for ($i = 1; $i < count($notes); $i += 2)
                    <div class="card bg-body-secondary">
                        <div class="card-body">
                            <h5 class="card-title">{{ $notes[$i]->title }}</h5>
                            <p class="card-text">{{ $notes[$i]->excerpt }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </main>
@endsection
