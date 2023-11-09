@extends('layouts.main')

@section('container')
    <section class="mt-5 py-5 min-vh-100">
        <div class="container-lg">
            @if(!$history)
            <div class="calculator pt-5">
                <div class="col-12 text-center mb-4">
                    <h1 class="fw-bolder">BMI</h1>
                </div>
                <div class="bmi-graph bg-biru-muda p-4 rounded-4">
                    <canvas id="bmiChart" style="min-height: 300px"></canvas>
                </div>
                <h4 class="text-center mt-5">Hitung Berat badanmu di sini</h4>
                <form action="" method="post" class="row m-auto mt-3" style="max-width: 600px;">
                    @csrf
                    <div class="col-6 d-flex flex-column">
                        <label for="bb">Berat Badan</label>
                        <input type="number" class="form-control mt-2" name="berat_badan" id="bb" placeholder="Kg" required>
                    </div>
                    <div class="col-6 d-flex flex-column">
                        <label for="tb">Tinggi Badan</label>
                        <input type="number" class="form-control mt-2" name="tinggi_badan" id="tb" placeholder="cm" required>
                    </div>
                    <div class="col-6 mt-3">
                        <button type="reset" class="btn bg-biru-muda w-100">Reset</button>
                    </div>
                    <div class="col-6 mt-3">
                        <button type="submit" class="btn bg-biru-muda w-100">Hitung</button>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert" style="z-index: 100">
                            BMI berhasil dicatat. Nilai BMI anda adalah <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </form>
            </div>
            @endif
            <div class="row mt-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-5">
                        <a href="/bmi" class="btn btn-primary border border-0 navy text-biru-muda">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2.84208L2.10526 3.94734L4.31579 1.73682M1 7.99997L2.10526 9.10524L4.31579 6.89471M1 13.1579L2.10526 14.2631L4.31579 12.0526M6.89474 7.99997H15H6.89474ZM6.89474 13.1579H15H6.89474ZM6.89474 2.84208H15H6.89474Z" fill="#D9F4FF"/>
                                <path d="M1 2.84208L2.10526 3.94734L4.31579 1.73682M1 7.99997L2.10526 9.10524L4.31579 6.89471M1 13.1579L2.10526 14.2631L4.31579 12.0526M6.89474 7.99997H15M6.89474 13.1579H15M6.89474 2.84208H15" stroke="#D9F4FF" stroke-width="1.76471" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Recents
                        </a>
                        <a href="/bmi/history" class="btn btn-primary border border-0 biru">
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
                    @if(count($bmis) > 0)
                    <div class="col-12 p-2 px-3 border rounded-3 my-3">
                        <div class="d-flex justify-content-between align-items-center text-biru">
                            <p class="m-0 fw-bolder">Today</p>
                            <p class="m-0 fw-bolder">{{ date('Y-m-d') }}</p>
                        </div>
                    </div>
                    @endif
                    @foreach($bmis as $bmi)
                    <div class="col-lg-4 col-12-sm container-catatan-makanan p-1">
                        <div class="card card-catatan-bmi" style="border-radius: 10px; border-left: 10px solid {{ $bmi->kategori['color'] }}">
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
                    <div class="col-12 p-2 px-3 border rounded-3 my-3">
                        <div class="d-flex justify-content-between align-items-center text-biru">
                            <p class="m-0 fw-bolder">{{ $bmiPerTanggal[0]->hari }}</p>
                            <p class="m-0 fw-bolder">{{ $tanggal }}</p>
                        </div>
                    </div>
                    @foreach($bmiPerTanggal as $bmi)
                        <div class="col-lg-4 col-12-sm container-catatan-makanan p-1">
                            <div class="card card-catatan-bmi" style="border-radius: 10px; border-left: 10px solid {{ $bmi->kategori['color'] }}">
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
                type: 'line', // Ganti sesuai jenis grafik yang Anda inginkan
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins:{
                        legend: {
                            position: 'top'
                        }
                    },
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
                            Swal.fire('Error!', 'Something went wrong!', 'error');
                            console.error(error);
                        }
                    });
                }
                })
            })
        });
    </script>
@endsection
