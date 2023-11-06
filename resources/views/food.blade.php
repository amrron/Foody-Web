@extends('layouts.main')

@section('container')

<main class="py-4" style="margin-top: 100px">

    <section class="container-lg min-vh-100 mt-3 p-3">
        <div class="bg-pink rounded-3 w-100 py-5 px-4 d-flex flex-column align-items-center mb-3">
            <h5 class="text-center fs-1 mb-3">
                Cari Data Makanan yang <br>Diinginkan pada Foody
            </h5>
            <form action="" class="w-50 bg-biru-muda d-flex justify-content-between align-items-center rounded-3" style="height: 40px" id="cari-makanan">
                <label for="keyword" class="mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 26 26" fill="none">
                        <path d="M25 25L19.3335 19.3234L25 25ZM22.4737 11.7368C22.4737 14.5844 21.3425 17.3154 19.3289 19.3289C17.3154 21.3425 14.5844 22.4737 11.7368 22.4737C8.88925 22.4737 6.1583 21.3425 4.14475 19.3289C2.1312 17.3154 1 14.5844 1 11.7368C1 8.88925 2.1312 6.1583 4.14475 4.14475C6.1583 2.1312 8.88925 1 11.7368 1C14.5844 1 17.3154 2.1312 19.3289 4.14475C21.3425 6.1583 22.4737 8.88925 22.4737 11.7368V11.7368Z" stroke="#131049" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </label>
                <input type="text" name="search" id="keyword" class="bg-biru-muda w-100" placeholder="Nama makanan..." value="{{ request('search') }}" style="outline: none">
                <button type="submit" class="h-100 bg-biru text-biru-muda rounded-end"><i class="fa-solid fa-paper-plane mx-3"></i></button>
            </form>
        </div>

        @if(!request("search"))
        <h2 class="my-3 fw-normal">Kategori</h2>
        <div class="row">
            <swiper-container class="mySwiper" navigation="false" space-between="20" slides-per-view="auto">
                <swiper-slide>
                    <a href="/makanan?kategori=rendah-lemak" class="bg-biru-muda rounded-2 p-3" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru">Rendah Lemak</p>
                        <img src="/img/low-fat.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="/makanan?kategori=tinggi-lemak" class="bg-pink rounded-2 p-3" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru">Tinggi Lemak</p>
                        <img src="/img/low-fat.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="/makanan?kategori=rendah-protein" class="bg-biru-muda rounded-2 p-3" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru">Rendah Protein</p>
                        <img src="/img/high-protein.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="/makanan?kategori=tinggi-protein" class="bg-pink rounded-2 p-3" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru">Tinggi Protein</p>
                        <img src="/img/high-protein.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="/makanan?kategori=rendah-karbohidrat" class="bg-biru-muda rounded-2 p-3" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru">Rendah Karbohidrat</p>
                        <img src="/img/low-carbo.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="/makanan?kategori=tinggi-karbohidrat" class="bg-pink rounded-2 p-3" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru">Tinggi Karbohidrat</p>
                        <img src="/img/low-carbo.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
            </swiper-container>
        </div>
        @endif

        <h2 class="my-3 fw-normal">Makanan</h2>

        <div class="row">
            @if($makanan->count())
            @foreach($makanan as $food)
            <div class="col-lg-4 col-sm-6 mb-3">
                <div class="makanan bordered rounded-2 bg-biru-muda p-3">
                    <img src="{{ $food->gambar }}" class="w-100 rounded-2" alt="">
                    <div class="">
                        <h5>{{ $food->nama }}</h5>
                        <a href="/makanan/{{ $food->slug }}" class="text-biru">Lihat detail <svg xmlns="http://www.w3.org/2000/svg" width="10" height="4" viewBox="0 0 10 4" fill="none">
                            <path d="M0.698242 1.646C0.560171 1.646 0.448242 1.75792 0.448242 1.896C0.448242 2.03407 0.560171 2.146 0.698242 2.146V1.646ZM9.32203 2.07277C9.41966 1.97514 9.41966 1.81685 9.32203 1.71922L7.73104 0.128229C7.63341 0.030598 7.47511 0.030598 7.37748 0.128229C7.27985 0.22586 7.27985 0.384151 7.37748 0.481783L8.7917 1.896L7.37748 3.31021C7.27985 3.40784 7.27985 3.56613 7.37748 3.66376C7.47511 3.76139 7.63341 3.76139 7.73104 3.66376L9.32203 2.07277ZM0.698242 2.146H9.14525V1.646H0.698242V2.146Z" fill="#131049"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p class="text-center fs-4 m-0 opacity-50">Makanan tidak ditemukan</p>
            @endif
        </div>
    </section>

</main>

@endsection
