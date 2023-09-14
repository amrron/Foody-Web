@extends('layouts.main')

@section('container')  
    <main class="site-main" style="margin-top: 100px;">
    <!-- START BAGIAN BANNER -->
        <section class="site-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 class="title-text text-biru fw-bold">FOODY</h3>
                        <h1 class="title-text text-biru fw-bold">Kesehatan Tubuh Membaik</h1>
                        <h4 class="title-text text-biru fw-medium">Solusi Untuk menjaga kesehatan Tubuh Anda</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="" class="bg-biru p-3 mt-3 text-biru-muda rounded-2" style="text-decoration: none;">Show more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="/img/banner1.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <svg viewBox="0 0 1535 401" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_3_335)">
            <path d="M-69.0002 0H1535.44V72.6208C1535.44 72.6208 1555.3 276.13 1453.32 264.652C1356.87 253.796 1400.67 95.5554 1308.76 101.59C1234.92 106.438 1297.32 357.62 1192.5 323.185C1105.23 294.517 1128.18 173.508 1037.16 181.939C951.961 189.831 989.748 364.019 909.466 395.226C777.113 446.674 860.917 137.087 719.603 147.504C657.424 152.087 639.863 279.66 583.567 279.66C466.107 279.66 552.304 31.0096 442.837 52.9435C348.345 71.8771 452.207 431.645 304.971 372.699C215.92 337.048 256.95 198.883 178.465 181.939C99.9791 164.995 200.152 372.699 55.5728 372.699C53.1308 372.699 15.3773 370.588 12.9999 370.5C-338.774 357.439 -69.0002 0 -69.0002 0Z" fill="#D9F4FF"/>
            </g>
            </svg>
    <!-- END BAGIAN BANNER -->
    <!-- START BAGIAN CATATANKU  -->
        <section class="site-catatanku">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title" style="margin-top: 100px;">
                        <h1 class="title-text text-biru fw-semibold">Select your meal time to record your eating pattern in <strong class="fw-bold">Catatanku</strong></h1>
                        <p class="title-text text-biru">Lorem ipsum dolor sit amet consectetur. Netus turpis vestibulum pellentesque orci in nisl.
                             Lorem ipsum dolor sit amet consectetur. Netus turpis vestibulum 
                             pellentesque orci in nisl</p>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="/catatanku/" class="bg-biru-muda p-3 mt-3 text-biru rounded-2" style="text-decoration: none;">Try It</a>
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
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="/img/record_page.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title" style="margin-top: 200px;">
                        <h2 class="pt-5 text-biru fw-semibold">Record your eating patterns on FOODY.</h2>
                        <div class="paragraph py-1 ">
                            <p class="para text-biru fs-5">
                                Lorem ipsum dolor sit amet consectetur. Netus turpis pellentesque orci in nisl. Lorem ipsum dolor sit amet consectetur. 
                                Netus turpis vestibulum pellentesque orci in nisl.
                            </p>
                        </div>
                        <a href="" class="text-biru p-3 mt-3 bg-biru-muda rounded-2" style="text-decoration: none;">Download Now</a>
                    </div>
                </div>
            </div>
        </section>
    <!-- END BAGIAN RECORD MAKANAN -->
    <!-- START BAGIAN TARGET -->
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
        </section>
    </main>
    <main>
    <!-- END BAGIAN TARGET -->
    <!-- START BAGIAN BMI -->
        <section>
            <div class="container-lg d-flex justify-content-center align-items-center mt-3 mb-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="kiri col-md-6 col-sm-12 mb-3">
                            <h1 class="fs-1 fw-bolder text-biru mb-4">BMI</h1>
                            <h2 class="fs-1 text-biru fs-1 mb-4">Body Massa Index</h2>
                            <div class="d-flex w-100 gap-4">
                                <div class="kelamin w-50 ratio ratio-1x1 d-flex align-items-center justify-content-center rounded-2 bg-biru-muda ">
                                    <a href="" class="text-biru d-flex justify-content-center align-items-center text-center no-decoration fs-3">
                                        <div class="">
                                            <i class="fa-solid fa-mars mt-4 "></i>
                                            <p class="mt-1">Male</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="kelamin w-50 ratio ratio-1x1 d-flex align-items-center justify-content-center bg-pink rounded-2">
                                    <a href="" class="text-biru d-flex justify-content-center align-items-center text-center no-decoration fs-3">
                                        <div class="">
                                            <i class="fa-solid fa-venus mt-4 "></i>
                                            <p class="mt-1">Female</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="kanan col-md-6 col-sm-12 ps-3 pe-3 mb-3">
                            <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center" style="border-radius: 10px; background: var(--linear-1, linear-gradient(210deg, #FDCED0 10.95%, #D9F4FF 86.63%));">
                                <div class="d-flex gap-2 p-2 bg-putih mt-5 rounded-1" style="width: fit-content;">
                                    <button class="p-2 w-50 bg-biru text-biru-muda rounded-1">Metrik</button>
                                    <button class="p-2 w-50 text-biru bg-putih rounded-1">Imperial</button>
                                </div>
                                <form class="col d-flex flex-column gap-3 align-items-center">
                                    <div class="d-flex" style="padding-left: 20px; padding-right: 20px; padding-top: 10px;">
                                        <div style="width: 50%; padding-right: 10px;">
                                            <h6 class="text-biru">Age Stages</h6>
                                            <select class="form-select form-select-lg" aria-label="Default select example">
                                                <option selected>Kids</option>
                                                <option value="1">Teen</option>
                                                <option value="1">Adult</option>
                                            </select>
                                        </div>
                                        <div style="width: 50%;">
                                            <h6 class="text-biru">Age</h6>
                                            <input type="number" class="form-control-lg w-100" name="" id="">
                                        </div>
                                    </div>
                                    <div class="d-flex"
                                        style="padding-left: 20px; padding-right: 20px; padding-bottom: 5px; padding-top: 10px;">
                                        <div style="width: 50%; padding-right: 10px;">
                                            <h6 class="text-biru">Height(cm)</h6>
                                            <input type="number" class="form-control-lg w-100" name="" id="">
                                        </div>
                                        <div style="width: 50%;">
                                            <h6 class="text-biru">Weight(kg)</h6>
                                            <input type="number" class="form-control-lg w-100" name="" id="">
                                        </div>
                                    </div>
                                    <button class="form-control-lg w-50 mb-5">
                                        Calculate BMI
                                    </button>
                                </form>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- END BAGIAN BMI -->
    <!-- START BAGIAN HEALTHY -->
        <section>
            <div class="container-lg mb-5 pt-5 pb-5 d-flex align-items-center flex-column w-auto">
                <h1 class="fs-1 text-biru text-center fw-semibold mb-5 pb-4">Healthy lifestyle</h1>
                <div class="card-container d-flex justify-content-center align-items-center flex-wrap w-100 m-auto">
                    <div class="card m-4" style="width: 268px; height: 354px; border: 0;">
                        <img src="img/olahraga.png" alt="">
                        <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                            <h5 class="text-biru m-0">Exercise Regulary</h5>
                        </div>
                    </div>
                    <div class="card m-4" style="width: 268px; height: 354px; border: 0;">
                        <img src="img/makansehat.png" alt="">
                        <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                            <h5 class="text-biru m-0">Consume Healthy Food</h5>
                        </div>
                    </div>
                    <div class="card m-4" style="width: 268px; height: 354px; border: 0;">
                        <img src="img/istirahat.png" alt="">
                        <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                            <h5 class="text-biru m-0">Enough rest</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- END BAGIAN HEALTHY -->
    <!-- START BAGIAN INGREDIENTS -->
        <section>
            <div class="container-lg mb-5 pt-5 pb-5 text-center">
                <h1 class="fs-1 text-biru text-center fw-semibold mb-5 pb-4">Food Ingredients</h1>
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
                                <img src="img/protein.png" alt="">
                                <div class="card-body d-flex pb-0 align-items-end justify-content-center">
                                    <h5 class="text-biru m-0">Serat</h5>
                                </div>
                            </div>
                    </swiper-slide>
                    <swiper-slide class="me-5">
                            <div class="card" style="width: 268px; height: 354px; border: 0;">
                                <img src="img/karbohidrat.png" alt="">
                                <div class="card-body d-flex pb-0 align-items-center justify-content-center">
                                    <h5 class="text-biru">Karbohidrat</h5>
                                </div>
                            </div>
                    </swiper-slide>
                </swiper-container>

                <a href="" class="bg-biru text-biru-muda mb-5 mt-5 d-inline-flex" style="padding: 12px 30px; border-radius: 8px; text-decoration: none;">Learn More</a>
            </div>
        </section>
    <!-- END BAGIAN INGREDIENTS -->
    <!-- START BAGIAN REKOMENDASI -->
        <section class="section-recomendation pt-5 pb-5" style="padding: 0 12px;">
            <div class="container-lg recomendation mb-5 mt-5">
                <div class="row mb-4">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <h1 class="fs-64px fw-semibold fs-1">Recommendation for you</h1>
                        <a href="" class="fs-4 view-all text-end">View All</a>
                    </div>
                </div>
                <swiper-container class="mySwiper" navigation="true" space-between="20" slides-per-view="auto">
                    <swiper-slide>
                        <div class="kartu">
                            <h2 class="judul-kartu fs-20px text-center ">Salad Buah</h2>
                            <p class="deskripsi-kartu fs-13px">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veritatis facilis quae, aliquid, pariatur velit repellat corrupti autem fugit, harum non consectetur obcaecati sapiente! Sapiente.
                            </p>
                            <div class="gambar-kartu d-flex align-items-center justify-content-center">
                                <img src="img/salad.png" alt="">
                            </div>
                            <div class="harga fs-13px">
                                <span>Price: </span>
                                <br>
                                <span>Rp20.000,00</span>
                            </div>
                            <div class="tombol-kartu">
                                <a href="" class="tombol-beli-produk fs-13px text-center">Buy Product</a>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="kartu">
                            <h2 class="judul-kartu fs-20px text-center">Salad Buah</h2>
                            <p class="deskripsi-kartu fs-13px">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veritatis facilis quae, aliquid, pariatur velit repellat corrupti autem fugit, harum non consectetur obcaecati sapiente! Sapiente.
                            </p>
                            <div class="gambar-kartu d-flex align-items-center justify-content-center">
                                <img src="img/salad.png" alt="">
                            </div>
                            <div class="harga fs-13px">
                                <span>Price: </span>
                                <br>
                                <span>Rp20.000,00</span>
                            </div>
                            <div class="tombol-kartu">
                                <a href="" class="tombol-beli-produk fs-13px text-center">Buy Product</a>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="kartu">
                            <h2 class="judul-kartu fs-20px text-center">Salad Buah</h2>
                            <p class="deskripsi-kartu fs-13px">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veritatis facilis quae, aliquid, pariatur velit repellat corrupti autem fugit, harum non consectetur obcaecati sapiente! Sapiente.
                            </p>
                            <div class="gambar-kartu d-flex align-items-center justify-content-center">
                                <img src="img/salad.png" alt="">
                            </div>
                            <div class="harga fs-13px">
                                <span>Price: </span>
                                <br>
                                <span>Rp20.000,00</span>
                            </div>
                            <div class="tombol-kartu">
                                <a href="" class="tombol-beli-produk fs-13px text-center">Buy Product</a>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="kartu">
                            <h2 class="judul-kartu fs-20px text-center">Salad Buah</h2>
                            <p class="deskripsi-kartu fs-13px">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veritatis facilis quae, aliquid, pariatur velit repellat corrupti autem fugit, harum non consectetur obcaecati sapiente! Sapiente.
                            </p>
                            <div class="gambar-kartu d-flex align-items-center justify-content-center">
                                <img src="img/salad.png" alt="">
                            </div>
                            <div class="harga fs-13px">
                                <span>Price: </span>
                                <br>
                                <span>Rp20.000,00</span>
                            </div>
                            <div class="tombol-kartu">
                                <a href="" class="tombol-beli-produk fs-13px text-center">Buy Product</a>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>
        </section>
    <!-- END BAGIAN REKOMENDASI -->
    <!-- START BAGIAN VOUCHER -->
        <section class="pt-5 pb-5">
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
        </section>
    <!-- END BAGIAN VOUCHER -->
    <!-- START BAGIAN CONTACT -->
        <section class="bg-biru-muda" style="padding: 80px 12px;">
            <div class="container-lg" style="width: fit-content;">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h2 class="fs-1 fw-semibold text-biru">Contact Us</h2>
                        <p class="fs-4 text-biru mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat iste voluptates obcaecati? Iusto impedit dolorem quam hic similique id minus dolores itaque voluptatibus. Laboriosam et laudantium dolor, ullam quibusdam quasi inventore hic assumenda architecto, consectetur neque esse ipsum! Natus quae exercitationem ex consequatur officiis tempore ipsam minima vero voluptatum suscipit.</p>
                        <div class="logomedsos fs-1 text-biru">
                            <a href=""><i class="fa-brands fa-google" style="color: #131049; padding-right: 10px;"></i></a>
                            <a href=""><i class="fa-brands fa-facebook" style="color: #131049; padding-right: 10px;"></i></a>
                            <a href=""><i class="fa-brands fa-twitter" style="color: #131049;"></i></a> 
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <form class="formC">
                            <div class="row g-3">
                                <div class="col mb-2">
                                    <input type="text" class="form-control form-control-lg" placeholder="First name" aria-label="First name">
                                </div>
                                <div class="col mb-2">
                                    <input type="text" class="form-control form-control-lg" placeholder="Last name" aria-label="Last name">
                                </div>
                                <div class="mb-2">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email">
                                </div>
                                <div class="mb-2">
                                    <input type="email" class="form-control form-control-lg" placeholder="Phone Number">
                                </div>
                                <div class="mb-2">
                                    <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" style="min-height: 180px;" placeholder="Message"
                                        style="height: 100px;"></textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="form-control-lg bg-biru text-biru-muda fs-5 fw-semibold" type="button">SUBMIT</button>
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