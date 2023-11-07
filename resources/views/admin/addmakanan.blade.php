@extends('layouts.admin')

@section('section')
    <section class="overflow-y-scroll" style="width: calc(100% - 300px)">
        <div class="row mt-3 mx-3 text-biru">
            Hello Admin Orion
        </div>
        <div class="row m-3 mt-5">
            <div class="col-6 d-flex justify-content-between align-items-center">
                {{-- <h3 class="fw-bold p-0 m-0">MAKANAN</h3> --}}
                <a href="/adminpanel/fooddata" class="btn bg-biru p-2 px-3 text-biru-muda"><i
                        class="fa-solid fa-arrow-left"></i></a>
            </div>
            {{-- <div class="col-6">
                <form action="" class="w-100 h-100 bg-biru-muda d-flex align-items-center justify-content-between ps-3 pe-2 rounded-2">
                    <input type="text" class="bg-biru-muda w-100" name="search" value="{{ request('search') }}" style="outline: none" placeholder="Cari makanan...">
                    <button type="submit" class="bg-biru-muda p-2"><i class="fa-solid fa-magnifying-glass text-biru"></i></button>
                </form>
            </div> --}}
        </div>
        <h2 class="text-center my-3">{{ isset($makanan) ? "Edit" : "Tambah" }} Data Makanan</h2>
        <div class="row mx-3 border rounded-2 p-3 mb-5">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 100">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Makanan</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $makanan->nama ?? old("nama") }}" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required>{{ $makanan->deskripsi ?? old("deskripsi") }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" name="gambar" class="form-control" id="gambar" placeholder="Link" value="{{ $makanan->gambar ?? old("gambar") }}" required>
                </div>
                <div class="mb-3">
                    <label for="protein" class="form-label">Protein</label>
                    <input type="number" name="protein" class="form-control" id="protein" placeholder="g" value="{{ $makanan->protein ?? old("protein") }}" required>
                </div>
                <div class="mb-3 row">
                    <div class="col-6">
                        <label for="karbohidrat" class="form-label">Karbohidrat</label>
                        <input type="number" name="karbohidrat" class="form-control" id="karbohidrat" placeholder="g" value="{{ $makanan->karbohidrat ?? old("karbohidrat") }}" required>
                    </div>
                    <div class="col-6">
                        <label for="garam" class="form-label">Garam</label>
                        <input type="number" name="garam" class="form-control" id="garam" placeholder="g" value="{{ $makanan->garam ?? old("garam") }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-6">
                        <label for="gula" class="form-label">Gula</label>
                        <input type="number" name="gula" class="form-control" id="gula" placeholder="g" value="{{ $makanan->gula ?? old("gula") }}" required>
                    </div>
                    <div class="col-6">
                        <label for="lemak" class="form-label">Lemak</label>
                        <input type="number" name="lemak" class="form-control" id="lemak" placeholder="g" value="{{ $makanan->lemak ?? old("lemak") }}" required>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn bg-biru text-biru-muda align-self-end">Simpan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
