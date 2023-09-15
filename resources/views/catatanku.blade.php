@extends('layouts.main')

@section('container')
<section class="py-5" style="margin-top: 100px;">
    <div class="container m-auto py-5">
        <div class="row align-items-center">
            <h1 class="text-start mb-5">Catatanku</h1>
            <p>Select your meal time to add notes</p>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card py-4 pink mt-3 mb-3 border border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title display-6 fw-bold">Pagi</h5>
                        <p class="card-text fw-medium">05.00 - 10.00</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Select this time
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pagi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Time</option>
                                                        <option value="1">06.00</option>
                                                        <option value="2">07.00</option>
                                                        <option value="3">08.00</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Jumlah Makan</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Nama Makanan</span>
                                                        <input type="text" class="form-control" placeholder="..." aria-label="..." aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary navy">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card py-4 biru mt-3 mb-3 border border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title display-6 fw-bold">Siang</h5>
                        <p class="card-text fw-medium">10.00 - 15.00</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Select this time
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pagi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Time</option>
                                                        <option value="1">06.00</option>
                                                        <option value="2">07.00</option>
                                                        <option value="3">08.00</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Jumlah Makan</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Nama Makanan</span>
                                                        <input type="text" class="form-control" placeholder="..." aria-label="..." aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Karbohidrat</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Lemak</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Serat</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Protein</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary navy">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card py-4 pink mt-3 mb-3 border border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title display-6 fw-bold">Sore</h5>
                        <p class="card-text fw-medium">15.00 - 20.00</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Select this time
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pagi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Time</option>
                                                        <option value="1">06.00</option>
                                                        <option value="2">07.00</option>
                                                        <option value="3">08.00</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Jumlah Makan</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Nama Makanan</span>
                                                        <input type="text" class="form-control" placeholder="..." aria-label="..." aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Karbohidrat</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Lemak</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Serat</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Protein</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary navy">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card py-4 biru mt-3 mb-3 border border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title display-6 fw-bold">Malam</h5>
                        <p class="card-text fw-medium">20.00 - 00.00</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Select this time
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pagi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Time</option>
                                                        <option value="1">06.00</option>
                                                        <option value="2">07.00</option>
                                                        <option value="3">08.00</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Jumlah Makan</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Nama Makanan</span>
                                                        <input type="text" class="form-control" placeholder="..." aria-label="..." aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Karbohidrat</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Lemak</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Serat</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                                        <option selected>Protein</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary navy">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="py-2">
    <div class="container m-auto">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-5">
                <a href="/catatanku" class="btn btn-primary border border-0 navy">Recents</a>
                <a href="/catatanku/history" class="btn btn-primary border border-0 biru">History</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 overflow-auto tbl-history">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Time</th>
                            <th scope="col">Nama Makanan</th>
                            <th scope="col">Protein</th>
                            <th scope="col">Karbohidrat</th>
                            <th scope="col">Garam</th>
                            <th scope="col">Gula</th>
                            <th scope="col">Lemak</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($catatans as $catatan)
                        <tr>
                            <th scope="row">{{ $catatan->id }}</th>
                            <td>Pagi</td>
                            <td>{{ $catatan->makanan->nama }} {{ $catatan->jumlah > 1 ? " x " . $catatan->jumlah : "" }}</td>
                            <td>{{ $catatan->makanan->protein * $catatan->jumlah}}</td>
                            <td>{{ $catatan->makanan->karbohidrat * $catatan->jumlah }}</td>
                            <td>{{ $catatan->makanan->garam * $catatan->jumlah }}</td>
                            <td>{{ $catatan->makanan->gula * $catatan->jumlah }}</td>
                            <td>{{ $catatan->makanan->lemak * $catatan->jumlah }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <th colspan="3">Total</th>
                            <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->protein; }) }}</th>
                            <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->karbohidrat; }) }}</th>
                            <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->garam; }) }}</th>
                            <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->gula; }) }}</th>
                            <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->lemak; }) }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            @if($pagination)
                <div class=" py-3">
                    {{ $catatans->links() }}
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
