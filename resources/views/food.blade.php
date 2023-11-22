@extends('layouts.main')

@section('container')

<main class="py-4" style="margin-top: 100px">

    <section class="container-lg min-vh-100 mt-3 p-3">
        <div class="bg-pink rounded-3 py-5 px-4 mb-3 d-flex w-100 ">
            <div class="col-md-6">
                <h5 class="text-center fs-2 fw-semibold mb-3 text-biru">
                    Temukan Makanan menggunakan Foody AI
                </h5>
                <p class="text-biru text-center">
                    Cari data makanan pada pada datbase Foody. AI akan membantu Anda untuk mencari data makanan
                </p>
                <form action="" class="bg-biru-muda d-flex justify-content-between align-items-center rounded-3" style="height: 40px" id="cari-makanan">
                    <label for="keyword" class="mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 26 26" fill="none">
                            <path d="M25 25L19.3335 19.3234L25 25ZM22.4737 11.7368C22.4737 14.5844 21.3425 17.3154 19.3289 19.3289C17.3154 21.3425 14.5844 22.4737 11.7368 22.4737C8.88925 22.4737 6.1583 21.3425 4.14475 19.3289C2.1312 17.3154 1 14.5844 1 11.7368C1 8.88925 2.1312 6.1583 4.14475 4.14475C6.1583 2.1312 8.88925 1 11.7368 1C14.5844 1 17.3154 2.1312 19.3289 4.14475C21.3425 6.1583 22.4737 8.88925 22.4737 11.7368V11.7368Z" stroke="#131049" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </label>
                    <input type="text" name="search" id="keyword" class="bg-biru-muda w-100" placeholder="Nama makanan..." value="{{ request('search') }}" style="outline: none">
                    <button type="submit" class="h-100 bg-biru text-biru-muda rounded-end">
                        {{-- <i class="fa-solid fa-paper-plane mx-3"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" id="submit-cari" width="24" height="25" viewBox="0 0 24 25" fill="none" class="mx-2">
                            <path d="M22.4988 10.4088C22.7964 9.60484 22.8714 8.80087 22.7964 7.99808C22.7226 7.19411 22.425 6.39131 22.0525 5.66097C21.3836 4.56486 20.416 3.68845 19.3008 3.17779C18.1107 2.66596 16.8455 2.51989 15.5816 2.81203C14.9865 2.22775 14.3164 1.7171 13.5725 1.35134C12.8287 0.987917 11.9361 0.840679 11.1184 0.840679C9.84123 0.833358 8.59337 1.21644 7.54791 1.93678C6.50651 2.66596 5.76265 3.68962 5.39013 4.85817C4.4975 5.07669 3.75364 5.44245 3.00979 5.88066C2.34091 6.39131 1.81962 7.04921 1.3733 7.70594C0.704428 8.80204 0.480676 10.043 0.629448 11.2852C0.778927 12.5238 1.29632 13.6918 2.11716 14.6436C1.83582 15.4153 1.73415 16.2391 1.81962 17.0544C1.8946 17.8583 2.19214 18.6611 2.56347 19.3915C3.23354 20.4876 4.19996 21.364 5.31634 21.8747C6.50651 22.3865 7.77047 22.5326 9.03562 22.2404C9.63071 22.8247 10.2996 23.3354 11.0434 23.7011C11.7873 24.0657 12.6799 24.2118 13.4988 24.2118C14.7759 24.2191 16.0238 23.836 17.0693 23.1157C18.1107 22.3853 18.8545 21.3628 19.2259 20.1943C20.0663 20.0374 20.8568 19.687 21.5324 19.1718C22.2013 18.6611 22.7964 18.0769 23.1689 17.3465C23.8378 16.2504 24.0615 15.0094 23.9127 13.7672C23.764 12.5262 23.3177 11.3577 22.4988 10.4088ZM13.5725 22.6786C12.3824 22.6786 11.4898 22.3129 10.6721 21.6561C10.6721 21.6561 10.7459 21.5825 10.8209 21.5825L15.5816 18.8797C15.7144 18.8222 15.8206 18.718 15.8791 18.5875C15.9529 18.4414 15.9529 18.369 15.9529 18.2229V11.6498L17.9619 12.8184V18.2229C17.9824 18.8012 17.8839 19.3775 17.6725 19.9176C17.461 20.4577 17.1409 20.9504 16.7312 21.3662C16.3215 21.7821 15.8307 22.1127 15.288 22.3382C14.7453 22.5637 14.1618 22.6794 13.5725 22.6786ZM3.9774 18.6611C3.4561 17.7847 3.23354 16.7622 3.4561 15.7398C3.4561 15.7398 3.53108 15.8134 3.60487 15.8134L8.36555 18.5151C8.47989 18.5744 8.60927 18.6 8.73808 18.5887C8.88685 18.5887 9.03562 18.5887 9.10941 18.5151L14.9115 15.2279V17.4926L10.077 20.2679C9.06428 20.8438 7.8601 21.0014 6.72907 20.7061C5.5389 20.414 4.57248 19.6836 3.9774 18.6611ZM2.71225 8.50874C3.23844 7.63663 4.0522 6.9671 5.0188 6.611V12.1616C5.0188 12.3065 5.0188 12.4538 5.09259 12.5262C5.15109 12.6567 5.25724 12.7609 5.39013 12.8184L11.1922 16.1055L9.18439 17.2741L4.42371 14.5712C3.9166 14.2901 3.47138 13.9129 3.11385 13.4616C2.75632 13.0102 2.4936 12.4937 2.34091 11.9419C2.04337 10.8458 2.11716 9.53122 2.71225 8.50874ZM19.1521 12.2341L13.35 8.94694L15.3578 7.77839L20.1185 10.4813C20.8623 10.9195 21.4574 11.5037 21.83 12.2341C22.2013 12.9644 22.425 13.7684 22.3501 14.6448C22.2776 15.4673 21.9679 16.2524 21.4574 16.9083C20.9373 17.5662 20.2673 18.0769 19.4496 18.369V12.8184C19.4496 12.6723 19.4496 12.5262 19.3746 12.4526C19.3746 12.4526 19.3008 12.3077 19.1521 12.2341ZM21.1599 9.3127C21.1599 9.3127 21.0861 9.23908 21.0111 9.23908L16.2504 6.53738C16.1017 6.46376 16.0279 6.46376 15.8791 6.46376C15.7303 6.46376 15.5816 6.46376 15.5066 6.53738L9.7045 9.82453V7.55987L14.5402 4.78455C15.284 4.34634 16.1017 4.20027 16.9943 4.20027C17.8131 4.20027 18.6308 4.49241 19.3746 5.00424C20.0447 5.5149 20.6398 6.17279 20.9373 6.90314C21.2349 7.63349 21.3087 8.5099 21.1599 9.3127ZM8.6631 13.4026L6.65528 12.2341V6.7559C6.65528 5.95311 6.87784 5.07669 7.32416 4.41879C7.77047 3.68962 8.44053 3.17779 9.18439 2.8132C9.94247 2.43957 10.8018 2.3119 11.6385 2.44861C12.4574 2.52223 13.275 2.88682 13.9451 3.39865C13.9451 3.39865 13.8701 3.4711 13.7963 3.4711L9.03562 6.17396C8.90273 6.2314 8.79658 6.33563 8.73808 6.4661C8.6631 6.61217 8.6631 6.68462 8.6631 6.83069V13.4038V13.4026ZM9.7045 11.0655L12.3086 9.60484L14.9115 11.0655V13.9869L12.3086 15.4476L9.7045 13.9869V11.0655Z" fill="#D9F4FF"/>
                        </svg>
                    </button>
                </form>
                <div class="mt-2 d-flex align-items-center d-none loading">
                    <p class="text-biru m-0 me-1">AI sedang mencari data makanan </p>
                </div>
            </div>
            <div class="col-md-6 justify-content-center d-none d-md-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="210" height="210" viewBox="0 0 210 210" fill="none">
                    <path d="M196.9 85.9742C199.574 78.7502 200.247 71.5263 199.574 64.3129C198.911 57.0889 196.237 49.8755 192.89 43.313C186.88 33.4641 178.185 25.5892 168.165 21.0007C157.471 16.4018 146.103 15.0893 134.746 17.7143C129.399 12.4643 123.378 7.87586 116.694 4.58939C110.01 1.32391 101.99 0.000925511 94.6427 0.000925511C83.1667 -0.0648539 71.9542 3.37724 62.5603 9.84984C53.203 16.4018 46.5191 25.5997 43.1719 36.0996C35.1513 38.0631 28.4674 41.3496 21.7836 45.287C15.7735 49.8755 11.0895 55.7869 7.07917 61.6879C1.06907 71.5368 -0.941425 82.6877 0.395342 93.8491C1.73847 104.978 6.38747 115.473 13.763 124.026C11.2351 130.96 10.3215 138.361 11.0895 145.687C11.7632 152.911 14.4367 160.125 17.7733 166.687C23.7941 176.536 32.4777 184.411 42.5088 188.999C53.203 193.598 64.5601 194.911 75.928 192.286C81.2751 197.536 87.2852 202.124 93.969 205.411C100.653 208.687 108.673 209.999 116.031 209.999C127.507 210.065 138.72 206.623 148.113 200.15C157.471 193.588 164.155 184.4 167.491 173.9C175.043 172.491 182.145 169.342 188.216 164.713C194.227 160.125 199.574 154.875 202.921 148.312C208.931 138.463 210.941 127.312 209.605 116.151C208.268 105 204.258 94.5001 196.9 85.9742ZM116.694 196.223C106 196.223 97.9793 192.937 90.6324 187.036C90.6324 187.036 91.2955 186.374 91.9692 186.374L134.746 162.088C135.94 161.572 136.894 160.635 137.419 159.463C138.082 158.151 138.082 157.5 138.082 156.187V97.1251L156.134 107.625V156.187C156.318 161.383 155.434 166.562 153.534 171.414C151.634 176.267 148.757 180.694 145.076 184.431C141.395 188.168 136.984 191.138 132.108 193.164C127.231 195.19 121.989 196.231 116.694 196.223ZM30.4779 160.125C25.7939 152.25 23.7941 143.062 25.7939 133.875C25.7939 133.875 26.4676 134.536 27.1307 134.536L69.9072 158.812C70.9346 159.345 72.0971 159.575 73.2545 159.474C74.5912 159.474 75.928 159.474 76.591 158.812L128.725 129.276V149.625L85.2854 174.562C76.1856 179.737 65.3655 181.153 55.2028 178.499C44.5086 175.874 35.825 169.312 30.4779 160.125ZM19.1101 68.9013C23.8381 61.0651 31.15 55.0491 39.8353 51.8495V101.724C39.8353 103.026 39.8353 104.349 40.4983 105C41.024 106.172 41.9778 107.109 43.1719 107.625L95.3058 137.161L77.2648 147.661L34.4882 123.375C29.9317 120.849 25.9312 117.46 22.7186 113.405C19.5061 109.349 17.1454 104.708 15.7735 99.75C13.1 89.9011 13.763 78.0887 19.1101 68.9013ZM166.828 102.375L114.694 72.8388L132.735 62.3389L175.512 86.6252C182.196 90.5626 187.543 95.8126 190.89 102.375C194.227 108.937 196.237 116.161 195.563 124.036C194.912 131.426 192.13 138.481 187.543 144.375C182.869 150.286 176.849 154.875 169.502 157.5V107.625C169.502 106.312 169.502 105 168.828 104.339C168.828 104.339 168.165 103.037 166.828 102.375ZM184.869 76.1253C184.869 76.1253 184.206 75.4638 183.532 75.4638L140.756 51.188C139.419 50.5265 138.756 50.5265 137.419 50.5265C136.083 50.5265 134.746 50.5265 134.072 51.188L81.9381 80.7242V60.3754L125.388 35.4381C132.072 31.5006 139.419 30.1882 147.44 30.1882C154.797 30.1882 162.144 32.8131 168.828 37.4121C174.849 42.0006 180.196 47.912 182.869 54.4744C185.543 61.0369 186.206 68.9118 184.869 76.1253ZM72.5807 112.875L54.5397 102.375V53.1515C54.5397 45.938 56.5395 38.0631 60.5498 32.1516C64.5601 25.5997 70.5809 21.0007 77.2648 17.7248C84.0764 14.3675 91.7978 13.2204 99.3161 14.4488C106.674 15.1103 114.021 18.3863 120.041 22.9852C120.041 22.9852 119.368 23.6362 118.705 23.6362L75.928 47.9225C74.734 48.4386 73.7801 49.3751 73.2545 50.5475C72.5807 51.86 72.5807 52.511 72.5807 53.8235V112.885V112.875ZM81.9381 91.8751L105.337 78.7502L128.725 91.8751V118.125L105.337 131.25L81.9381 118.125V91.8751Z" fill="#131049"/>
                </svg>
            </div>
        </div>

        @if(!request("search"))
        <h2 class="my-3 fw-normal text-biru">Kategori</h2>
        <div class="row">
            <swiper-container class="mySwiper" navigation="true" space-between="20" slides-per-view="auto">
                <swiper-slide style="width: auto">
                    <a href="/makanan?kategori=rendah-lemak" class="bg-biru-muda rounded-2 p-3 {{ request('kategori') == 'rendah-lemak' ? 'bg-biru' : '' }}" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru {{ request('kategori') == 'rendah-lemak' ? 'text-biru-muda' : '' }}">Rendah Lemak</p>
                        <img src="/img/low-fat.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide style="width: auto">
                    <a href="/makanan?kategori=tinggi-lemak" class="bg-pink rounded-2 p-3 {{ request('kategori') == 'tinggi-lemak' ? 'bg-biru' : '' }}" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru {{ request('kategori') == 'tinggi-lemak' ? 'text-biru-muda' : '' }}">Tinggi Lemak</p>
                        <img src="/img/low-fat.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide style="width: auto">
                    <a href="/makanan?kategori=rendah-protein" class="bg-biru-muda rounded-2 p-3 {{ request('kategori') == 'rendah-protein' ? 'bg-biru' : '' }}" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru {{ request('kategori') == 'rendah-protein' ? 'text-biru-muda' : '' }}">Rendah Protein</p>
                        <img src="/img/high-protein.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide style="width: auto">
                    <a href="/makanan?kategori=tinggi-protein" class="bg-pink rounded-2 p-3 {{ request('kategori') == 'tinggi-protein' ? 'bg-biru' : '' }}" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru {{ request('kategori') == 'tinggi-protein' ? 'text-biru-muda' : '' }}">Tinggi Protein</p>
                        <img src="/img/high-protein.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide style="width: auto">
                    <a href="/makanan?kategori=rendah-karbohidrat" class="bg-biru-muda rounded-2 p-3 {{ request('kategori') == 'rendah-karbohidrat' ? 'bg-biru' : '' }}" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru {{ request('kategori') == 'rendah-karbohidrat' ? 'text-biru-muda' : '' }}">Rendah Karbohidrat</p>
                        <img src="/img/low-carbo.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
                <swiper-slide style="width: auto">
                    <a href="/makanan?kategori=tinggi-karbohidrat" class="bg-pink rounded-2 p-3 {{ request('kategori') == 'tinggi-karbohidrat' ? 'bg-biru' : '' }}" style="width: 200px; height: 120px; position: relative">
                        <p class="w-50 fw-medium text-biru {{ request('kategori') == 'tinggi-karbohidrat' ? 'text-biru-muda' : '' }}">Tinggi Karbohidrat</p>
                        <img src="/img/low-carbo.png" alt="" class="w-50" style="position: absolute; right: 0; bottom:0;">
                    </a>
                </swiper-slide>
            </swiper-container>
        </div>
        @endif

        <h2 class="my-3 fw-normal text-biru">Makanan {{ request('kategori')  ? ucwords(str_replace("-", " ", request('kategori'))) : "" }}</h2>

        <div class="row">
            @if($makanan->count())
            @foreach($makanan as $food)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3 makanan-card-outside">
                <div class="makanan border rounded-2 p-3 makanan-card-inside">
                    <div class="col-12">
                        <img src="{{ str_contains($food->gambar, "upload/") ? asset('storage/' . $food->gambar) : $food->gambar }}" class="w-100 rounded-2" alt="" style="height: 200px; object-fit: cover;">
                    </div>
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
            <p class="text-center fs-4 m-0 opacity-50 mt-5">Makanan <strong>{{ request('search') ? "\"" . request('search') . "\"" : "" }}</strong> tidak ditemukan</p>
            @if(session()->has('gagal'))
            <p class="text-center fs-4 m-0 opacity-50">{{ session('gagal') }}.</p>
            @endif
            @endif
        </div>
    </section>

</main>
<script>
    $(document).ready(function(){
        $('#cari-makanan').submit(function(){
            $('.loading').removeClass('d-none');
            $('#submit-cari').addClass('loading-muter');
        })

    })
</script>
@endsection
