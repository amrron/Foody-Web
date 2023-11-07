@extends('layouts.admin')

@section('section')
    <section class="overflow-y-scroll" style="width: calc(100% - 300px)">
        <div class="row mt-3 mx-3 text-biru">
            Hello Admin Orion
        </div>
        <div class="row m-3 mt-5">
            <div class="col-6 d-flex justify-content-between align-items-center">
                <h3 class="fw-bold p-0 m-0">FEEDBACK</h3>
                @if (request('search'))
                    <a href="/adminpanel/feedback" class="btn bg-biru-muda p-2"><i
                            class="fa-solid fa-rotate-right text-biru"></i></a>
                @endif
            </div>
            <div class="col-6">
                <form action=""
                    class="w-100 h-100 bg-biru-muda d-flex align-items-center justify-content-between ps-3 pe-2 rounded-2">
                    <input type="text" class="bg-biru-muda w-100" name="search" value="{{ request('search') }}"
                        style="outline: none" placeholder="Cari user...">
                    <button type="submit" class="bg-biru-muda p-2"><i
                            class="fa-solid fa-magnifying-glass text-biru"></i></button>
                </form>
            </div>
        </div>
        <div class="row mx-3">
            <table class="table table-borderless border">
                <thead>
                    <tr>
                        <td class="px-3 text-center" style="background-color: #D9F4FF">No</td>
                        <td style="background-color: #D9F4FF">Action</td>
                        <td style="background-color: #D9F4FF">Nama</td>
                        <td style="background-color: #D9F4FF">Waktu</td>
                        <td style="background-color: #D9F4FF">Pesan</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($feedback as $feed)
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td>
                                <a href="/adminpanel/feedback/{{ $feed->id }}"
                                    class="btn p-1 px-2 bg-biru-muda view_more text-nowrap" data-bs-toggle="modal" data-bs-target="#detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10"
                                        viewBox="0 0 13 10" fill="none">
                                        <path
                                            d="M12.6682 4.85622C12.1705 3.56892 11.3066 2.45567 10.1831 1.65404C9.05961 0.852419 7.72586 0.397567 6.3467 0.345703C4.96753 0.397567 3.63378 0.852419 2.51031 1.65404C1.38683 2.45567 0.522871 3.56892 0.0252075 4.85622C-0.0084025 4.94918 -0.0084025 5.05098 0.0252075 5.14394C0.522871 6.43124 1.38683 7.54449 2.51031 8.34611C3.63378 9.14774 4.96753 9.60259 6.3467 9.65445C7.72586 9.60259 9.05961 9.14774 10.1831 8.34611C11.3066 7.54449 12.1705 6.43124 12.6682 5.14394C12.7018 5.05098 12.7018 4.94918 12.6682 4.85622ZM6.3467 8.8082C4.10413 8.8082 1.73463 7.14532 0.875689 5.00008C1.73463 2.85483 4.10413 1.19195 6.3467 1.19195C8.58926 1.19195 10.9588 2.85483 11.8177 5.00008C10.9588 7.14532 8.58926 8.8082 6.3467 8.8082Z"
                                            fill="#1270EE" />
                                        <path
                                            d="M6.34637 2.46118C5.84425 2.46118 5.35341 2.61008 4.93591 2.88904C4.51842 3.168 4.19302 3.5645 4.00087 4.02839C3.80872 4.49229 3.75844 5.00275 3.8564 5.49522C3.95436 5.98769 4.19615 6.44005 4.5512 6.7951C4.90625 7.15015 5.35861 7.39194 5.85108 7.4899C6.34355 7.58786 6.85401 7.53758 7.31791 7.34543C7.7818 7.15328 8.1783 6.82788 8.45726 6.41039C8.73622 5.99289 8.88512 5.50205 8.88512 4.99993C8.88512 4.32661 8.61764 3.68087 8.14154 3.20476C7.66543 2.72866 7.01969 2.46118 6.34637 2.46118ZM6.34637 6.69243C6.01162 6.69243 5.6844 6.59317 5.40607 6.40719C5.12774 6.22122 4.9108 5.95689 4.7827 5.64762C4.6546 5.33836 4.62108 4.99805 4.68639 4.66974C4.75169 4.34143 4.91289 4.03985 5.14959 3.80315C5.38629 3.56645 5.68787 3.40526 6.01618 3.33995C6.34449 3.27465 6.6848 3.30816 6.99406 3.43627C7.30332 3.56437 7.56766 3.7813 7.75363 4.05963C7.9396 4.33796 8.03887 4.66519 8.03887 4.99993C8.03887 5.44881 7.86055 5.8793 7.54315 6.19671C7.22574 6.51411 6.79525 6.69243 6.34637 6.69243Z"
                                            fill="#1270EE" />
                                    </svg>
                                    View More
                                </a>
                            </td>
                            <td>{{ $feed->nama }}</td>
                            <td>{{ $feed->created_at }}</td>
                            <td>{{ substr($feed->pesan, 0, 100) }}</td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Feedback</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="no_hp" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="6" disabled readonly></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.view_more').click(function(e) {
                e.preventDefault();
                var url = $(this).attr('href')

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(resp){
                        $('#nama').val(resp.nama);
                        $('#email').val(resp.email);
                        $('#no_hp').val(resp.no_hp);
                        $('#pesan').html(resp.pesan);
                    },
                    error: function (xhr, status, error) {
                        console.error('Terjadi kesalahan:', error);
                    }
                })
            })
        })
    </script>
@endsection
