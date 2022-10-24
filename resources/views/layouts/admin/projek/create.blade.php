{{-- @extends('layouts.admin.layout.index')
@section('title', 'Tambah Projek')
@section('title-page', 'Tambah Projek')
@section('content') --}}
<div class="card">
    <div class="card-header bg-primary text-light">Tambah Projek {{ $siswa->nama }}</div>
    <div class="card-body py-3">
        <!--begin::Table container-->
        <form action="{{ route('masterprojek.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Projek:</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"required
                    id="nama" value="{{ old('nama') }}">
                <small class="text-muted text-small">NB : Nama tidak boleh lebih 20 karakter</small>
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
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" required
                    rows="7" spellcheck="true">
                </textarea>
                <small class="text-muted text-small">NB : Deskripsi tidak boleh lebih 200 karakter</small>
                @error('deskripsi')
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
{{-- @endsection --}}
