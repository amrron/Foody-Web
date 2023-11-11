@extends('layouts.main')

@section('container')
    <main class="min-vh-100 mb-5" style="margin-top: 150px">
        <div class="container-lg p-4 bg-biru-muda rounded-3">
            @if(!empty($makanan))
            <h1 class="fs-1 fw-normal mb-4">{{ $makanan->nama }}</h1>
            <div class="row justify-content-between align-items-center mb-3">
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <img src="{{ str_contains($makanan->gambar, "upload/") ? asset('storage/' . $makanan->gambar) : $makanan->gambar }}" class="w-100" alt="gambar makanan">
                </div>
                <div class="col-md-5">
                    <canvas id="myChart" style="height: 200px"></canvas>
                </div>
            </div>
            <p>{{ $makanan->deskripsi }}</p>
            <table class="table table-bordered w-100">
                <tbody>
                    <tr>
                        <th>Karbohidrat</th>
                        <td>{{ $makanan->karbohidrat }} g</td>
                    </tr>
                    <tr>
                        <th>Protein</th>
                        <td>{{ $makanan->protein }} g</td>
                    </tr>
                    <tr>
                      <th>Garam</th>
                      <td>{{ $makanan->garam }} g</td>
                    </tr>
                    <tr>
                      <th>Gula</th>
                      <td>{{ $makanan->gula }} g</td>
                    </tr>
                    <tr>
                      <th>Lemak</th>
                      <td>{{ $makanan->lemak }} g</td>
                    </tr>
                </tbody>
            </table>
            @else
                <p class="text-center fs-4">Data salah</p>
            @endif
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  const data = {
  labels: ['Karbohidrat', 'Protein', 'Garam', 'Gula', 'Lemak'],
  datasets: [
    {
      label: 'Dataset 1',
      data: [{{ $makanan->karbohidrat }}, 
            {{ $makanan->protein }}, 
            {{ $makanan->garam }},
            {{ $makanan->gula }}, 
            {{ $makanan->lemak }}],
      backgroundColor: ['#17184f', '#dbf3fb', '#fdced0', '#111', '#6C6A85'],
    }
  ]
};

  const config = {
  type: 'pie',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'bottom',
      },
      title: {
        display: true,
      }
    }
  },
};

  new Chart(ctx, config);
</script>
@endsection
