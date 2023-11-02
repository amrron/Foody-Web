@extends('layouts.main')

@section('container')
    <main class="py-4" style="margin-top: 100px">
        <div class="container-lg min-vh-100 mt-5">
            <div class="row">
                <div class="col-lg-12 p-3">
                    <div class="p-3 row border rounded-3">
                        <div class="photo col-3 d-flex flex-column align-items-center">
                            <div class="photo-profile w-100 mb-3">
                                <img src="/img/profileimg.webp" class="w-100 rounded-end-circle rounded-start-circle"
                                    alt="">
                            </div>
                            <a href="" class="btn bg-biru text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                    fill="none">
                                    <path
                                        d="M6.63217 9.35637C5.89991 10.0105 4.81087 9.85306 4.11659 9.15878C3.42244 8.46464 3.2651 7.37585 3.91991 6.64448C4.17648 6.35791 4.46266 6.07263 4.77838 5.78878C5.81553 4.8545 7.64619 3.2752 10.2696 1.05087C10.5354 0.825418 10.8762 0.708184 11.2245 0.722456C11.5727 0.736728 11.9028 0.881461 12.1493 1.12791C12.3957 1.37435 12.5405 1.70448 12.5547 2.05272C12.569 2.40095 12.4518 2.74181 12.2263 3.0076C9.99891 5.63565 8.42037 7.46631 7.48919 8.49882C7.20495 8.81406 6.91928 9.09991 6.63217 9.35637ZM0.810014 9.8713C1.4253 9.43065 2.26907 9.49989 2.80431 10.0349L3.239 10.4695C3.77585 11.0061 3.84529 11.8525 3.4031 12.4695C3.21459 12.7326 2.9485 12.93 2.64213 13.0343L2.55325 13.0645C1.10967 13.5557 -0.271993 12.1815 0.211269 10.7353L0.243541 10.6387C0.346819 10.3296 0.545072 10.061 0.810014 9.8713Z"
                                        fill="#D9F4FF" />
                                </svg> 
                                Edit Photo
                            </a>
                        </div>
                        <div class="data col-9 d-flex flex-column justify-content-center">
                            <h5 class="text-biru">{{ auth()->user()->name }}</h5>
                            <p class="">{{ auth()->user()->jenis_kelamin }}, {{ auth()->user()->usia }} Tahun</p>
                            <table class="">
                                <tr>
                                    <td class="fw-light">Email</td>
                                    <td class="text-biru">{{ auth()->user()->email }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-light">Username</td>
                                    <td class="text-biru">{{ auth()->user()->username }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-light">Tinggi</td>
                                    <td class="text-biru">{{ auth()->user()->tinggi_badan }} cm</td>
                                </tr>
                                <tr>
                                    <td class="fw-light">Berat</td>
                                    <td class="text-biru">{{ auth()->user()->berat_badan }} kg</td>
                                </tr>
                                <tr>
                                    <td class="fw-light">Tanggal lahir</td>
                                    <td class="text-biru">{{ auth()->user()->tanggal_lahir }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/pinkup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Average BMI</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ number_format(auth()->user()->rata_rata_bmi, 2) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/blueup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Last Height</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->tinggi_badan }} cm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/pinkup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Last Weight</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->berat_badan }} kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/blueup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Activity Level</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->aktivitas }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-3">
                    <div class="p-3 row border rounded-3">
                        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                            <h6>Total Konsumsi Kandungan Makanan</h6>
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Karbohidrat</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyKarbo / auth()->user()->batasKarbo) * 100) }}%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-karbohidrat"
                                        style="width: {{ (auth()->user()->dailyKarbo / auth()->user()->batasKarbo) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">{{ auth()->user()->dailyKarbo }}/{{ auth()->user()->batasKarbo }} g
                                </p>
                            </div>
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Protein</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyProtein / auth()->user()->batasProtein) * 100) }}%
                                    </p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-protein"
                                        style="width: {{ (auth()->user()->dailyProtein / auth()->user()->batasProtein) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">
                                    {{ auth()->user()->dailyProtein }}/{{ auth()->user()->batasProtein }} g</p>
                            </div>
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Garam</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyGaram / auth()->user()->batasGaram) * 100) }}%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-garam"
                                        style="width: {{ (auth()->user()->dailyGaram / auth()->user()->batasGaram) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">{{ auth()->user()->dailyGaram }}/{{ auth()->user()->batasGaram }}
                                    g</p>
                            </div>
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Gula</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyGula / auth()->user()->batasGula) * 100) }}%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-gula"
                                        style="width: {{ (auth()->user()->dailyGula / auth()->user()->batasGula) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">{{ auth()->user()->dailyGula }}/{{ auth()->user()->batasGula }} g
                                </p>
                            </div>
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Lemak</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyLemak / auth()->user()->batasLemak) * 100) }}%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-lemak"
                                        style="width: {{ (auth()->user()->dailyLemak / auth()->user()->batasLemak) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">
                                    {{ auth()->user()->dailyLemak }}/{{ auth()->user()->batasLemak }} g</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        const data = {
            labels: ['Karbohidrat', 'Protein', 'Garam', 'Gula', 'Lemak'],
            datasets: [{
                label: 'Dataset 1',
                data: [{{ auth()->user()->dailyKarbo }},
                    {{ auth()->user()->dailyProtein }},
                    {{ auth()->user()->dailyGaram }},
                    {{ auth()->user()->dailyGula }},
                    {{ auth()->user()->dailyLemak }}
                ],
                backgroundColor: ['#17184f', '#dbf3fb', '#fdced0', '#111', '#6C6A85'],
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                    }
                },
            },
        };

        new Chart(ctx, config);
    </script>
@endsection
