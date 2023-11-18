@extends('layouts.main')

@section('container')
    <main class="min-vh-100 mb-5" style="margin-top: 100px">
        <div class="container-lg px-0 py-3 px-2 fs-5">
          <a href="/makanan" class="text-dark opacity-50">Makanan</a href="/makanan"> / <span class="text-biru fw-bold">{{ $makanan->nama }}</span>
        </div>
        <div class="container-lg p-0 px-2">
            @if(!empty($makanan))
            <img src="{{ str_contains($makanan->gambar, "upload/") ? asset('storage/' . $makanan->gambar) : $makanan->gambar }}" class="w-100 rounded-3 p-0 mb-3 border" alt="gambar makanan" style="height: 300px; object-fit: cover">

            <h1 class="fs-2 fw-medium mb-4 text-biru">{{ $makanan->nama }}</h1>
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="w-100 bg-biru-muda text-biru p-3 mb-3">
                  Kandungan Makanan
                </div>
                @auth
                <div class="progres-catatan mb-1">
                  <div class="d-flex justify-content-between">
                      <p class="mb-1">Karbohidrat</p>
                      <p class="mb-1">{{ round(($makanan->karbohidrat / auth()->user()->batasKarbo) * 100) }}%</p>
                  </div>
                  <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar progres-karbohidrat" style="width: {{ ($makanan->karbohidrat / auth()->user()->batasKarbo) * 100 }}%"></div>
                  </div>
                  <p class="m-0 text-biru">{{ $makanan->karbohidrat }}/{{ auth()->user()->batasKarbo }} g</p>
              </div>
              <div class="progres-catatan mb-1">
                  <div class="d-flex justify-content-between">
                      <p class="mb-1">Protein</p>
                      <p class="mb-1">{{ round(($makanan->protein / auth()->user()->batasProtein) * 100) }}%</p>
                  </div>
                  <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar progres-protein" style="width: {{ ($makanan->protein / auth()->user()->batasProtein) * 100 }}%"></div>
                  </div>
                  <p class="m-0 text-biru">{{ $makanan->protein }}/{{ auth()->user()->batasProtein }} g</p>
              </div>
              <div class="progres-catatan mb-1">
                  <div class="d-flex justify-content-between">
                      <p class="mb-1">Garam</p>
                      <p class="mb-1">{{ round(($makanan->garam / auth()->user()->batasGaram) * 100) }}%</p>
                  </div>
                  <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar progres-garam" style="width: {{ ($makanan->garam / auth()->user()->batasGaram) * 100 }}%"></div>
                  </div>
                  <p class="m-0 text-biru">{{ $makanan->garam }}/{{ auth()->user()->batasGaram }} g</p>
              </div>
              <div class="progres-catatan mb-1">
                  <div class="d-flex justify-content-between">
                      <p class="mb-1">Gula</p>
                      <p class="mb-1">{{ round(($makanan->gula / auth()->user()->batasGula) * 100) }}%</p>
                  </div>
                  <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar progres-gula" style="width: {{ ($makanan->gula / auth()->user()->batasGula) * 100 }}%"></div>
                  </div>
                  <p class="m-0 text-biru">{{ $makanan->gula }}/{{ auth()->user()->batasGula }} g</p>
              </div>
              <div class="progres-catatan mb-1">
                  <div class="d-flex justify-content-between">
                      <p class="mb-1">Lemak</p>
                      <p class="mb-1">{{ round(($makanan->lemak / auth()->user()->batasLemak) * 100) }}%</p>
                  </div>
                  <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar progres-lemak" style="width: {{ ($makanan->lemak / auth()->user()->batasLemak) * 100 }}%"></div>
                  </div>
                  <p class="m-0 text-biru">{{ $makanan->lemak }}/{{ auth()->user()->batasLemak }} g</p>
              </div>
                @endauth
                @guest
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
                @endguest
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="w-100 bg-biru-muda text-biru p-3 mb-3">
                  Deskripsi
                </div>
                <p>{{ $makanan->deskripsi }}</p>
              </div>
            </div>
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
