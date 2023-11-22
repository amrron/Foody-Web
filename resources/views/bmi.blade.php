@extends('layouts.main')

@section('container')
    <section class="mt-5 py-5 min-vh-100">
        <div class="container-lg">
            @if(!$history)
            <div class="calculator pt-5">
                <div class="col-12 text-center mb-4">
                    <h1 class="fw-bolder text-biru">BMI</h1>
                </div>
                <div class="bmi-graph bg-biru-muda p-4 rounded-4">
                    <canvas id="bmiChart" style="min-height: 300px"></canvas>
                </div>
                <h4 class="text-center mt-5">Hitung Berat badanmu di sini</h4>
                <form action="" method="post" class="row m-auto mt-3" style="max-width: 600px;">
                    @csrf
                    <div class="col-6 d-flex flex-column">
                        <label for="tb">Tinggi Badan</label>
                        <input type="number" class="form-control mt-2" name="tinggi_badan" id="tb" placeholder="cm" required>
                    </div>
                    <div class="col-6 d-flex flex-column">
                        <label for="bb">Berat Badan</label>
                        <input type="number" class="form-control mt-2" name="berat_badan" id="bb" placeholder="Kg" required>
                    </div>
                    <div class="col-6 mt-3">
                        <button type="reset" class="tombol tombol-biru w-100">Reset</button>
                    </div>
                    <div class="col-6 mt-3">
                        <button type="submit" class="tombol tombol-biru w-100">Hitung</button>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-dismissible fade show mt-4" role="alert" style="z-index: 100; background-color: {{ session('success')['warna_tebal'] }}; color: {{ session('success')['warna'] }}">
                            BMI berhasil dicatat. Nilai BMI anda adalah <strong>{{ session('success')['nilai_bmi'] }}</strong> dengan kategori <strong>{{ session('success')['kategori'] }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </form>
            </div>
            @endif
            <div class="row mt-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-5">
                        <a href="/bmi" class="tombol tombol-biru border border-0 me-2">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2.84208L2.10526 3.94734L4.31579 1.73682M1 7.99997L2.10526 9.10524L4.31579 6.89471M1 13.1579L2.10526 14.2631L4.31579 12.0526M6.89474 7.99997H15H6.89474ZM6.89474 13.1579H15H6.89474ZM6.89474 2.84208H15H6.89474Z" fill="#D9F4FF"/>
                                <path d="M1 2.84208L2.10526 3.94734L4.31579 1.73682M1 7.99997L2.10526 9.10524L4.31579 6.89471M1 13.1579L2.10526 14.2631L4.31579 12.0526M6.89474 7.99997H15M6.89474 13.1579H15M6.89474 2.84208H15" stroke="#D9F4FF" stroke-width="1.76471" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Recents
                        </a>
                        <a href="/bmi/history" class="tombol tombol-biru-muda border border-0">
                            <svg width="16" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.67607 0.46264C5.41246 0.34537 1.91949 3.77133 1.91949 8.00143H0.420107C0.0431675 8.00143 -0.141114 8.45376 0.126932 8.71343L2.46396 11.0588C2.63149 11.2264 2.89116 11.2264 3.05869 11.0588L5.39571 8.71343C5.45359 8.65438 5.4927 8.57952 5.50811 8.49828C5.52351 8.41704 5.51453 8.33305 5.48228 8.25691C5.45003 8.18077 5.39596 8.11588 5.3269 8.07041C5.25783 8.02495 5.17685 8.00095 5.09416 8.00143H3.59478C3.59478 4.73462 6.25848 2.09605 9.54205 2.13793C12.6581 2.17981 15.2799 4.80163 15.3218 7.91767C15.3637 11.1929 12.7251 13.8649 9.45828 13.8649C8.10968 13.8649 6.86159 13.4042 5.87317 12.6252C5.71273 12.4988 5.51143 12.4358 5.30756 12.4482C5.10369 12.4605 4.91148 12.5474 4.76748 12.6922C4.41567 13.044 4.4408 13.6388 4.83449 13.9403C6.15053 14.9811 7.78046 15.545 9.45828 15.5402C13.6884 15.5402 17.1143 12.0473 16.9971 7.78365C16.8882 3.8551 13.6046 0.571534 9.67607 0.46264ZM9.24887 4.65086C8.90544 4.65086 8.62064 4.93566 8.62064 5.27909V8.36162C8.62064 8.6548 8.77979 8.93122 9.03109 9.08199L11.6445 10.6316C11.9461 10.8075 12.3314 10.707 12.5073 10.4138C12.6832 10.1123 12.5827 9.72698 12.2895 9.55107L9.8771 8.1187V5.27071C9.8771 4.93566 9.59231 4.65086 9.24887 4.65086Z" fill="#131049"/>
                            </svg>                        
                            History
                        </a>
                    </div>
                </div>
            </div>
            <div class="row overflow-auto">

               
                @if(!$history)
                    {{-- @if(count($bmis) > 0)
                    <div class="col-12 px-2 py-3">
                        <div class="border rounded-3 p-2">
                            <div class="d-flex justify-content-between align-items-center text-biru">
                                <p class="m-0 fw-bolder">Hari ini</p>
                                <p class="m-0 fw-bolder">{{ date("Y-m-d") }}</p>
                            </div>
                        </div>
                    </div>
                    @endif --}}
                    @foreach($bmis as $bmi)
                    <div class="col-lg-4 col-12-sm container-catatan-makanan py-2">
                        <div class="card card-catatan-bmi overflow-hidden" style="border: 1px solid #CFCCD3; border-radius: 10px">
                            <div class="w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="auto" viewBox="0 0 1080 300" xml:space="preserve">
                                    <rect x="0" y="0" width="100%" height="100%" fill="transparent"></rect>
                                    <g transform="matrix(Infinity NaN NaN Infinity 0 0)" id="c848a679-59c8-49ba-bc32-7dc3d952236d"  >
                                    </g>
                                    <g transform="matrix(1 0 0 1 540 150)" id="a39c811b-fc4f-4c0e-b6f5-5c672359857e"  >
                                    <rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;" vector-effect="non-scaling-stroke"  x="-540" y="-150" rx="0" ry="0" width="1080" height="300" />
                                    </g>
                                    <g transform="matrix(2.66 0 0 2.66 522 16.91)"  >
                                    <path style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: {{ $bmi->kategori['color'] }}; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-180.51, 3)" d="M 8.88159 -104.913 L 392.923 -104.913 L 392.923 16.098 C 392.923 16.098 398.155 72.265 371.286 69.0971 C 345.875 66.1011 365.19 22.4277 340.974 24.0933 C 321.519 25.4314 337.958 94.7558 310.341 85.2519 C 287.348 77.3396 293.395 43.9421 269.413 46.269 C 246.965 48.447 256.928 98.8809 234.483 98.8809 C 197.883 98.8809 222.977 33.8902 185.743 36.7651 C 169.361 38.0301 164.734 73.2394 149.901 73.2394 C 118.953 73.2394 138.546 46.269 112.162 36.7651 C 88.2284 28.1438 101.086 84.1049 77.0069 79.6835 C 52.3402 75.1541 74.5807 47.4139 48.1121 40.443 C 21.6435 33.4721 48.8796 98.9175 10.7863 98.9175 C 10.1429 98.9175 9.50803 98.9053 8.88163 98.8809 C -83.8029 95.276 8.88159 -104.913 8.88159 -104.913 Z" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <div class="card-body overflow-hidden">
                                <h5 class="card-title text-nowrap">Nilai BMI : <span style="color: {{ $bmi->kategori['strongColor'] }}">{{ $bmi->nilai_bmi }}</span></h5>
                                <p class="opacity-50"></p>
                                <a href="/bmi/delete/{{ $bmi->id }}" class="delete-bmi text-biru" style="position: absolute; right: 20px; bottom: 10px; font-size: 20px"><i class="fa-solid fa-trash"></i></a>
                                <span class="py-2 px-3 rounded-5" style="background-color: {{ $bmi->kategori['color'] }}; color: {{ $bmi->kategori['strongColor'] }}">● {{ $bmi->kategori['status'] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                @if($history)
                    @foreach($bmis as $tanggal => $bmiPerTanggal)
                    <div class="col-12 px-2 py-3">
                        <div class="border rounded-3 p-2">
                            <div class="d-flex justify-content-between align-items-center text-biru">
                                <p class="m-0 fw-bolder">{{ $bmiPerTanggal[0]->hari }}</p>
                                <p class="m-0 fw-bolder">{{ $tanggal }}</p>
                            </div>
                        </div>
                    </div>
                    @foreach($bmiPerTanggal as $bmi)
                    <div class="col-lg-4 col-12-sm container-catatan-makanan py-3">
                        <div class="card card-catatan-bmi overflow-hidden" style="border: 1px solid #CFCCD3; border-radius: 10px">
                            <div class="w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="auto" viewBox="0 0 1080 300" xml:space="preserve">
                                    <rect x="0" y="0" width="100%" height="100%" fill="transparent"></rect>
                                    <g transform="matrix(Infinity NaN NaN Infinity 0 0)" id="c848a679-59c8-49ba-bc32-7dc3d952236d"  >
                                    </g>
                                    <g transform="matrix(1 0 0 1 540 150)" id="a39c811b-fc4f-4c0e-b6f5-5c672359857e"  >
                                    <rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;" vector-effect="non-scaling-stroke"  x="-540" y="-150" rx="0" ry="0" width="1080" height="300" />
                                    </g>
                                    <g transform="matrix(2.66 0 0 2.66 522 16.91)"  >
                                    <path style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: {{ $bmi->kategori['color'] }}; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-180.51, 3)" d="M 8.88159 -104.913 L 392.923 -104.913 L 392.923 16.098 C 392.923 16.098 398.155 72.265 371.286 69.0971 C 345.875 66.1011 365.19 22.4277 340.974 24.0933 C 321.519 25.4314 337.958 94.7558 310.341 85.2519 C 287.348 77.3396 293.395 43.9421 269.413 46.269 C 246.965 48.447 256.928 98.8809 234.483 98.8809 C 197.883 98.8809 222.977 33.8902 185.743 36.7651 C 169.361 38.0301 164.734 73.2394 149.901 73.2394 C 118.953 73.2394 138.546 46.269 112.162 36.7651 C 88.2284 28.1438 101.086 84.1049 77.0069 79.6835 C 52.3402 75.1541 74.5807 47.4139 48.1121 40.443 C 21.6435 33.4721 48.8796 98.9175 10.7863 98.9175 C 10.1429 98.9175 9.50803 98.9053 8.88163 98.8809 C -83.8029 95.276 8.88159 -104.913 8.88159 -104.913 Z" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <div class="card-body overflow-hidden">
                                <h5 class="card-title text-nowrap">Nilai BMI : <span style="color: {{ $bmi->kategori['strongColor'] }}">{{ $bmi->nilai_bmi }}</span></h5>
                                <p class="opacity-50"></p>
                                <span class="py-2 px-3 rounded-5" style="background-color: {{ $bmi->kategori['color'] }}; color: {{ $bmi->kategori['strongColor'] }}">● {{ $bmi->kategori['status'] }}</span>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endforeach
                @endif
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
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins:{
                        legend: {
                            position: 'top'
                        }
                    },
                    scales: {
                        x: {
                            display: false
                        },
                    }
                }
            });
        }
    
        // Panggil fungsi untuk membuat grafik saat halaman dimuat
        createChart();
    </script>
    <script>
        $(document).ready(function(){
            $('.delete-bmi').click(function(e) {
                e.preventDefault();
    
                var deleteUrl = $(this).attr('href');
                var itemToDelete = $(this).closest('.container-catatan-makanan');
    
                Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak bisa mengembalikan data setelah dihapus",
                showCancelButton: true,
                confirmButtonColor: '#131049',
                cancelButtonColor: '#fdced0',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: deleteUrl,
                        data: {
                            _token : '{{ csrf_token() }}'
                        },
                        success: function(data){
                            Swal.fire('Catatan berhasil dihapus', data.message, 'success');
    
                            itemToDelete.remove();
                        },
                        error: function (error) {
                            Swal.fire('Error!', error.responseJSON.message, 'error');
                            console.error(error);
                        }
                    });
                }
                })
            })
        });
    </script>
@endsection
