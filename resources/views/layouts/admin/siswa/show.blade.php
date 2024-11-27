@extends('layouts.admin.layout.index')
@section('title') '{{ $siswa->nama }}'
@endsection
@section('title-page', 'Detail Siswa')
@section('button')
    <a class="btn btn-secondary" href="/mastersiswa">Kembali</a>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-4 mb-2">
            <div class="card shadow">
                <div class="card-header bg-primary text-light h5 p-3">
                    <i class="fas fa-user"></i>
                    Profil Siswa
                </div>
                <div class="card-body">
                    <section class="text-center">
                        <img height="175" width="175" src="{{ asset('storage/siswa-foto/' . $siswa->foto) }}"
                            class="rounded-circle" alt="{{ $siswa->foto }}">
                        <h3 class="my-3 text-dark">{{ $siswa->nama }}</h3>
                    </section>

                </div>
            </div>
        </div>
        <div class="col-lg-8 ">
            <div class="card shadow-lg ">
                <div class="card-header bg-primary text-light h5 p-3">
                    <i class="fas fa-quote-left"></i>
                    Tentang Siswa
                </div>
                <div class="card-body py-4 text-dark">
                    <div class="col-lg-4 d-inline-flex">
                        <ul class="list-group list-group-flush h5 p-2">
                            <li class="list-group-item">Nisn : {{ $siswa->nisn }}</li>
                            <li class="list-group-item">Nama : {{ $siswa->nama }}</li>
                            <li class="list-group-item">Gender : {{ $siswa->jk }}</li>
                            <li class="list-group-item">Alamat : {{ $siswa->alamat }}</li>
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 offset-lg-1 d-inline-flex">
                        <ul class="list-group list-group-flush h5">
                            <li class="ml-3">Tentang : </li>
                            <li class="list-group-item text-justify">{{ $siswa->about }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-4 mb-2">
            <div class="card shadow">
                <div class="card-header bg-primary text-light h5 p-3">
                    <i class="fas fa-user-plus"></i>
                    Kontak Siswa
                </div>
                <div class="card-body">
                    {{-- <ul class="list-group list-group-flush h5 px-3">
                        @foreach ($siswa->kontak as $item)
                            <li>{{ $item->jenis_kontak }} : {{ $item->pivot->deskripsi }}</li>
                        @endforeach
                    </ul> --}}
                    <table class="table text-dark" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Kontak</th>
                        </thead>
                        <tbody>
                            @foreach ($siswa->kontak as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jenis_kontak }}</td>
                                    <td>{{ $item->pivot->deskripsi }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-light h5 p-3">
                    <i class="fas fa-tasks"></i>
                    Projek SIswa
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>

@endsection
