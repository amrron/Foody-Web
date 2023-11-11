@extends('layouts.admin')

@section('section')

    @if(session()->has('success_edit'))
    <div class="alert alert-success d-flex align-items-center" role="alert" style="position: fixed; top: 110px; right: 10px; height: 58px; min-width: 320px">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="24" height="24" ><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        <div>
            <strong>Berhasil</strong> edit makanan!!!!
        </div>
    </div>
    @endif

    <section class="overflow-y-scroll" style="width: calc(100% - 300px)">
        <div class="row mt-3 mx-3 text-biru">
            Hello Admin Orion
        </div>
        <div class="row m-3 mt-5">
            <div class="col-6 d-flex justify-content-between align-items-center">
                <h3 class="fw-bold p-0 m-0">MAKANAN</h3>
                <a href="/adminpanel/fooddata/add" class="btn bg-biru p-2 px-3 text-biru-muda"><i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="col-6">
                <form action="" class="w-100 h-100 bg-biru-muda d-flex align-items-center justify-content-between ps-3 pe-2 rounded-2">
                    <input type="text" class="bg-biru-muda w-100" name="search" value="{{ request('search') }}" style="outline: none" placeholder="Cari makanan...">
                    <button type="submit" class="bg-biru-muda p-2"><i class="fa-solid fa-magnifying-glass text-biru"></i></button>
                </form>
            </div>
        </div>
        <div class="row mx-3">
            <table class="table table-borderless border">
                <thead>
                    <tr>
                        <td class="px-3 text-center" style="background-color: #D9F4FF">No</td>
                        <td style="background-color: #D9F4FF">Action</td>
                        <td style="background-color: #D9F4FF">Nama Makanan</td>
                        <td style="background-color: #D9F4FF">Deskripsi</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($foods as $food)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td>
                            <a href="/adminpanel/fooddata/edit/{{ $food->id }}" class="btn p-1 px-2 bg-biru-muda">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <path d="M6.25921 9.61283L3.90882 7.26243C4.32878 6.52305 4.94132 5.79063 5.74567 5.06749C6.78281 4.13321 8.61348 2.55391 11.2369 0.32958C11.5027 0.104127 11.8435 -0.0131065 12.1918 0.00116541C12.54 0.0154373 12.8701 0.160171 13.1166 0.406617C13.363 0.653063 13.5078 0.98319 13.522 1.33142C13.5363 1.67966 13.4191 2.02052 13.1936 2.28631C10.9662 4.91436 9.38766 6.74502 8.45647 7.77753C7.73333 8.57955 7.00091 9.19132 6.25921 9.61283ZM2.84383 8.3862L5.13699 10.6786L4.08051 12.1527L0 13.541L1.36971 9.44191L2.84383 8.3862Z" fill="#1270EE"/>
                                </svg>
                            </a>
                            <a href="/adminpanel/fooddata/delete/{{ $food->id }}" class="btn p-1 px-2 bg-pink delete-makanan">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                    <path d="M12.0324 2.031C12.212 2.031 12.3842 2.10233 12.5111 2.22929C12.6381 2.35625 12.7094 2.52845 12.7094 2.708C12.7094 2.88755 12.6381 3.05975 12.5111 3.18671C12.3842 3.31367 12.212 3.385 12.0324 3.385H11.3554L11.3534 3.43307L10.7218 12.2821C10.6974 12.6237 10.5446 12.9434 10.294 13.1768C10.0434 13.4102 9.71362 13.54 9.37115 13.54H3.86105C3.51858 13.54 3.18883 13.4102 2.93822 13.1768C2.68761 12.9434 2.53475 12.6237 2.51043 12.2821L1.87879 3.43374C1.87776 3.41752 1.87731 3.40126 1.87744 3.385H1.20044C1.02089 3.385 0.848688 3.31367 0.721726 3.18671C0.594764 3.05975 0.523438 2.88755 0.523438 2.708C0.523438 2.52845 0.594764 2.35625 0.721726 2.22929C0.848688 2.10233 1.02089 2.031 1.20044 2.031H12.0324ZM9.99941 3.385H3.23347L3.86172 12.186H9.37115L9.99941 3.385ZM7.97044 0C8.14999 0 8.32219 0.0713266 8.44915 0.198289C8.57611 0.325251 8.64744 0.497448 8.64744 0.677C8.64744 0.856552 8.57611 1.02875 8.44915 1.15571C8.32219 1.28267 8.14999 1.354 7.97044 1.354H5.26244C5.08289 1.354 4.91069 1.28267 4.78373 1.15571C4.65676 1.02875 4.58544 0.856552 4.58544 0.677C4.58544 0.497448 4.65676 0.325251 4.78373 0.198289C4.91069 0.0713266 5.08289 0 5.26244 0H7.97044Z" fill="#CD224C"/>
                                </svg>
                            </a>
                        </td>
                        <td><a href="/makanan/{{ $food->slug }}">{{ $food->nama }}</a></td>
                        <td>{{ $food->deskripsi }}</td>
                    </tr>
                    @php
                        $i++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script>
        $('.delete-makanan').click(function(e){
            e.preventDefault();

            var deleteUrl = $(this).attr('href');
            var itemToDelete = $(this).closest('tr');

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
                        Swal.fire('Makanan berhasil dihapus', data.message, 'success');

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
    </script>
@endsection