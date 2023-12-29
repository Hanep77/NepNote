@extends('layouts.main')

@section('container')
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="my-3 w-75">Yudis Sutisna</h3>
            <form action="/logout" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
        </div>

        <div class="input-group mb-3 max-w border border-dark-subtle rounded">
            <input type="text" class="form-control bg-body-secondary" placeholder="Recipient's username"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
        </div>

        {{-- <div class="overflow-x-auto">
            <div style="width: 620px;" class="d-flex gap-2 pb-1">
                <div class="bg-primary text-white d-flex flex-column justify-content-center align-items-center rounded"
                    style="width: 150px; height: 120px">
                    <p class="fs-5">Ideas</p>
                    <div class="d-flex gap-2" style="font-size: 12px;">
                        <span>20 notes</span>
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
                <div class="bg-danger text-white d-flex flex-column justify-content-center align-items-center rounded"
                    style="width: 150px; height: 120px">
                    <p class="fs-5">Poetry</p>
                    <div class="d-flex gap-2" style="font-size: 12px;">
                        <span>20 notes</span>
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
                <div class="bg-primary text-white d-flex flex-column justify-content-center align-items-center rounded"
                    style="width: 150px; height: 120px">
                    <p class="fs-5">Ideas</p>
                    <div class="d-flex gap-2" style="font-size: 12px;">
                        <span>20 notes</span>
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
                <div class="bg-danger text-white d-flex flex-column justify-content-center align-items-center rounded"
                    style="width: 150px; height: 120px">
                    <p class="fs-5">Poetry</p>
                    <div class="d-flex gap-2" style="font-size: 12px;">
                        <span>20 notes</span>
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
            </div>
        </div> --}}

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex gap-1 my-2">
            <div class="w-50 d-flex flex-column gap-1">
                @for ($i = 0; $i < count($notes); $i += 2)
                    <a href="/notes/{{ $notes[$i]->id }}" class="link">
                        <div class="card bg-body-secondary">
                            <div class="card-body">
                                <h5 class="card-title">{{ $notes[$i]->title }}</h5>
                                <p class="card-text">{{ $notes[$i]->excerpt }}</p>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
            <div class="w-50 d-flex flex-column gap-1">
                @for ($i = 1; $i < count($notes); $i += 2)
                    <a href="/notes/{{ $notes[$i]->id }}" class="link">
                        <div class="card bg-body-secondary">
                            <div class="card-body">
                                <h5 class="card-title">{{ $notes[$i]->title }}</h5>
                                <p class="card-text">{{ $notes[$i]->excerpt }}</p>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </main>
@endsection

@include('layouts.navigation')
