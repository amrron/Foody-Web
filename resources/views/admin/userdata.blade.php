@extends('layouts.admin')

@section('section')

    <section class="overflow-y-scroll" style="width: calc(100% - 300px)">
        <div class="row mt-3 mx-3 text-biru">
            Hello Admin Orion
        </div>
        <div class="row m-3 mt-5">
            <div class="col-6 d-flex justify-content-between align-items-center">
                <h3 class="fw-bold p-0 m-0">DATA USER</h3>
                <a href="" class="btn bg-biru-muda p-2">Filter</a>
            </div>
            <div class="col-6">
                <form action="" class="w-100 h-100 bg-biru-muda d-flex align-items-center justify-content-between ps-3 pe-2 rounded-2">
                    <input type="text" class="bg-biru-muda w-100" style="outline: none" placeholder="Cari user...">
                    <button type="submit" class="bg-biru-muda p-2"><i class="fa-solid fa-magnifying-glass text-biru"></i></button>
                </form>
            </div>
        </div>
        <div class="row mx-3">
            <table class="table table-borderless border">
                <thead>
                    <tr>
                        <td class="px-3 text-center" style="background-color: #D9F4FF">No</td>
                        <td style="background-color: #D9F4FF">Profile</td>
                        <td style="background-color: #D9F4FF">Username</td>
                        <td style="background-color: #D9F4FF">Name</td>
                        <td style="background-color: #D9F4FF">Email</td>
                        <td style="background-color: #D9F4FF">Bergabung</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td><img src="/img/profileimg.webp" alt="" style="width: 28px" class="rounded-circle"></td>
                        <td>ali</td>
                        <td>Ali Imron</td>
                        <td>imrona463@gmail.com</td>
                        <td>Selasa, 23 Okt 2023</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td><img src="/img/profileimg.webp" alt="" style="width: 28px" class="rounded-circle"></td>
                        <td>ali</td>
                        <td>Ali Imron</td>
                        <td>imrona463@gmail.com</td>
                        <td>Selasa, 23 Okt 2023</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td><img src="/img/profileimg.webp" alt="" style="width: 28px" class="rounded-circle"></td>
                        <td>ali</td>
                        <td>Ali Imron</td>
                        <td>imrona463@gmail.com</td>
                        <td>Selasa, 23 Okt 2023</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td><img src="/img/profileimg.webp" alt="" style="width: 28px" class="rounded-circle"></td>
                        <td>ali</td>
                        <td>Ali Imron</td>
                        <td>imrona463@gmail.com</td>
                        <td>Selasa, 23 Okt 2023</td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td><img src="/img/profileimg.webp" alt="" style="width: 28px" class="rounded-circle"></td>
                        <td>ali</td>
                        <td>Ali Imron</td>
                        <td>imrona463@gmail.com</td>
                        <td>Selasa, 23 Okt 2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@endsection