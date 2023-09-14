@extends('layouts.main')

@section('container')
    <div class="container-lg P-3" style="margin-top: 100px">
        @if(!empty($makanan))
        <h1>{{ $makanan->nama }}</h1>
        <img src="{{ $makanan->gambar }}">
        <p>{{ $makanan->deskripsi }}</p>
        <div class="row">
            <div class="col-8">
                <table class="table table-striped">
                    <tr>
                        <th>Kandungan</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td>protein</td>
                        <td>{{ $makanan->protein }}</td>
                    </tr>
                    <tr>
                        <td>Karbohidrat</td>
                        <td>{{ $makanan->karbohidrat }}</td>
                    </tr>
                    <tr>
                        <td>garam</td>
                        <td>{{ $makanan->garam }}</td>
                    </tr>
                    <tr>
                        <td>gula</td>
                        <td>{{ $makanan->gula }}</td>
                    </tr>
                    <tr>
                        <td>lemak</td>
                        <td>{{ $makanan->lemak }}</td>
                    </tr>
                </table>
            </div>
        </div>
        @else
            <p class="text-center fs-4">Data salah</p>
        @endif
    </div>
@endsection
