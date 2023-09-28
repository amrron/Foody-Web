@extends('layouts.main')

@section('container')
    <section class="mt-5 py-5 min-vh-100">
        <div class="container-lg">
            <div class="calculator pt-5">
                <div class="col-12 text-center mb-4">
                    <h1 class="fw-bolder">BMI</h1>
                </div>
                <canvas id="bmiChart"></canvas>
                <form action="" method="post" class="row m-auto mt-5" style="max-width: 600px;">
                    @csrf
                    
                    <div class="col-6 d-flex flex-column">
                        <label for="bb">Berat Badan(Kg)</label>
                        <input type="number" class="form-control mt-2" name="berat_badan" id="bb" required>
                    </div>
                    <div class="col-6 d-flex flex-column">
                        <label for="tb">Tinggi Badan(cm)</label>
                        <input type="number" class="form-control mt-2" name="tinggi_badan" id="tb" required>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary w-100">Hitung</button>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert" style="z-index: 100">
                            BMI berhasil dicatat. Nilai BMI anda adalah <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </form>
            </div>
            <div class="row mt-5">
                <h4>History</h4>
            </div>
            <div class="row overflow-auto">

                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Nilai BMI</th>
                        <th>Keterangn</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bmis as $bmi)
                        <tr>
                            <td>{{ $bmi->waktu }}</td>
                            <td>{{ $bmi->berat_badan}}</td>
                            <td>{{ $bmi->tinggi_badan }}</td>
                            <td>{{ $bmi->nilai_bmi }}</td>
                            <td style="color: {{ $bmi->kategori['color'] }}">{{ $bmi->kategori['status'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        // Buat fungsi untuk mengambil data dari Laravel melalui AJAX
        async function fetchData() {
            const response = await fetch('/bmi/dataforchart');
            const data = await response.json();
            return data;
        }
    
        // Fungsi untuk membuat grafik
        async function createChart() {
            const data = await fetchData();
    
            var ctx = document.getElementById('bmiChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line', // Ganti sesuai jenis grafik yang Anda inginkan
                data: data,
            });
        }
    
        // Panggil fungsi untuk membuat grafik saat halaman dimuat
        createChart();
    </script>
@endsection
