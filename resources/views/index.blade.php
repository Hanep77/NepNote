@extends('layouts.main')

@section('container')
    <main class="container mx-auto" style="max-width: 600px; margin-bottom: 64px;">
        <h3 class="my-3">Yudis Sutisna</h3>

        <div class="input-group mb-3 max-w">
            <input type="text" class="form-control bg-body-secondary" placeholder="Recipient's username"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
        </div>

        <div class="overflow-x-auto">
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
        </div>

        <div class="d-flex gap-1 my-2">
            <div class="w-50 d-flex flex-column gap-1">
                @for ($i = 0; $i < count($notes); $i += 2)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $notes[$i]->title }}</h5>
                            <p class="card-text">{{ $notes[$i]->excerpt }}</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="w-50 d-flex flex-column gap-1">
                @for ($i = 1; $i < count($notes); $i += 2)
                    <div class="card">
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
