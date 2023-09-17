@extends('layouts.main')

@section('container')
    <section class="mt-5 py-5">
        <div class="container-lg">
            <div class="calculator pt-5">
                <form action="" method="" class="row m-auto" style="max-width: 600px;">
                    <div class="col-12 text-center mb-4">
                        <h1 class="fw-bolder">Kalkulator BMI</h1>
                    </div>
                    <div class="col-6 d-flex flex-column">
                        <label for="bb">Berat Badan(Kg)</label>
                        <input type="number" class="form-control mt-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="col-6 d-flex flex-column">
                        <label for="tb">Tinggi Badan(cm)</label>
                        <input type="number" class="form-control mt-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary w-100">Hitung</button>
                    </div>
                </form>
            </div>
            <div class="row mt-5">
                <h4>History</h4>
            </div>
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Nilai BMI</th>
                        <th>Keterangn</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>2024-09-01</td>
                        <td>40</td>
                        <td>160</td>
                        <td>20.3</td>
                        <td>Obesitas</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2024-09-01</td>
                        <td>40</td>
                        <td>160</td>
                        <td>20.3</td>
                        <td>Obesitas</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2024-09-01</td>
                        <td>40</td>
                        <td>160</td>
                        <td>20.3</td>
                        <td>Obesitas</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2024-09-01</td>
                        <td>40</td>
                        <td>160</td>
                        <td>20.3</td>
                        <td>Obesitas</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2024-09-01</td>
                        <td>40</td>
                        <td>160</td>
                        <td>20.3</td>
                        <td>Obesitas</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
