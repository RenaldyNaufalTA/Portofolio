@extends('layouts.admin.layout.index')
@section('title', 'Tambah Siswa')
@section('title-page', 'Tambah Siswa')
@section('button')
    <a class="btn btn-secondary" href="/mastersiswa">Kembali</a>
@endsection
@section('content')

    <!-- Content Row -->
    <div class="card">
        <div class="card-header bg-primary text-light">Tambah Siswa</div>
        <div class="card-body py-3">
            <!--begin::Table container-->
            <form action="{{ route('mastersiswa.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nisn" class="form-label">Nisn :</label>
                    <input type="text" class="form-control @error('nisn') is-invalid @enderror " name="nisn"required
                        id="nisn" value="{{ old('nisn') }}">
                    @error('nisn')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"required
                        id="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat :</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" required name="alamat"
                        id="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="jk" class="form-label d-block">Jenis Kelamin :</label>
                    <select class="custom-select @error('jk') is-invalid @enderror" name="jk" id="jk">
                        <option disabled selected value="">Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jk')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" required name="email"
                        id="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto :</label>
                    <input type="file" name="foto" id="foto"
                        class="form-control p-1 @error('foto') is-invalid @enderror" required>
                    @error('foto')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="about" class="form-label">About :</label>
                    <textarea class="form-control @error('about') is-invalid @enderror" name="about" id="about" rows="3"
                        required>{{ old('about') }}
                    </textarea>
                    @error('about')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mr-3 my-3 float-right">Tambah Data!</button>
            </form>
            <!--end::Table-->
        </div>
    </div>

@endsection
