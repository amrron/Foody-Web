@extends('layouts.admin')

@section('section')

    <section class="overflow-y-scroll" style="width: calc(100% - 300px)">
        <div class="row mt-3 mx-3 text-biru">
            Hello Admin Orion
        </div>
        <div class="row border rounded-2 m-3">
            <div class="col-4 p-3 border-end">
                <p class="text-biru">Users</p>
                <h2 class="fs-1 fw-bold text-biru">{{ $users }}</h2>
            </div>
            <div class="col-4 p-3">
                <p class="text-biru">Food</p>
                <h2 class="fs-1 fw-bold text-biru">{{ $foods }}</h2>
            </div>
            <div class="col-4 p-3 border-start">
                <p class="text-biru">Feedback</p>
                <h2 class="fs-1 fw-bold text-biru">{{ $numfeed }}</h2>
            </div>
        </div>
        <div class="row mx-3 mb-3">
            <div class="col-8 ps-0">
                <div class="w-100 h-100 border rounded-2">
                    
                </div>
            </div>
            <div class="col-4 px-1">
                <div class="w-100 border rounded-2 p-3">
                    <h5 class="fs-5 mb-3">Recent Feedback</h5>
                    <ul class="list-unstyled">
                        @foreach ($feedback as $feed)
                        <li class="d-flex mb-2">
                            <img src="/img/profileimg.webp" class="rounded-circle" alt="" style="height: 48px">
                            <div class="d-flex flex-column ms-2">
                                <p class="m-0 fs-6">{{ $feed->nama }}</p>
                                <p class="m-0 fs-12px" style="color: #898989">{{ substr($feed->pesan, 0, 40) }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection