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
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="w-50 d-flex flex-column gap-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, accusamus!</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum fuga aliquam,
                            reprehenderit maiores quia quod accusamus nulla est? Suscipit, nostrum?</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
