@extends('layouts.admin.layout.index')
@section('title', 'Tambah Siswa')
@section('title-page', 'Edit Siswa')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-light">Edit Projek</div>
        <div class="card-body py-3">
            <!--begin::Table container-->
            <form action="{{ route('masterprojek.update', $projek->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Projek:</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama_projek"
                        required id="nama" value="{{ $projek->nama_projek }}">
                    @error('nama')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                <label for="foto" class="form-label">Foto :</label>
                <input type="file" name="foto" id="foto"
                    class="form-control p-1 @error('foto') is-invalid @enderror" required>
                @error('foto')
                    <div class="alert p-2 alert-sm alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi :</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="3"
                        required>{{ $projek->deskripsi }}
                </textarea>
                    @error('deskripsi')
                        <div class="alert p-2 alert-sm alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal :</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                        id="tanggal" required value="{{ $projek->tanggal }}">
                    @error('tanggal')
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
