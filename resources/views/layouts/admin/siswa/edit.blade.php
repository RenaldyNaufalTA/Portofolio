@extends('layouts.admin.layout.index')
@section('title', 'Edit Siswa')
@section('title-page', 'Edit Siswa')
@section('button')
    <a class="btn btn-secondary" href="/mastersiswa">Kembali</a>
@endsection
@section('content')
    <!-- Content Row -->
    <div class="card">
        <div class="card-header bg-primary text-light">Edit Siswa</div>
        <div class="card-body py-3">
            <!--begin::Table container-->
            <form action="
            {{ url('mastersiswa/' . $siswa->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="nisn" class="form-label">Nisn :</label>
                    <input type="text" class="form-control @error('nisn') is-invalid @enderror " name="nisn"
                        id="nisn" value="{{ $siswa->nisn }}">
                    @error('nisn')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror " name="nama"
                        id="nama" value="{{ $siswa->nama }}">
                    @error('nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat :</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror " name="alamat"
                        id="alamat" value="{{ $siswa->alamat }}">
                    @error('alamat')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="jk" class="form-label">Jenis Kelamin :</label>
                    <select class="custom-select @error('jk') is-invalid @enderror" name="jk" id="jk">
                        <option disabled value="Pilih" selected>
                            Pilih</option>
                        <option value="Laki-laki" @if ($siswa->jk == 'Laki-laki') {{ 'selected' }} @endif>
                            Laki-laki</option>
                        <option value="Perempuan" @if ($siswa->jk == 'Perempuan') {{ 'selected' }} @endif>
                            Perempuan</option>
                    </select>
                    @error('jk')
                        <div class="alert-sm p-2 rounded alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror " name="email"
                        id="email" value="{{ $siswa->email }}">
                    @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto :</label>
                    <img height="200" width="200" src="{{ asset('storage/siswa-foto/' . $siswa->foto) }}"
                        class="img-fluid my-2 d-block" alt="">
                    <input type="file" class="form-control p-1 @error('foto') is-invalid @enderror" name="foto"
                        id="foto">
                    @error('foto')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="about" class="form-label">About :</label>
                    <textarea class="form-control @error('about') is-invalid @enderror" name="about" id="about" rows="3"
                        required>{{ $siswa->about }}
                    </textarea>
                    @error('about')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary float-right my-3 mr-3">Edit Data!</button>
            </form>
            <!--end::Table-->
        </div>
    </div>

@endsection
