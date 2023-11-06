@extends('layouts.admin')

@section('section')

    <section class="overflow-y-scroll" style="width: calc(100% - 300px)">
        <div class="row mt-3 mx-3 text-biru">
            Hello Admin Orion
        </div>
        <div class="row border rounded-2 m-3">
            <div class="col-4 p-3 border-end">
                <p class="text-biru">Users</p>
                <h2>99</h2>
            </div>
            <div class="col-4 p-3">
                <p class="text-biru">Food</p>
                <h2>50</h2>
            </div>
            <div class="col-4 p-3 border-start">
                <p class="text-biru">Feedback</p>
                <h2>25</h2>
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
                        <li class="d-flex mb-2">
                            <img src="/img/profileimg.webp" class="rounded-circle" alt="" style="height: 48px">
                            <div class="d-flex flex-column ms-2">
                                <p class="m-0 fs-6">Muhamad Ali Imron</p>
                                <p class="m-0 fs-12px" style="color: #898989">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellat!</p>
                            </div>
                        </li>
                        <li class="d-flex mb-2">
                            <img src="/img/profileimg.webp" class="rounded-circle" alt="" style="height: 48px">
                            <div class="d-flex flex-column ms-2">
                                <p class="m-0 fs-6">Muhamad Ali Imron</p>
                                <p class="m-0 fs-12px" style="color: #898989">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellat!</p>
                            </div>
                        </li>
                        <li class="d-flex mb-2">
                            <img src="/img/profileimg.webp" class="rounded-circle" alt="" style="height: 48px">
                            <div class="d-flex flex-column ms-2">
                                <p class="m-0 fs-6">Muhamad Ali Imron</p>
                                <p class="m-0 fs-12px" style="color: #898989">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellat!</p>
                            </div>
                        </li>
                        <li class="d-flex mb-2">
                            <img src="/img/profileimg.webp" class="rounded-circle" alt="" style="height: 48px">
                            <div class="d-flex flex-column ms-2">
                                <p class="m-0 fs-6">Muhamad Ali Imron</p>
                                <p class="m-0 fs-12px" style="color: #898989">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellat!</p>
                            </div>
                        </li>
                        <li class="d-flex mb-2">
                            <img src="/img/profileimg.webp" class="rounded-circle" alt="" style="height: 48px">
                            <div class="d-flex flex-column ms-2">
                                <p class="m-0 fs-6">Muhamad Ali Imron</p>
                                <p class="m-0 fs-12px" style="color: #898989">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellat!</p>
                            </div>
                        </li>
                        <li class="d-flex mb-2">
                            <img src="/img/profileimg.webp" class="rounded-circle" alt="" style="height: 48px">
                            <div class="d-flex flex-column ms-2">
                                <p class="m-0 fs-6">Muhamad Ali Imron</p>
                                <p class="m-0 fs-12px" style="color: #898989">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellat!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection