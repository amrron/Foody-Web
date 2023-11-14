@extends('layouts.main')

@section('container')
<section class="py-5" style="margin-top: 100px;">
    @if(!$pagination)
    <div class="container m-auto pb-1">
        <div class="row align-items-center">
            <h1 class="text-center fw-bolder">Catatanku</h1>
            @foreach($warning as $warn)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <svg width="16" height="16" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>
                <strong>Konsumsi {{ $warn }} telah melebihi batas harian!</strong> Pilih makanan yang rendah {{ $warn }}!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
            <swiper-container class="mySwiper" navigation="true" space-between="20" slides-per-view="auto">
                <swiper-slide>
                    <div class="" style="min-width: 320px">
                        <div class="card py-4 pink mt-3 mb-3 border border-0">
                            <div class="card-body text-center">
                                <img src="/img/morning.svg" class="w-50" alt="">
                                <h5 class="card-title display-6 fw-bold">Pagi</h5>
                                <p class="card-text fw-medium">00.00 - 09.00</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#modal-pagi">
                                    <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.71585 4.77894C8.71585 4.26195 8.61402 3.75002 8.41617 3.27238C8.21833 2.79474 7.92834 2.36075 7.56277 1.99518C7.1972 1.62961 6.76321 1.33962 6.28557 1.14178C5.80793 0.943931 5.296 0.842102 4.77901 0.842102C4.26201 0.842102 3.75008 0.943931 3.27244 1.14178C2.7948 1.33962 2.36081 1.62961 1.99524 1.99518C1.62967 2.36075 1.33968 2.79474 1.14184 3.27238C0.943992 3.75002 0.842163 4.26195 0.842163 4.77894C0.842163 5.82306 1.25694 6.82441 1.99524 7.56271C2.73354 8.30101 3.73489 8.71579 4.77901 8.71579C5.82312 8.71579 6.82447 8.30101 7.56277 7.56271C8.30107 6.82441 8.71585 5.82306 8.71585 4.77894ZM5.1369 5.13684L5.13762 6.92918C5.13762 7.02409 5.09991 7.11513 5.03279 7.18225C4.96567 7.24936 4.87464 7.28707 4.77972 7.28707C4.6848 7.28707 4.59377 7.24936 4.52665 7.18225C4.45953 7.11513 4.42183 7.02409 4.42183 6.92918V5.13684H2.62877C2.53385 5.13684 2.44282 5.09913 2.3757 5.03201C2.30859 4.9649 2.27088 4.87386 2.27088 4.77894C2.27088 4.68402 2.30859 4.59299 2.3757 4.52587C2.44282 4.45876 2.53385 4.42105 2.62877 4.42105H4.42111V2.63158C4.42111 2.53666 4.45882 2.44562 4.52594 2.37851C4.59305 2.31139 4.68409 2.27368 4.77901 2.27368C4.87392 2.27368 4.96496 2.31139 5.03207 2.37851C5.09919 2.44562 5.1369 2.53666 5.1369 2.63158V4.42105H6.92852C7.02344 4.42105 7.11447 4.45876 7.18159 4.52587C7.24871 4.59299 7.28642 4.68402 7.28642 4.77894C7.28642 4.87386 7.24871 4.9649 7.18159 5.03201C7.11447 5.09913 7.02344 5.13684 6.92852 5.13684H5.1369ZM12.8316 3.34737H9.20759C9.08519 2.96918 8.91463 2.60832 8.7001 2.27368H12.8316C13.4486 2.27368 14.0403 2.51877 14.4766 2.95504C14.9129 3.39131 15.158 3.98302 15.158 4.6V9.52391C15.1578 9.9508 14.9881 10.3602 14.6862 10.662L10.6628 14.6862C10.5132 14.8357 10.3357 14.9544 10.1403 15.0353C9.9449 15.1162 9.73547 15.1579 9.52397 15.1579H4.60006C3.98308 15.1579 3.39137 14.9128 2.9551 14.4765C2.51884 14.0403 2.27374 13.4486 2.27374 12.8316V8.70004C2.60515 8.91263 2.96591 9.0837 3.34743 9.20753V12.8316C3.34743 13.523 3.90861 14.0842 4.60006 14.0842H9.43164V11.7579C9.4316 11.1637 9.65894 10.592 10.067 10.1601C10.4751 9.72817 11.033 9.4688 11.6262 9.43515L11.758 9.43158H14.0843V4.6C14.0843 4.26778 13.9523 3.94917 13.7174 3.71425C13.4825 3.47934 13.1639 3.34737 12.8316 3.34737ZM13.3248 10.5053H11.758C11.4435 10.5053 11.1405 10.6236 10.9092 10.8367C10.678 11.0498 10.5353 11.3421 10.5096 11.6555L10.5053 11.7579V13.3248L13.3248 10.5053Z" fill="#D9F4FF"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="" style="min-width: 320px">
                        <div class="card py-4 biru mt-3 mb-3 border border-0">
                            <div class="card-body text-center">
                                <img src="/img/afternoon.svg" class="w-50" alt="">
                                <h5 class="card-title display-6 fw-bold">Siang</h5>
                                <p class="card-text fw-medium">10.00 - 14.00</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#modal-siang">
                                    <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.71585 4.77894C8.71585 4.26195 8.61402 3.75002 8.41617 3.27238C8.21833 2.79474 7.92834 2.36075 7.56277 1.99518C7.1972 1.62961 6.76321 1.33962 6.28557 1.14178C5.80793 0.943931 5.296 0.842102 4.77901 0.842102C4.26201 0.842102 3.75008 0.943931 3.27244 1.14178C2.7948 1.33962 2.36081 1.62961 1.99524 1.99518C1.62967 2.36075 1.33968 2.79474 1.14184 3.27238C0.943992 3.75002 0.842163 4.26195 0.842163 4.77894C0.842163 5.82306 1.25694 6.82441 1.99524 7.56271C2.73354 8.30101 3.73489 8.71579 4.77901 8.71579C5.82312 8.71579 6.82447 8.30101 7.56277 7.56271C8.30107 6.82441 8.71585 5.82306 8.71585 4.77894ZM5.1369 5.13684L5.13762 6.92918C5.13762 7.02409 5.09991 7.11513 5.03279 7.18225C4.96567 7.24936 4.87464 7.28707 4.77972 7.28707C4.6848 7.28707 4.59377 7.24936 4.52665 7.18225C4.45953 7.11513 4.42183 7.02409 4.42183 6.92918V5.13684H2.62877C2.53385 5.13684 2.44282 5.09913 2.3757 5.03201C2.30859 4.9649 2.27088 4.87386 2.27088 4.77894C2.27088 4.68402 2.30859 4.59299 2.3757 4.52587C2.44282 4.45876 2.53385 4.42105 2.62877 4.42105H4.42111V2.63158C4.42111 2.53666 4.45882 2.44562 4.52594 2.37851C4.59305 2.31139 4.68409 2.27368 4.77901 2.27368C4.87392 2.27368 4.96496 2.31139 5.03207 2.37851C5.09919 2.44562 5.1369 2.53666 5.1369 2.63158V4.42105H6.92852C7.02344 4.42105 7.11447 4.45876 7.18159 4.52587C7.24871 4.59299 7.28642 4.68402 7.28642 4.77894C7.28642 4.87386 7.24871 4.9649 7.18159 5.03201C7.11447 5.09913 7.02344 5.13684 6.92852 5.13684H5.1369ZM12.8316 3.34737H9.20759C9.08519 2.96918 8.91463 2.60832 8.7001 2.27368H12.8316C13.4486 2.27368 14.0403 2.51877 14.4766 2.95504C14.9129 3.39131 15.158 3.98302 15.158 4.6V9.52391C15.1578 9.9508 14.9881 10.3602 14.6862 10.662L10.6628 14.6862C10.5132 14.8357 10.3357 14.9544 10.1403 15.0353C9.9449 15.1162 9.73547 15.1579 9.52397 15.1579H4.60006C3.98308 15.1579 3.39137 14.9128 2.9551 14.4765C2.51884 14.0403 2.27374 13.4486 2.27374 12.8316V8.70004C2.60515 8.91263 2.96591 9.0837 3.34743 9.20753V12.8316C3.34743 13.523 3.90861 14.0842 4.60006 14.0842H9.43164V11.7579C9.4316 11.1637 9.65894 10.592 10.067 10.1601C10.4751 9.72817 11.033 9.4688 11.6262 9.43515L11.758 9.43158H14.0843V4.6C14.0843 4.26778 13.9523 3.94917 13.7174 3.71425C13.4825 3.47934 13.1639 3.34737 12.8316 3.34737ZM13.3248 10.5053H11.758C11.4435 10.5053 11.1405 10.6236 10.9092 10.8367C10.678 11.0498 10.5353 11.3421 10.5096 11.6555L10.5053 11.7579V13.3248L13.3248 10.5053Z" fill="#D9F4FF"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="" style="min-width: 320px">
                        <div class="card py-4 pink mt-3 mb-3 border border-0">
                            <div class="card-body text-center">
                                <img src="/img/evening.svg" class="w-50" alt="">
                                <h5 class="card-title display-6 fw-bold">Sore</h5>
                                <p class="card-text fw-medium">15.00 - 18.00</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#modal-sore">
                                    <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.71585 4.77894C8.71585 4.26195 8.61402 3.75002 8.41617 3.27238C8.21833 2.79474 7.92834 2.36075 7.56277 1.99518C7.1972 1.62961 6.76321 1.33962 6.28557 1.14178C5.80793 0.943931 5.296 0.842102 4.77901 0.842102C4.26201 0.842102 3.75008 0.943931 3.27244 1.14178C2.7948 1.33962 2.36081 1.62961 1.99524 1.99518C1.62967 2.36075 1.33968 2.79474 1.14184 3.27238C0.943992 3.75002 0.842163 4.26195 0.842163 4.77894C0.842163 5.82306 1.25694 6.82441 1.99524 7.56271C2.73354 8.30101 3.73489 8.71579 4.77901 8.71579C5.82312 8.71579 6.82447 8.30101 7.56277 7.56271C8.30107 6.82441 8.71585 5.82306 8.71585 4.77894ZM5.1369 5.13684L5.13762 6.92918C5.13762 7.02409 5.09991 7.11513 5.03279 7.18225C4.96567 7.24936 4.87464 7.28707 4.77972 7.28707C4.6848 7.28707 4.59377 7.24936 4.52665 7.18225C4.45953 7.11513 4.42183 7.02409 4.42183 6.92918V5.13684H2.62877C2.53385 5.13684 2.44282 5.09913 2.3757 5.03201C2.30859 4.9649 2.27088 4.87386 2.27088 4.77894C2.27088 4.68402 2.30859 4.59299 2.3757 4.52587C2.44282 4.45876 2.53385 4.42105 2.62877 4.42105H4.42111V2.63158C4.42111 2.53666 4.45882 2.44562 4.52594 2.37851C4.59305 2.31139 4.68409 2.27368 4.77901 2.27368C4.87392 2.27368 4.96496 2.31139 5.03207 2.37851C5.09919 2.44562 5.1369 2.53666 5.1369 2.63158V4.42105H6.92852C7.02344 4.42105 7.11447 4.45876 7.18159 4.52587C7.24871 4.59299 7.28642 4.68402 7.28642 4.77894C7.28642 4.87386 7.24871 4.9649 7.18159 5.03201C7.11447 5.09913 7.02344 5.13684 6.92852 5.13684H5.1369ZM12.8316 3.34737H9.20759C9.08519 2.96918 8.91463 2.60832 8.7001 2.27368H12.8316C13.4486 2.27368 14.0403 2.51877 14.4766 2.95504C14.9129 3.39131 15.158 3.98302 15.158 4.6V9.52391C15.1578 9.9508 14.9881 10.3602 14.6862 10.662L10.6628 14.6862C10.5132 14.8357 10.3357 14.9544 10.1403 15.0353C9.9449 15.1162 9.73547 15.1579 9.52397 15.1579H4.60006C3.98308 15.1579 3.39137 14.9128 2.9551 14.4765C2.51884 14.0403 2.27374 13.4486 2.27374 12.8316V8.70004C2.60515 8.91263 2.96591 9.0837 3.34743 9.20753V12.8316C3.34743 13.523 3.90861 14.0842 4.60006 14.0842H9.43164V11.7579C9.4316 11.1637 9.65894 10.592 10.067 10.1601C10.4751 9.72817 11.033 9.4688 11.6262 9.43515L11.758 9.43158H14.0843V4.6C14.0843 4.26778 13.9523 3.94917 13.7174 3.71425C13.4825 3.47934 13.1639 3.34737 12.8316 3.34737ZM13.3248 10.5053H11.758C11.4435 10.5053 11.1405 10.6236 10.9092 10.8367C10.678 11.0498 10.5353 11.3421 10.5096 11.6555L10.5053 11.7579V13.3248L13.3248 10.5053Z" fill="#D9F4FF"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="" style="min-width: 320px">
                        <div class="card py-4 biru mt-3 mb-3 border border-0">
                            <div class="card-body text-center">
                                <img src="/img/night.svg" class="w-50" alt="">
                                <h5 class="card-title display-6 fw-bold">Malam</h5>
                                <p class="card-text fw-medium">19.00 - 23.00</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#modal-malam">
                                    <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.71585 4.77894C8.71585 4.26195 8.61402 3.75002 8.41617 3.27238C8.21833 2.79474 7.92834 2.36075 7.56277 1.99518C7.1972 1.62961 6.76321 1.33962 6.28557 1.14178C5.80793 0.943931 5.296 0.842102 4.77901 0.842102C4.26201 0.842102 3.75008 0.943931 3.27244 1.14178C2.7948 1.33962 2.36081 1.62961 1.99524 1.99518C1.62967 2.36075 1.33968 2.79474 1.14184 3.27238C0.943992 3.75002 0.842163 4.26195 0.842163 4.77894C0.842163 5.82306 1.25694 6.82441 1.99524 7.56271C2.73354 8.30101 3.73489 8.71579 4.77901 8.71579C5.82312 8.71579 6.82447 8.30101 7.56277 7.56271C8.30107 6.82441 8.71585 5.82306 8.71585 4.77894ZM5.1369 5.13684L5.13762 6.92918C5.13762 7.02409 5.09991 7.11513 5.03279 7.18225C4.96567 7.24936 4.87464 7.28707 4.77972 7.28707C4.6848 7.28707 4.59377 7.24936 4.52665 7.18225C4.45953 7.11513 4.42183 7.02409 4.42183 6.92918V5.13684H2.62877C2.53385 5.13684 2.44282 5.09913 2.3757 5.03201C2.30859 4.9649 2.27088 4.87386 2.27088 4.77894C2.27088 4.68402 2.30859 4.59299 2.3757 4.52587C2.44282 4.45876 2.53385 4.42105 2.62877 4.42105H4.42111V2.63158C4.42111 2.53666 4.45882 2.44562 4.52594 2.37851C4.59305 2.31139 4.68409 2.27368 4.77901 2.27368C4.87392 2.27368 4.96496 2.31139 5.03207 2.37851C5.09919 2.44562 5.1369 2.53666 5.1369 2.63158V4.42105H6.92852C7.02344 4.42105 7.11447 4.45876 7.18159 4.52587C7.24871 4.59299 7.28642 4.68402 7.28642 4.77894C7.28642 4.87386 7.24871 4.9649 7.18159 5.03201C7.11447 5.09913 7.02344 5.13684 6.92852 5.13684H5.1369ZM12.8316 3.34737H9.20759C9.08519 2.96918 8.91463 2.60832 8.7001 2.27368H12.8316C13.4486 2.27368 14.0403 2.51877 14.4766 2.95504C14.9129 3.39131 15.158 3.98302 15.158 4.6V9.52391C15.1578 9.9508 14.9881 10.3602 14.6862 10.662L10.6628 14.6862C10.5132 14.8357 10.3357 14.9544 10.1403 15.0353C9.9449 15.1162 9.73547 15.1579 9.52397 15.1579H4.60006C3.98308 15.1579 3.39137 14.9128 2.9551 14.4765C2.51884 14.0403 2.27374 13.4486 2.27374 12.8316V8.70004C2.60515 8.91263 2.96591 9.0837 3.34743 9.20753V12.8316C3.34743 13.523 3.90861 14.0842 4.60006 14.0842H9.43164V11.7579C9.4316 11.1637 9.65894 10.592 10.067 10.1601C10.4751 9.72817 11.033 9.4688 11.6262 9.43515L11.758 9.43158H14.0843V4.6C14.0843 4.26778 13.9523 3.94917 13.7174 3.71425C13.4825 3.47934 13.1639 3.34737 12.8316 3.34737ZM13.3248 10.5053H11.758C11.4435 10.5053 11.1405 10.6236 10.9092 10.8367C10.678 11.0498 10.5353 11.3421 10.5096 11.6555L10.5053 11.7579V13.3248L13.3248 10.5053Z" fill="#D9F4FF"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </div>
    @endif
</section>

@error('makanan_id')
<div id="validationServer04Feedback" class="invalid-feedback">
    {{ $message }}
</div>
@enderror
@error('waktu')
<div id="validationServer04Feedback" class="invalid-feedback">
    {{ $message }}
</div>
@enderror
@error('jumlah')
<div id="validationServer04Feedback" class="invalid-feedback">
    {{ $message }}
</div>
@enderror

<section class="py-2 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                <a href="/catatanku" class="btn btn-primary border border-0 navy text-biru-muda">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 2.84208L2.10526 3.94734L4.31579 1.73682M1 7.99997L2.10526 9.10524L4.31579 6.89471M1 13.1579L2.10526 14.2631L4.31579 12.0526M6.89474 7.99997H15H6.89474ZM6.89474 13.1579H15H6.89474ZM6.89474 2.84208H15H6.89474Z" fill="#D9F4FF"/>
                        <path d="M1 2.84208L2.10526 3.94734L4.31579 1.73682M1 7.99997L2.10526 9.10524L4.31579 6.89471M1 13.1579L2.10526 14.2631L4.31579 12.0526M6.89474 7.99997H15M6.89474 13.1579H15M6.89474 2.84208H15" stroke="#D9F4FF" stroke-width="1.76471" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Recents
                </a>
                <a href="/catatanku/history" class="btn btn-primary border border-0 biru">
                    <svg width="16" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.67607 0.46264C5.41246 0.34537 1.91949 3.77133 1.91949 8.00143H0.420107C0.0431675 8.00143 -0.141114 8.45376 0.126932 8.71343L2.46396 11.0588C2.63149 11.2264 2.89116 11.2264 3.05869 11.0588L5.39571 8.71343C5.45359 8.65438 5.4927 8.57952 5.50811 8.49828C5.52351 8.41704 5.51453 8.33305 5.48228 8.25691C5.45003 8.18077 5.39596 8.11588 5.3269 8.07041C5.25783 8.02495 5.17685 8.00095 5.09416 8.00143H3.59478C3.59478 4.73462 6.25848 2.09605 9.54205 2.13793C12.6581 2.17981 15.2799 4.80163 15.3218 7.91767C15.3637 11.1929 12.7251 13.8649 9.45828 13.8649C8.10968 13.8649 6.86159 13.4042 5.87317 12.6252C5.71273 12.4988 5.51143 12.4358 5.30756 12.4482C5.10369 12.4605 4.91148 12.5474 4.76748 12.6922C4.41567 13.044 4.4408 13.6388 4.83449 13.9403C6.15053 14.9811 7.78046 15.545 9.45828 15.5402C13.6884 15.5402 17.1143 12.0473 16.9971 7.78365C16.8882 3.8551 13.6046 0.571534 9.67607 0.46264ZM9.24887 4.65086C8.90544 4.65086 8.62064 4.93566 8.62064 5.27909V8.36162C8.62064 8.6548 8.77979 8.93122 9.03109 9.08199L11.6445 10.6316C11.9461 10.8075 12.3314 10.707 12.5073 10.4138C12.6832 10.1123 12.5827 9.72698 12.2895 9.55107L9.8771 8.1187V5.27071C9.8771 4.93566 9.59231 4.65086 9.24887 4.65086Z" fill="#131049"/>
                    </svg>                        
                    History
                </a>
            </div>
        </div>
        <div class="row">
            
            @if(!$pagination)
            @foreach($catatans as $catatan)
            <div class="col-lg-4 col-12-sm container-catatan-makanan p-2">
                <div class="card card-catatan-makanan" style="border-radius: 10px;">
                    <div class="card-body overflow-hidden">
                        <h5 class="card-title">{{ $catatan->makanan->nama }} : {{ $catatan->jumlah }} porsi</h5>
                        <p class="opacity-50">{{ date('H:i', strtotime($catatan->waktu)) }}</p>
                        <a href="/catatanku/delete/{{ $catatan->id }}" class="delete-catatan text-biru" style="position: absolute; right: 20px; bottom: 10px; font-size: 20px"><i class="fa-solid fa-trash"></i></a>
                        <table>
                            <tr>
                                <td>Karbohidrat</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->karbohidrat * $catatan->jumlah }} g</td>
                            </tr>
                            <tr>
                                <td>Protein</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->protein * $catatan->jumlah }} g</td>
                            </tr>
                            <tr>
                                <td>Garam</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->garam * $catatan->jumlah }} g</td>
                            </tr>
                            <tr>
                                <td>Gula</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->gula * $catatan->jumlah }} g</td>
                            </tr>
                            <tr>
                                <td>Lemak</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->lemak * $catatan->jumlah }} g</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <h5 class="text-center">Total Konsumsi Kandungan Makanan</h5>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="progres-catatan mb-1">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1">Karbohidrat</p>
                        <p class="mb-1">{{ round((auth()->user()->dailyKarbo / auth()->user()->batasKarbo) * 100) }}%</p>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progres-karbohidrat" style="width: {{ (auth()->user()->dailyKarbo / auth()->user()->batasKarbo) * 100 }}%"></div>
                    </div>
                    <p class="m-0 text-biru">{{ auth()->user()->dailyKarbo }}/{{ auth()->user()->batasKarbo }} g</p>
                </div>
                <div class="progres-catatan mb-1">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1">Protein</p>
                        <p class="mb-1">{{ round((auth()->user()->dailyProtein / auth()->user()->batasProtein) * 100) }}%</p>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progres-protein" style="width: {{ (auth()->user()->dailyProtein / auth()->user()->batasProtein) * 100 }}%"></div>
                    </div>
                    <p class="m-0 text-biru">{{ auth()->user()->dailyProtein }}/{{ auth()->user()->batasProtein }} g</p>
                </div>
                <div class="progres-catatan mb-1">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1">Garam</p>
                        <p class="mb-1">{{ round((auth()->user()->dailyGaram / auth()->user()->batasGaram) * 100) }}%</p>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progres-garam" style="width: {{ (auth()->user()->dailyGaram / auth()->user()->batasGaram) * 100 }}%"></div>
                    </div>
                    <p class="m-0 text-biru">{{ auth()->user()->dailyGaram }}/{{ auth()->user()->batasGaram }} g</p>
                </div>
                <div class="progres-catatan mb-1">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1">Gula</p>
                        <p class="mb-1">{{ round((auth()->user()->dailyGula / auth()->user()->batasGula) * 100) }}%</p>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progres-gula" style="width: {{ (auth()->user()->dailyGula / auth()->user()->batasGula) * 100 }}%"></div>
                    </div>
                    <p class="m-0 text-biru">{{ auth()->user()->dailyGula }}/{{ auth()->user()->batasGula }} g</p>
                </div>
                <div class="progres-catatan mb-1">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1">Lemak</p>
                        <p class="mb-1">{{ round((auth()->user()->dailyLemak / auth()->user()->batasLemak) * 100) }}%</p>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progres-lemak" style="width: {{ (auth()->user()->dailyLemak / auth()->user()->batasLemak) * 100 }}%"></div>
                    </div>
                    <p class="m-0 text-biru">{{ auth()->user()->dailyLemak }}/{{ auth()->user()->batasLemak }} g</p>
                </div>
            </div>
            @endif

            @if($pagination)
            @foreach($catatans as $tanggal => $catatanPerTanggal)
            <div class="col-12 px-2 py-3">
                <div class="border rounded-3 p-2">
                    <div class="d-flex justify-content-between align-items-center text-biru">
                        <p class="m-0 fw-bolder">{{ $catatanPerTanggal[0]->hari }}</p>
                        <p class="m-0 fw-bolder">{{ $tanggal }}</p>
                    </div>
                </div>
            </div>
            @foreach($catatanPerTanggal as $catatan)
            <div class="col-lg-4 col-12-sm container-catatan-makanan p-2">
                <div class="card card-catatan-makanan" style="border-radius: 10px;">
                    <div class="card-body overflow-hidden">
                        <h5 class="card-title text-nowrap">{{ $catatan->makanan->nama }} : {{ $catatan->jumlah }} porsi</h5>
                        <p class="opacity-50">{{ date('H:i', strtotime($catatan->waktu)) }}</p>
                        <table>
                            <tr>
                                <td>Karbohidrat</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->karbohidrat * $catatan->jumlah }} g</td>
                            </tr>
                            <tr>
                                <td>Protein</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->protein * $catatan->jumlah }} g</td>
                            </tr>
                            <tr>
                                <td>Garam</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->garam * $catatan->jumlah }} g</td>
                            </tr>
                            <tr>
                                <td>Gula</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->gula * $catatan->jumlah }} g</td>
                            </tr>
                            <tr>
                                <td>Lemak</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                <td>{{ $catatan->makanan->lemak * $catatan->jumlah }} g</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
            @endif
            
        </div>
    </div>
</section>

@if(!$pagination)
<!-- Modal Pagi -->
<div class="modal fade" id="modal-pagi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="" method="post" class="modal-content">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pagi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-group mb-3">
                                <select class="form-select form-select-sm pilih-makanan" name="makanan_id" id="select_pagi" required>
                                    <option value="" selected>Pilih Makanan</option>
                                    @foreach($makanans as $makanan)
                                        <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <select class="form-select form-select-sm mb-3" name="waktu" id="waktu_pagi" aria-label="Small select example" required>
                                <option value="">Time</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group input-group-sm mb-3">
                                {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span> --}}
                                <input type="number" class="form-control" placeholder="Jumlah" aria-label="Sizing example input" name="jumlah" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary navy">Save changes</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Siang -->
<div class="modal fade" id="modal-sore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="" method="post" class="modal-content">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sore</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-group mb-3">
                                
                                <select class="form-select form-select-sm pilih-makanan" name="makanan_id" id="select_sore" required>
                                    <option value="" selected>Pilih Makanan</option>
                                    
                                    @foreach($makanans as $makanan)
                                        <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <select class="form-select form-select-sm mb-3" name="waktu" id="waktu_sore" aria-label="Small select example" required>
                                <option value="">Time</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group input-group-sm mb-3">
                                {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span> --}}
                                <input type="number" class="form-control" placeholder="Jumlah" aria-label="Sizing example input" name="jumlah" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary navy">Save changes</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Sore -->
