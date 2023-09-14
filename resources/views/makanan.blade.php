@extends('layouts.main')

@section('container')
 <style>
     * {
         margin: 0;
         padding: 0;
         font-family: 'Poppins', sans-serif;
     }


     .custom-square {
         background: linear-gradient(135deg, #FDCED0, #D9F4FF);
     }

     .square {
         width: auto;
         height: auto;
         border-radius: 15px;
         text-align: left;
         color: white;
         margin-bottom: 10px;
         padding: 15px 15px 15px 15px;
     }

     /*.col-md-4 img{*/
     /*    max-width: 70%;*/
     /*    padding-top: 30px;*/
     /*}*/
     .col-md-7 p {
         text-align: left;
         padding-top: 30px;

     }

     .col-md-7 h4 {
         margin-top: 20px;
         margin-bottom: -15px;
         font-weight: bold;
     }

     .img-fluid {
         max-width: 300px;
        width: 90%;
     }



     .pink {
         background-color: #FDCED0;
         color: #131049;
     }

     .navy {
         background-color: #131049;
     }

     .navy:hover {
         background-color: #FDCED0;
     }

     .biru {
         background-color: #D9F4FF;
         color: #131049;
     }

     .btn {
         padding: 12px 30px;
         border-radius: 10px;
     }

     .search-box{
         position: relative;
         height: 60px;
         width: 60px;
         border-radius: 50%;
         box-shadow: 5px 5px 30px rgba(0,0,0,.2);
         transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
     }
     .search-box.active{
         width: 350px;
     }
     .search-box input{
         width: 100%;
         height: 100%;
         border: none;
         border-radius: 50px;
         background: #fff;
         outline: none;
         padding: 0 60px 0 20px;
         font-size: 18px;
         opacity: 0;
         transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
     }
     .search-box input.active{
         opacity: 1;
     }
     .search-box input::placeholder{
         color: #a6a6a6;
     }
     .search-box .search-icon{
         position: absolute;
         right: 0px;
         top: 50%;
         transform: translateY(-50%);
         height: 60px;
         width: 60px;
         background: #fff;
         border-radius: 50%;
         text-align: center;
         line-height: 60px;
         font-size: 22px;
         color: #2980b9;
         cursor: pointer;
         z-index: 1;
         transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
     }
     .search-box .search-icon.active{
         right: 5px;
         height: 50px;
         line-height: 50px;
         width: 50px;
         font-size: 20px;
         background: #2980b9;
         color: #fff;
         transform: translateY(-50%) rotate(360deg);
     }
     .search-box .cancel-icon{
         position: absolute;
         right: 20px;
         top: 50%;
         transform: translateY(-50%);
         font-size: 25px;
         color: #fff;
         cursor: pointer;
         transition: all 0.5s 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
     }
     .search-box .cancel-icon.active{
         right: -40px;
         transform: translateY(-50%) rotate(360deg);}
     .search-box .search-data{
         text-align: center;
         padding-top: 7px;
         color: #fff;
         font-size: 18px;
         word-wrap: break-word;}
     .search-box .search-data.active{
         display: none;
     }

     .filter-button {
         display: none;
         cursor: pointer;
     }

     .filter-items {
         display: flex;
         transition: .3s ease;
     }
 </style>

<section class="py-2 min-vh-100" style="margin-top: 100px">
    <div class="container py-2 m-auto">
        <div class="row align-items-center">
            <h1 class="text-start mb-3">Makanan</h1>
            <p>carilah makanan yang ingin kamu ketahui kandungannya dalam fitur ini.</p><br>
        </div>
     <!-- search -->
     <form action="" method="get" class="p-2 row bg-biru-muda align-items-center justify-content-between gap-3 rounded">
         <div class="search-box col-md-6" id="cari-form">
            <input type="text" placeholder="Mau cari apa?" id="input-text" name="search" value="{{ request('search') }}">
            <div class="search-icon">
              <i class="fas fa-search"></i>
            </div>
         </div>
         <div class="col-md-6  filter-items">
             <div class="d-flex justify-content-end align-items-center gap-1 p-0">
                 <div class="text-center">
                     <label for="protein">Protein:</label>
                     <input type="number" name="protein" id="protein" class="" value="{{ request('protein') }}" style="width: 48px; outline: none">
                 </div>
                 <div class="text-center">
                     <label for="karbohidrat">Karbo:</label>
                     <input type="number" name="karbohidrat" id="karbohidrat" class="" value="{{ request('karbohidrat') }}" style="width: 48px; outline: none">
                 </div>
                 <div class="text-center">
                     <label for="garam">Garam:</label>
                     <input type="number" name="garam" id="garam" class="" value="{{ request('garam') }}" style="width: 48px; outline: none">
                 </div>
                 <div class="text-center">
                     <label for="gula">Gula:</label>
                     <input type="number" name="gula" id="gula" class="" value="{{ request('gula') }}" style="width: 48px; outline: none">
                 </div>
                 <div class="text-center"><label for="lemak">Lemak:</label>
                     <input type="number" name="lemak" id="lemak" class="" value="{{ request('lemak') }}" style="width: 48px; outline: none"></div>
                 <div class="text-center">
                     <a href="/makanan" class="px-2 bg-putih text-dark"><i class="fa-solid fa-rotate-left"></i></a>

                     <button type="submit" class="px-2 bg-putih"><i class="fa-solid fa-filter"></i></button>
                 </div>
             </div>

         </div>
     </form>
  <div class="search-data">
  </div>
  </div>
    <!-- paling populer -->
    <div class="container p-4 rounded-3 bg-pink">
    @if ($makanan->count())
      @foreach ($makanan as $makan)
      <div class="row justify-content-center my-2">
        <div class="col-md-4 text-center d-flex align-items-center justify-content-center">
          <img src="{{ $makan->gambar }}" alt="Gambar" class="img-fluid">
        </div>
        <div class="col-md-8 mt-2 d-flex flex-column justify-content-center">
          <h4><a href="/makanan/{{ $makan->slug }}" class="no-decoration text-biru">{{ $makan->nama }}</a></h4>
          <p><a href="/makanan/{{ $makan->slug }}" class="no-decoration text-biru">{{ $makan->deskripsi }}</a></p>
            <div class="">
              <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                learn more
              </button>
            </div>
        </div>
      </div>
      @endforeach

        @else
        <p class="text-center fs-4 m-0">Makanan tidak ditemukan</p>
    @endif



    </div>
    </div>

    </section>

    <div class="overlay"></div>

    <script>
      const searchBtn = $(".search-icon");
      const searchBox = $(".search-box");
      const searchInput = $("input");
      const searchData = $(".search-data");

      searchBtn.click(function (){
        searchBox.addClass("active");
        searchBtn.addClass("active");
        searchInput.addClass("active");
        searchInput.focus();
      });

      if(searchInput.val().length > 0){
          searchBox.addClass("active");
          searchBtn.addClass("active");
          searchInput.addClass("active");
      }

      $(document).click(function (e) {
          if (!searchBox.is(e.target) && !searchBox.has(e.target).length && searchBox.hasClass("active") && searchInput.val().length < 1) {
              searchBox.removeClass("active");
              searchBtn.removeClass("active");
              searchInput.removeClass("active");
              searchData.removeClass("active");
              searchInput.value = "";
          }
      });
      </script>
@endsection
