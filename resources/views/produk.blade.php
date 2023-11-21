@extends('layouts.main')

@section('container')

<main class="py-4" style="margin-top: 100px">

    <section class="container-lg min-vh-100 mt-3 p-3">
        <div class="bg-pink rounded-3 w-100 py-5 px-4 d-flex flex-column align-items-center mb-3">
            <h5 class="text-center fs-1 mb-3 text-biru">
                Cari Produk sehat yang Ingin Anda Beli
            </h5>
            <form action="" class="w-50 bg-biru-muda d-flex justify-content-between align-items-center rounded-3" style="height: 40px" id="cari-makanan">
                <label for="keyword" class="mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 26 26" fill="none">
                        <path d="M25 25L19.3335 19.3234L25 25ZM22.4737 11.7368C22.4737 14.5844 21.3425 17.3154 19.3289 19.3289C17.3154 21.3425 14.5844 22.4737 11.7368 22.4737C8.88925 22.4737 6.1583 21.3425 4.14475 19.3289C2.1312 17.3154 1 14.5844 1 11.7368C1 8.88925 2.1312 6.1583 4.14475 4.14475C6.1583 2.1312 8.88925 1 11.7368 1C14.5844 1 17.3154 2.1312 19.3289 4.14475C21.3425 6.1583 22.4737 8.88925 22.4737 11.7368V11.7368Z" stroke="#131049" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </label>
                <input type="text" name="search" id="keyword" class="bg-biru-muda w-100" placeholder="Nama produk..." value="{{ request('search') }}" style="outline: none">
                <button type="submit" class="h-100 bg-biru text-biru-muda rounded-end"><i class="fa-solid fa-paper-plane mx-3"></i></button>
            </form>
        </div>

        <h2 class="my-3 fw-normal">Produk</h2>

        <div class="row">
            @if($produk->count())
            @foreach($produk as $prod)
            <div class="col-lg-6 mb-3">
                <div class="kartu" id="{{ $prod->id }}">
                    <h2 class="judul-kartu fs-20px text-center text-capitalize">{{ $prod->nama }}</h2>
                    <p class="deskripsi-kartu fs-13px pe-2">
                        {{ $prod->deskripsi }}
                    </p>
                    <div class="gambar-kartu d-flex align-items-center justify-content-center">
                        <img src="{{ str_contains($prod->gambar, "upload/") ? asset('storage/' . $prod->gambar) : $prod->gambar }}" alt="" class="rounded-3" style="width: 180px; height: 180px; object-fit: cover">
                    </div>
                    <div class="harga fs-13px">
                        <span>Price: </span>
                        <br>
                        <span>Rp{{ number_format($prod->harga, 0, ',', '.') }}</span>
                    </div>
                    <div class="tombol-kartu">
                        <a href="{{ $prod->link }}" class="tombol-beli-produk fs-13px text-center">Buy Product</a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p class="text-center fs-4 m-0 opacity-50 mt-5">Produk <strong>"{{ request('search') }}"</strong> tidak ditemukan</p>
            @endif
        </div>
    </section>

</main>

@endsection