<div class="modal fade" id="modal-siang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="" method="post" class="modal-content">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Siang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-group mb-3">
                                
                                <select class="form-select form-select-sm pilih-makanan" name="makanan_id" id="select_siang" required>
                                    <option value="" selected>Pilih Makanan</option>
                                    
                                    @foreach($makanans as $makanan)
                                        <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <select class="form-select form-select-sm mb-3" name="waktu" id="waktu_siang" aria-label="Small select example" required>
                                <option value="" selected>Time</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group input-group-sm mb-3">
                                {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span> --}}
                                <input type="number" class="form-control" placeholder="Jumlah" aria-label="Sizing example input" name="jumlah" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary navy">Save changes</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Malam -->
<div class="modal fade" id="modal-malam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="" method="post" class="modal-content">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Malam</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-group mb-3">
                                
                                <select class="form-select form-select-sm pilih-makanan" name="makanan_id" id="select_malam" required>
                                    <option value="" selected>Pilih Makanan</option>
                                    
                                    @foreach($makanans as $makanan)
                                        <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <select class="form-select form-select-sm mb-3" name="waktu" id="waktu_malam" aria-label="Small select example" required>
                                <option valuselected>Time</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group input-group-sm mb-3">
                                {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span> --}}
                                <input type="number" class="form-control" placeholder="Jumlah" aria-label="Sizing example input" name="jumlah" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary navy">Save changes</button>
            </div>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  const data = {
  labels: ['Karbohidrat', 'Protein', 'Garam', 'Gula', 'Lemak'],
  datasets: [
    {
      label: 'Dataset 1',
      data: [{{ auth()->user()->dailyKarbo }}, 
            {{ auth()->user()->dailyProtein }}, 
            {{ auth()->user()->dailyGaram }},
            {{ auth()->user()->dailyGula }}, 
            {{ auth()->user()->dailyLemak }}],
      backgroundColor: ['#17184f', '#dbf3fb', '#fdced0', '#111', '#6C6A85'],
    }
  ]
};

  const config = {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
      }
    }
  },
};

  new Chart(ctx, config);
</script>
<script>
    $(document).ready(function(){
        $('.delete-catatan').click(function(e) {
            e.preventDefault();

            var deleteUrl = $(this).attr('href');
            var itemToDelete = $(this).closest('.container-catatan-makanan');

            Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak bisa mengembalikan data setelah dihapus",
            showCancelButton: true,
            confirmButtonColor: '#131049',
            cancelButtonColor: '#fdced0',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: deleteUrl,
                    data: {
                        _token : '{{ csrf_token() }}'
                    },
                    success: function(data){
                        Swal.fire('Catatan berhasil dihapus', data.message, 'success');

                        itemToDelete.remove();
                    },
                    error: function (error) {
                        Swal.fire('Error!', 'Something went wrong!', 'error');
                        console.error(error);
                    }
                });
            }
            })
        })
    });
</script>
@endif
@endsection
