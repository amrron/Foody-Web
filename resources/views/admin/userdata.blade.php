@extends('layouts.admin')

@section('section')

    <section class="overflow-y-scroll" style="width: calc(100% - 300px)">
        <div class="row mt-3 mx-3 text-biru">
            Hello Admin Orion
        </div>
        <div class="row m-3 mt-5">
            <div class="col-6 d-flex justify-content-between align-items-center">
                <h3 class="fw-bold p-0 m-0">DATA USER</h3>
                @if (request('search'))
                <a href="/adminpanel/userdata" class="btn bg-biru-muda p-2"><i class="fa-solid fa-rotate-right text-biru"></i></a>
                @endif
            </div>
            <div class="col-6">
                <form action="" class="w-100 h-100 bg-biru-muda d-flex align-items-center justify-content-between ps-3 pe-2 rounded-2">
                    <input type="text" class="bg-biru-muda w-100" name="search" value="{{ request('search') }}" style="outline: none" placeholder="Cari user...">
                    <button type="submit" class="bg-biru-muda p-2"><i class="fa-solid fa-magnifying-glass text-biru"></i></button>
                </form>
            </div>
        </div>
        <div class="row mx-3">
            <table class="table table-borderless border table-hover">
                <thead>
                    <tr>
                        <td class="px-3 text-center" style="background-color: #D9F4FF">No</td>
                        <td style="background-color: #D9F4FF">Profile</td>
                        <td style="background-color: #D9F4FF">Username</td>
                        <td style="background-color: #D9F4FF">Name</td>
                        <td style="background-color: #D9F4FF">Email</td>
                        <td style="background-color: #D9F4FF">Bergabung</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td><img src="/img/profileimg.webp" alt="" style="width: 28px" class="rounded-circle"></td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    @php
                        $i++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection