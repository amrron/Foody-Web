@extends('layouts.main')

@section('container')
<section class="py-5" style="margin-top: 100px;">
    <div class="container m-auto py-5">
        <div class="row align-items-center">
            <h1 class="text-start mb-5">Catatanku</h1>
            <p>Select your meal time to add notes</p>
            @if(!$pagination)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card py-4 pink mt-3 mb-3 border border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title display-6 fw-bold">Pagi</h5>
                        <p class="card-text fw-medium">00.00 - 09.00</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#modal-pagi">
                            Select this time
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-pagi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="" method="post" class="modal-content">
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pagi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <select class="form-select form-select-sm pilih-makanan" name="makanan_id" required>
                                                            <option>Pilih Makanan</option>
                                                            @foreach($makanans as $makanan)
                                                                <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-select form-select-sm mb-3" name="waktu" aria-label="Small select example" required>
                                                        <option selected>Time</option>
                                                        <option value="00:00">00:00</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="09:00">09:00</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="input-group input-group-sm mb-3">
                                                        {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span> --}}
                                                        <input type="text" class="form-control" placeholder="Jumlah" aria-label="Sizing example input" name="jumlah" aria-describedby="inputGroup-sizing-sm" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary navy">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card py-4 biru mt-3 mb-3 border border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title display-6 fw-bold">Siang</h5>
                            <p class="card-text fw-medium">10.00 - 14.00</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#modal-siang">
                                Select this time
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-siang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="" method="post" class="modal-content">
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Siang</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-group mb-3">
                                                            
                                                            <select class="form-select form-select-sm pilih-makanan" name="makanan_id" required>
                                                                <option>Pilih Makanan</option>
                                                                
                                                                @foreach($makanans as $makanan)
                                                                    <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <select class="form-select form-select-sm mb-3" name="waktu" aria-label="Small select example" required>
                                                            <option selected>Time</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="14:00">14:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="input-group input-group-sm mb-3">
                                                            {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span> --}}
                                                            <input type="text" class="form-control" placeholder="Jumlah" aria-label="Sizing example input" name="jumlah" aria-describedby="inputGroup-sizing-sm" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary navy">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card py-4 pink mt-3 mb-3 border border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title display-6 fw-bold">Sore</h5>
                            <p class="card-text fw-medium">15.00 - 18.00</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#modal-sore">
                                Select this time
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-sore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="" method="post" class="modal-content">
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Sore</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-group mb-3">
                                                            
                                                            <select class="form-select form-select-sm pilih-makanan" name="makanan_id" required>
                                                                <option>Pilih Makanan</option>
                                                                
                                                                @foreach($makanans as $makanan)
                                                                    <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <select class="form-select form-select-sm mb-3" name="waktu" aria-label="Small select example" required>
                                                            <option selected>Time</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="18:00">18:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="input-group input-group-sm mb-3">
                                                            {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span> --}}
                                                            <input type="text" class="form-control" placeholder="Jumlah" aria-label="Sizing example input" name="jumlah" aria-describedby="inputGroup-sizing-sm" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary navy">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card py-4 biru mt-3 mb-3 border border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title display-6 fw-bold">Malam</h5>
                            <p class="card-text fw-medium">19.00 - 23.00</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary navy fw-medium border border-0" data-bs-toggle="modal" data-bs-target="#modal-malam">
                                Select this time
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-malam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="" method="post" class="modal-content">
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Malam</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-group mb-3">
                                                            
                                                            <select class="form-select form-select-sm pilih-makanan" name="makanan_id" required>
                                                                <option>Pilih Makanan</option>
                                                                
                                                                @foreach($makanans as $makanan)
                                                                    <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <select class="form-select form-select-sm mb-3" name="waktu" aria-label="Small select example" required>
                                                            <option selected>Time</option>
                                                            <option value="19:00">19:00</option>
                                                            <option value="20:00">20:00</option>
                                                            <option value="21:00">21:00</option>
                                                            <option value="22:00">22:00</option>
                                                            <option value="23:00">23:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="input-group input-group-sm mb-3">
                                                            {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span> --}}
                                                            <input type="text" class="form-control" placeholder="Jumlah" aria-label="Sizing example input" name="jumlah" aria-describedby="inputGroup-sizing-sm" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary biru" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary navy">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endif

    </div>
</section>

@error('makanan_id')
<div id="validationServer04Feedback" class="invalid-feedback">
    {{ $message }}
</div>
@enderror
@error('waktu')
<div id="validationServer04Feedback" class="invalid-feedback">
    {{ $message }}
</div>
@enderror
@error('jumlah')
<div id="validationServer04Feedback" class="invalid-feedback">
    {{ $message }}
</div>
@enderror

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
                            <th scope="col">Time</th>
                            <th scope="col">Makanan</th>
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
                            <td>{{ $pagination ? date('Y-m-d H:i', strtotime($catatan->waktu)) : date('H:i', strtotime($catatan->waktu)) }}</td>
                            <td>{{ $catatan->makanan->nama }} {{ $catatan->jumlah > 1 ? " x " . $catatan->jumlah : "" }}</td>
                            <td>{{ $catatan->makanan->protein * $catatan->jumlah}}</td>
                            <td>{{ $catatan->makanan->karbohidrat * $catatan->jumlah }}</td>
                            <td>{{ $catatan->makanan->garam * $catatan->jumlah }}</td>
                            <td>{{ $catatan->makanan->gula * $catatan->jumlah }}</td>
                            <td>{{ $catatan->makanan->lemak * $catatan->jumlah }}</td>
                        </tr>
                        @endforeach
                        @if($catatans->isEmpty() and $pagination)
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data</td>
                            </tr>
                        @endif
                        @if(!$pagination)
                            <tr>
                                <th colspan="2">Total</th>
                                <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->protein; }) }}</th>
                                <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->karbohidrat; }) }}</th>
                                <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->garam; }) }}</th>
                                <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->gula; }) }}</th>
                                <th>{{ $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->lemak; }) }}</th>
                            </tr>
                        @endif

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
