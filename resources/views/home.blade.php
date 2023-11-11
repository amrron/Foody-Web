@extends('layouts.main')

@section('container')  
    <main class="site-main" style="margin-top: 100px;">
    <!-- START BAGIAN BANNER -->
        <section class="bg-biru-muda py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h3 class="title-text text-biru fw-bold mt-5">FOODY</h3>
                        <h1 class="title-text text-biru fw-bold">Kesehatan Tubuh Membaik</h1>
                        <h4 class="title-text text-biru fw-medium">Solusi Untuk menjaga kesehatan Tubuh Anda</h4>
                        <div class="">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="#catatankuSection" class="bg-biru p-2 mt-3 text-biru-muda rounded-2" style="text-decoration: none;">Show more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 py-3 bg-biru-muda">
                        <img src="/img/banner1.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <svg viewBox="0 0 1535 401" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3_335)">
                <path d="M-69.0002 0H1535.44V72.6208C1535.44 72.6208 1555.3 276.13 1453.32 264.652C1356.87 253.796 1400.67 95.5554 1308.76 101.59C1234.92 106.438 1297.32 357.62 1192.5 323.185C1105.23 294.517 1128.18 173.508 1037.16 181.939C951.961 189.831 989.748 364.019 909.466 395.226C777.113 446.674 860.917 137.087 719.603 147.504C657.424 152.087 639.863 279.66 583.567 279.66C466.107 279.66 552.304 31.0096 442.837 52.9435C348.345 71.8771 452.207 431.645 304.971 372.699C215.92 337.048 256.95 198.883 178.465 181.939C99.9791 164.995 200.152 372.699 55.5728 372.699C53.1308 372.699 15.3773 370.588 12.9999 370.5C-338.774 357.439 -69.0002 0 -69.0002 0Z" fill="#D9F4FF"/>
                </g>
            </svg>
        </section>
    <!-- END BAGIAN BANNER -->
    <!-- START BAGIAN CATATANKU  -->
        <section class="site" id="catatankuSection">
            <div class="container">
                <div class="row" >
                    <div class="col-lg-6 col-md-12 site-title" style="margin-top: 100px;">
                        <h1 class="title-text text-biru fw-semibold" id="">Pilih waktu makan Anda untuk mencatat pola makan Anda dengan <strong class="fw-bold">Catatanku</strong></h1>
                        <p class="title-text text-biru">Anda dapat mencatat semua jenis makanan yang  dikonsumsi sepanjang hari. Anda juga dapat dengan cepat menambahkan makanan yang  dimakan</p>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="/catatanku" class="bg-biru-muda p-3 mt-3 text-biru rounded-2" style="text-decoration: none;">Try It</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="/img/catatan_page.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    <!-- END BAGIAN CATATANKU -->
    <!-- START BAGIAN RECORD MAKANAN -->
        <section class="record-makanan">
            <div class="">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="/img/record_page.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 p-3 text-center" style="margin-top: 200px;">
                        <h1 class="pt-5 fs-1 text-biru fw-semibold title-text fw-semibold">Catat dan Pantau BMI Anda dengan Mudah Bersama Foody</h1>
                        <div class="py-1 ">
                            <p class="text-biru fs-5">
                                Dengan fitur pencatatan BMI kami, Anda dapat dengan cepat memantau perubahan dalam perjalanan kesehatan Anda. Tidak perlu repot, cukup masukkan data berat dan tinggi tubuh Anda, dan "Foody" akan menghitung BMI Anda secara otomatis. Pantau perkembangan Anda menuju kehidupan sehat yang lebih baik!
                            </p>
                        </div>
                        <a href="/bmi" class="text-biru p-3 mt-3 bg-biru-muda rounded-2" style="text-decoration: none;">Try It</a>
                    </div>
                </div>
            </div>
        </section>
    <!-- END BAGIAN RECORD MAKANAN -->
    {{-- <!-- START BAGIAN TARGET -->
        <section class="site-target">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title" style="margin-top: 30px;">
                        <h1 class="title-text text-biru fw-semibold">Set your
                            <br>own targets.</h1>
                        <p class="title-text fs-5 text-biru">Lorem ipsum dolor sit amet consectetur. Netus turpis vestibulum pellentesque orci in nisl.
                             Lorem ipsum dolor sit amet consectetur. Netus turpis vestibulum 
                             pellentesque orci in nisl</p>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="" class="text-biru p-3 mt-3 bg-biru-muda rounded-2" style="text-decoration: none;">Download App</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="/img/target_page.png" alt="banner-img" class="img-fluid" style="width: 90%; margin-left: 80px;">
                    </div>
                </div>
            </div>
        </section> --}}
    </main>
    <main class="pt-5">
    <!-- END BAGIAN TARGET -->
    <!-- START BAGIAN BMI -->
    <section id="bmi" class="py-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row pt-5 text-navy">
                        <h2 class="fw-bold pt-5 display-6 ">BMI</h2>
                        <p>Body Massa Index</p>
                    </div>
                    <div class="row pt-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-navy">
                            <div class="card py-5 biru hov-navy mt-3 mb-3 border border-0">
                                <div class="card-body text-center">
                                    <span class="display-6"><i class="fas fa-light fa-mars fa-lg" style="color: #131049;"></i></span>
                                    <p class="card-text mt-3 fw-medium">Male</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text-navy">
                            <div class="card py-5 pink hov-navy mt-3 mb-3 border border-0">
                                <div class="card-body text-center">
                                    <span class="display-6"><i class="fas fa-light fa-venus fa-lg" style="color: #131049;"></i></span>
                                    <p class="card-text mt-3 fw-medium">Female</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-item-end">
                    <div class="card py-5 linear-1 mt-3 mb-3 border border-0 align-content-center w-100" style="background: var(--linear-1, linear-gradient(210deg, #FDCED0 10.95%, #D9F4FF 86.63%))">
                        <div class="card-body text-center">
                            <div class="container">
                                <div class="text-center">
                                    {{-- <div class="btn-group py-3" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-primary navy border border-0 hov-biru">Left</button>
                                        <button type="button" class="btn btn-primary biru border border-0 hov-navy">Right</button>
                                    </div> --}}
                                    <h1 class="text-biru">Hitung BMI Anda</h1>
                                </div>
                                <div class="row py-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="tinggi">
                                            <label for="floatingSelectGrid">Height (cm)</label>
                                        </div>
                                    </div>
                                        
                                </div>
                                <div class="row py-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="berat">
                                            <label for="floatingSelectGrid">Berat (kg)</label>
                                        </div>
                                    </div>
                                        
                                </div>
                                <div class="row py-3">
                                    <div class="text-center">
                                        <button class="btn btn-primary navy hov-pink border border-0" id="hitung" data-bs-toggle="modal" data-bs-target="#hasil-bmi">Calculate BMI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="hasil-bmi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hasil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- END BAGIAN BMI -->
    <!-- START BAGIAN HEALTHY -->
        <section>
            <div class="container-lg mb-5 pt-5 pb-5 d-flex align-items-center flex-column w-auto">
                <h1 class="fs-1 text-biru text-center fw-semibold mb-5 pb-4">Gaya Hidup Sehat</h1>
                <div class="card-container d-flex justify-content-center align-items-center flex-wrap w-100 m-auto">
                    <div class="card m-4" style="width: 268px; height: 354px; border: 0;">
                        <img src="img/olahraga.png" alt="">
                        <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                            <h5 class="text-biru m-0">Rutin Berolahraga</h5>
                        </div>
                    </div>
                    <div class="card m-4" style="width: 268px; height: 354px; border: 0;">
                        <img src="img/makansehat.png" alt="">
                        <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                            <h5 class="text-biru m-0">Konsumsi Makanan Sehat</h5>
                        </div>
                    </div>
                    <div class="card m-4" style="width: 268px; height: 354px; border: 0;">
                        <img src="img/istirahat.png" alt="">
                        <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                            <h5 class="text-biru m-0">Istirahat Yang Cukup</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- END BAGIAN HEALTHY -->
    <!-- START BAGIAN INGREDIENTS -->
        <section>
            <div class="container-lg mb-5 pt-5 pb-5 text-center">
                <h1 class="fs-1 text-biru text-center fw-semibold mb-5 pb-4">Kandungan makanan</h1>
                <swiper-container class="mySwiper" space-between="20" slides-per-view="auto">
                    <swiper-slide class="me-5">
                            <div class="card" style="width: 268px; height: 354px; border: 0;">
                                <img src="img/karbohidrat.png" alt="">
                                <div class="card-body d-flex pb-0 align-items-end justify-content-center">
                                    <h5 class="text-biru m-0">Karbohidrat</h5>
                                </div>
                            </div>
                    </swiper-slide>
                    <swiper-slide class="me-5">
                            <div class="card" style="width: 268px; height: 354px; border: 0;">
                                <img src="img/lemak.png" alt="">
                                <div class="card-body d-flex pb-0 align-items-end justify-content-center">
                                    <h5 class="text-biru m-0">Lemak</h5>
                                </div>
                            </div>
                    </swiper-slide>
                    <swiper-slide class="me-5">
                            <div class="card" style="width: 268px; height: 354px; border: 0;">
                                <img src="img/protein.png" alt="">
                                <div class="card-body d-flex pb-0 align-items-end justify-content-center">
                                    <h5 class="text-biru m-0">Protein</h5>
                                </div>
                            </div>
                    </swiper-slide>
                    <swiper-slide class="me-5">
                            <div class="card" style="width: 268px; height: 354px; border: 0;">
                                <img src="img/karbohidrat.png" alt="">
                                <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                                    <h5 class="text-biru">Gula</h5>
                                </div>
                            </div>
                    </swiper-slide>
                    <swiper-slide class="me-5">
                        <div class="card" style="width: 268px; height: 354px; border: 0;">
                            <img src="img/karbohidrat.png" alt="">
                            <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                                <h5 class="text-biru">Garam</h5>
                            </div>
                        </div>
                </swiper-slide>
                </swiper-container>

                <a href="/makanan" class="bg-biru text-biru-muda mb-5 mt-5 d-inline-flex" style="padding: 12px 30px; border-radius: 8px; text-decoration: none;">Learn More</a>
            </div>
        </section>
    <!-- END BAGIAN INGREDIENTS -->
    <!-- START BAGIAN REKOMENDASI -->
        <section class="section-recomendation pt-5 pb-5" style="padding: 0 12px;">
            <div class="container-lg recomendation mb-5 mt-5">
                <div class="row mb-4">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <h1 class="fs-64px fw-semibold fs-1">Rekomendasi Produk</h1>
                        <a href="/produk" class="fs-4 view-all text-end">View All</a>
                    </div>
                </div>
                <swiper-container class="mySwiper" navigation="true" space-between="20" slides-per-view="auto">
                    @foreach($produk as $prod)
                    <swiper-slide>
                        <div class="kartu">
                            <h2 class="judul-kartu fs-20px text-center ">{{ $prod->nama }}</h2>
                            <p class="deskripsi-kartu fs-13px">
                                {{ $prod->deskripsi }}
                            </p>
                            <div class="gambar-kartu d-flex align-items-center justify-content-center">
                                <img src="{{ $prod->gambar }}" alt="" style="width: 240px">
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
                    </swiper-slide>
                    @endforeach
                </swiper-container>
            </div>
        </section>
    <!-- END BAGIAN REKOMENDASI -->
    <!-- START BAGIAN VOUCHER -->
        {{-- <section class="pt-5 pb-5">
            <div class="container-lg mt-5 mb-5 p-3">
                <div class="row bg-biru-muda mt-5 ms-2 me-2 mb-5 rounded-4">
                    <div class="col-md-6 text-biru p-5 d-flex flex-column justify-content-center">
                        <h1 class="">Get Voucher <br> Discount Up To 70%</h1>
                        <p class="">Update, latest and competitive prices</p>
                        <div class="row">
                            <a href="" class="col-6">
                                <img src="img/googleplay.png" class="w-100" alt="   ">
                            </a>
                            <a href="" class="col-6">
                                <img src="img/appstore.png" class="w-100" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="img/makanan.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- END BAGIAN VOUCHER -->
    <!-- START BAGIAN CONTACT -->
        <section class="bg-biru-muda" style="padding: 80px 12px;">
            <div class="container-lg" style="width: fit-content;">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-12 mb-4" id="contact-us">
                        <h2 class="fs-1 fw-semibold text-biru">Contact Us</h2>
                        <p class="fs-4 text-biru mt-4 mb-4">Hubungi Kami untuk Mendukung Perjalanan Kesehatan Anda bersama "Foody"

                            Kami siap membantu Anda dalam menjalani gaya hidup sehat dengan aplikasi "Foody." Jika Anda memiliki pertanyaan, saran, atau masukan, jangan ragu untuk menghubungi tim kami. Kami sangat antusias untuk mendengar dari Anda dan berkolaborasi dalam mencapai tujuan kesehatan Anda. Jangan tunda lagi, mari bersama-sama menjalani hidup sehat dengan "Foody"!</p>
                        <div class="logomedsos fs-1 text-biru">
                            <a href=""><i class="fa-brands fa-google" style="color: #131049; padding-right: 10px;"></i></a>
                            <a href=""><i class="fa-brands fa-facebook" style="color: #131049; padding-right: 10px;"></i></a>
                            <a href=""><i class="fa-brands fa-twitter" style="color: #131049;"></i></a> 
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <form class="formC" method="POST" action="/feedback">
                            @csrf
                            <div class="row g-3">
                                <div class="col mb-2">
                                    <input type="text" class="form-control form-control-lg" name="nama_depan" placeholder="First name" aria-label="First name">
                                </div>
                                <div class="col mb-2">
                                    <input type="text" class="form-control form-control-lg" name="nama_belakang" placeholder="Last name" aria-label="Last name">
                                </div>
                                <div class="mb-2">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                                </div>
                                <div class="mb-2">
                                    <input type="phone" class="form-control form-control-lg" name="no_hp" placeholder="Phone Number">
                                </div>
                                <div class="mb-2">
                                    <textarea class="form-control form-control-lg" name="pesan" id="exampleFormControlTextarea1" style="min-height: 180px;" placeholder="Message"
                                        style="height: 100px;"></textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="form-control-lg bg-biru text-biru-muda fs-5 fw-semibold" type="submit">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- END BAGIAN CONTACT -->
    </main>
@endsection