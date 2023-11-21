@extends('layouts.main')

@section('container')  
    <main class="site-main" style="margin-top: 100px;">
    <!-- START BAGIAN BANNER -->
        <section class="bg-biru-muda py-5 d-flex align-items-center" style="height: 90vh">
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
                        {{-- <svg width="497" height="297" viewBox="0 0 497 297" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M71.6198 68.356C51.3037 59.1949 20.9999 42 20.9999 42V297H475.5V220.41C475.5 220.41 465.018 217.768 437.095 209.259C415.242 202.6 405.283 192.628 383.438 185.944C358.511 178.318 341.79 184.591 317.632 174.794C297.2 166.507 290.01 152.939 270.05 144.383C241.007 131.934 219.467 146.107 191.083 132.219C170.113 121.958 164.608 106.597 144.512 94.712C118.453 79.3001 99.2159 80.7999 71.6198 68.356Z" fill="url(#paint0_linear_9_13)"/>
                            <circle cx="131" cy="89" r="9" fill="#D9F4FF" stroke="#131049" stroke-width="4"/>
                            <circle cx="23.9999" cy="42" r="9" fill="#D9F4FF" stroke="#131049" stroke-width="4"/>
                            <circle cx="263" cy="144" r="9" fill="#D9F4FF" stroke="#131049" stroke-width="4"/>
                            <circle cx="387" cy="189" r="9" fill="#D9F4FF" stroke="#131049" stroke-width="4"/>
                            <circle cx="474" cy="217" r="9" fill="#D9F4FF" stroke="#131049" stroke-width="4"/>
                            <rect x="450" y="173" width="47" height="20.5287" rx="10.2644" fill="#131049"/>
                            <path d="M458.965 185.027V184.473L461.787 180.565H462.663V184.392H463.467V185.027H462.663V186.322H461.94V185.027H458.965ZM461.972 181.329L459.809 184.392H461.972V181.329ZM465.139 184.762C465.192 185.068 465.316 185.303 465.509 185.47C465.707 185.636 465.972 185.719 466.305 185.719C466.75 185.719 467.076 185.545 467.285 185.196C467.5 184.848 467.602 184.261 467.591 183.436C467.478 183.677 467.291 183.867 467.028 184.006C466.766 184.14 466.473 184.207 466.152 184.207C465.793 184.207 465.471 184.135 465.187 183.99C464.908 183.84 464.689 183.623 464.528 183.339C464.367 183.055 464.287 182.712 464.287 182.31C464.287 181.737 464.453 181.276 464.785 180.927C465.117 180.574 465.589 180.397 466.2 180.397C466.95 180.397 467.476 180.641 467.776 181.128C468.081 181.616 468.234 182.342 468.234 183.307C468.234 183.982 468.173 184.54 468.049 184.979C467.931 185.419 467.728 185.754 467.438 185.984C467.154 186.215 466.763 186.33 466.264 186.33C465.718 186.33 465.292 186.182 464.986 185.888C464.681 185.593 464.506 185.218 464.464 184.762H465.139ZM466.272 183.588C466.632 183.588 466.926 183.478 467.157 183.259C467.387 183.034 467.503 182.731 467.503 182.35C467.503 181.948 467.39 181.624 467.165 181.377C466.94 181.131 466.624 181.008 466.216 181.008C465.841 181.008 465.541 181.126 465.316 181.361C465.096 181.597 464.986 181.908 464.986 182.294C464.986 182.685 465.096 182.999 465.316 183.235C465.536 183.47 465.854 183.588 466.272 183.588ZM469.616 186.37C469.477 186.37 469.359 186.322 469.262 186.225C469.166 186.129 469.118 186.011 469.118 185.872C469.118 185.732 469.166 185.614 469.262 185.518C469.359 185.421 469.477 185.373 469.616 185.373C469.75 185.373 469.863 185.421 469.954 185.518C470.05 185.614 470.098 185.732 470.098 185.872C470.098 186.011 470.05 186.129 469.954 186.225C469.863 186.322 469.75 186.37 469.616 186.37ZM474.657 181.144H471.835V182.977C471.958 182.806 472.14 182.666 472.381 182.559C472.623 182.447 472.882 182.39 473.161 182.39C473.606 182.39 473.968 182.484 474.247 182.672C474.525 182.854 474.724 183.093 474.841 183.387C474.965 183.677 475.026 183.985 475.026 184.312C475.026 184.698 474.954 185.044 474.809 185.349C474.665 185.655 474.442 185.896 474.142 186.073C473.847 186.249 473.48 186.338 473.041 186.338C472.478 186.338 472.022 186.193 471.674 185.904C471.325 185.614 471.114 185.228 471.039 184.746H471.754C471.824 185.052 471.971 185.29 472.196 185.462C472.422 185.633 472.706 185.719 473.049 185.719C473.472 185.719 473.791 185.593 474.005 185.341C474.22 185.084 474.327 184.746 474.327 184.328C474.327 183.91 474.22 183.588 474.005 183.363C473.791 183.133 473.475 183.018 473.057 183.018C472.773 183.018 472.523 183.087 472.309 183.227C472.1 183.361 471.947 183.545 471.851 183.781H471.159V180.501H474.657V181.144ZM481.302 186.322L478.994 183.765V186.322H478.263V180.718H478.994V183.315L481.31 180.718H482.234L479.694 183.524L482.258 186.322H481.302ZM484.892 181.844C485.273 181.844 485.605 181.927 485.889 182.093C486.179 182.259 486.393 182.468 486.532 182.72V181.916H487.272V186.418C487.272 186.82 487.186 187.177 487.015 187.488C486.843 187.804 486.597 188.05 486.275 188.227C485.959 188.404 485.589 188.493 485.166 188.493C484.587 188.493 484.104 188.356 483.719 188.083C483.333 187.809 483.105 187.437 483.035 186.965H483.759C483.839 187.233 484.005 187.447 484.257 187.608C484.509 187.774 484.812 187.857 485.166 187.857C485.568 187.857 485.895 187.731 486.147 187.48C486.404 187.228 486.532 186.874 486.532 186.418V185.494C486.388 185.751 486.173 185.965 485.889 186.137C485.605 186.308 485.273 186.394 484.892 186.394C484.501 186.394 484.145 186.298 483.823 186.105C483.507 185.912 483.258 185.641 483.075 185.293C482.893 184.944 482.802 184.548 482.802 184.103C482.802 183.653 482.893 183.259 483.075 182.921C483.258 182.578 483.507 182.313 483.823 182.125C484.145 181.938 484.501 181.844 484.892 181.844ZM486.532 184.111C486.532 183.779 486.465 183.489 486.331 183.243C486.197 182.996 486.015 182.809 485.785 182.68C485.56 182.546 485.31 182.479 485.037 182.479C484.764 182.479 484.514 182.543 484.289 182.672C484.064 182.8 483.885 182.988 483.751 183.235C483.617 183.481 483.55 183.771 483.55 184.103C483.55 184.441 483.617 184.735 483.751 184.987C483.885 185.234 484.064 185.424 484.289 185.558C484.514 185.687 484.764 185.751 485.037 185.751C485.31 185.751 485.56 185.687 485.785 185.558C486.015 185.424 486.197 185.234 486.331 184.987C486.465 184.735 486.532 184.443 486.532 184.111Z" fill="#D9F4FF"/>
                            <rect x="-6.10352e-05" width="47" height="20.5287" rx="10.2644" fill="#131049"/>
                            <path d="M16.2047 7.82247H13.3828V9.65551C13.506 9.484 13.6883 9.34464 13.9295 9.23745C14.1706 9.12489 14.4306 9.06861 14.7093 9.06861C15.1542 9.06861 15.5159 9.16241 15.7947 9.35C16.0734 9.53223 16.2717 9.77074 16.3896 10.0655C16.5129 10.355 16.5745 10.6631 16.5745 10.9901C16.5745 11.376 16.5021 11.7217 16.3574 12.0272C16.2127 12.3327 15.9903 12.5739 15.6901 12.7508C15.3953 12.9276 15.0282 13.0161 14.5887 13.0161C14.0259 13.0161 13.5703 12.8714 13.222 12.5819C12.8736 12.2925 12.6619 11.9066 12.5868 11.4242H13.3024C13.372 11.7297 13.5194 11.9682 13.7445 12.1398C13.9697 12.3113 14.2537 12.397 14.5967 12.397C15.0202 12.397 15.3391 12.2711 15.5535 12.0192C15.7679 11.7619 15.875 11.4242 15.875 11.0062C15.875 10.5881 15.7679 10.2665 15.5535 10.0414C15.3391 9.81094 15.0228 9.69571 14.6048 9.69571C14.3207 9.69571 14.0715 9.76538 13.8571 9.90474C13.6481 10.0387 13.4953 10.2236 13.3988 10.4595H12.7074V7.1793H16.2047V7.82247ZM17.4583 12.4131C18.139 11.8664 18.6723 11.4189 19.0582 11.0705C19.4441 10.7167 19.7683 10.3496 20.031 9.96905C20.299 9.58315 20.433 9.20529 20.433 8.83547C20.433 8.48708 20.3472 8.21373 20.1757 8.01542C20.0095 7.81175 19.7389 7.70991 19.3637 7.70991C18.9992 7.70991 18.7152 7.82515 18.5115 8.05562C18.3132 8.28073 18.206 8.58356 18.1899 8.9641H17.4824C17.5038 8.36381 17.6861 7.90019 18.0291 7.57324C18.3721 7.2463 18.8143 7.08282 19.3556 7.08282C19.9077 7.08282 20.3445 7.23558 20.6661 7.54108C20.9931 7.84659 21.1565 8.26733 21.1565 8.80331C21.1565 9.24817 21.0225 9.68231 20.7545 10.1057C20.4919 10.5238 20.1918 10.8936 19.8541 11.2152C19.5164 11.5314 19.085 11.9012 18.5597 12.3247H21.3254V12.9357H17.4583V12.4131ZM27.4741 13L25.1667 10.4434V13H24.4351V7.39637H25.1667V9.99317L27.4821 7.39637H28.4067L25.8661 10.2022L28.4308 13H27.4741ZM31.0648 8.52192C31.4454 8.52192 31.7777 8.605 32.0617 8.77115C32.3512 8.9373 32.5656 9.14633 32.7049 9.39824V8.59428H33.4446V13.0965C33.4446 13.4985 33.3588 13.8549 33.1873 14.1657C33.0158 14.482 32.7692 14.7285 32.4476 14.9054C32.1314 15.0823 31.7616 15.1707 31.3382 15.1707C30.7593 15.1707 30.2769 15.034 29.891 14.7607C29.5051 14.4873 29.2773 14.1148 29.2077 13.6432H29.9312C30.0116 13.9112 30.1778 14.1256 30.4297 14.2863C30.6816 14.4525 30.9844 14.5356 31.3382 14.5356C31.7402 14.5356 32.0671 14.4096 32.319 14.1577C32.5763 13.9058 32.7049 13.5521 32.7049 13.0965V12.1719C32.5602 12.4292 32.3458 12.6436 32.0617 12.8151C31.7777 12.9866 31.4454 13.0724 31.0648 13.0724C30.6736 13.0724 30.3171 12.9759 29.9955 12.7829C29.6793 12.59 29.4301 12.3193 29.2479 11.9709C29.0656 11.6225 28.9745 11.2259 28.9745 10.7811C28.9745 10.3308 29.0656 9.9369 29.2479 9.59923C29.4301 9.25621 29.6793 8.9909 29.9955 8.80331C30.3171 8.61571 30.6736 8.52192 31.0648 8.52192ZM32.7049 10.7891C32.7049 10.4568 32.6379 10.1674 32.5039 9.92082C32.3699 9.67427 32.1877 9.48668 31.9572 9.35804C31.7321 9.22405 31.4829 9.15705 31.2095 9.15705C30.9362 9.15705 30.687 9.22137 30.4618 9.35C30.2367 9.47864 30.0572 9.66623 29.9232 9.91278C29.7892 10.1593 29.7222 10.4488 29.7222 10.7811C29.7222 11.1187 29.7892 11.4135 29.9232 11.6654C30.0572 11.912 30.2367 12.1022 30.4618 12.2362C30.687 12.3649 30.9362 12.4292 31.2095 12.4292C31.4829 12.4292 31.7321 12.3649 31.9572 12.2362C32.1877 12.1022 32.3699 11.912 32.5039 11.6654C32.6379 11.4135 32.7049 11.1214 32.7049 10.7891Z" fill="#D9F4FF"/>
                            <defs>
                            <linearGradient id="paint0_linear_9_13" x1="266" y1="42" x2="266" y2="297.901" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#131049"/>
                            <stop offset="0.590397" stop-color="#131049" stop-opacity="0.315478"/>
                            <stop offset="0.745029" stop-color="#131049" stop-opacity="0.171386"/>
                            <stop offset="1" stop-color="#131049" stop-opacity="0"/>
                            </linearGradient>
                            </defs>
                        </svg> --}}
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
                        <div class="mx-5">
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
                            <h5 class="text-biru text-center m-0">Konsumsi Makanan Sehat</h5>
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
                        {{-- <div class="logomedsos fs-1 text-biru">
                            <a href=""><i class="fa-brands fa-google" style="color: #131049; padding-right: 10px;"></i></a>
                            <a href=""><i class="fa-brands fa-facebook" style="color: #131049; padding-right: 10px;"></i></a>
                            <a href=""><i class="fa-brands fa-twitter" style="color: #131049;"></i></a> 
                        </div> --}}
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