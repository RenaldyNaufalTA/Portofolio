@extends('layouts.home')

@section('container')
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Tambah Data Siswa</span>
            <span class="text-muted mt-1 fw-bold fs-7"></span>
        </h3>
        <div class="kembali">
            <a href="/dashboard" class="btn mt-3 btn-sm btn-secondary">Back</a>
        </div>
    </div>
    <!--end::Header-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <form action="{{ route('dashboard.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nis" class="form-label">Nis :</label>
                <input type="text" class="form-control" @error('nis') is-invalid @enderror name="nis" id="nis">
                @error('nis')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" @error('nama') is-invalid @enderror name="nama"
                    id="nama">
                @error('nama')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">

                <label for="gender" class="form-label">Gender :</label>
                <select class="form-select form-select-md" @error('gender') is-invalid @enderror name="gender"
                    id="gender">
                    <option selected value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('gender')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas :</label>
                <select class="form-select form-select-md" @error('kelas_id') is-invalid @enderror name="kelas_id"
                    id="kelas_id">
                    <option selected value="">Pilih</option>

                    @foreach ($kelas as $kls)
                        <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                    @endforeach

                </select>
                @error('kelas_id')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan :</label>
                <input type="text" class="form-control" @error('jurusan') is-invalid @enderror name="jurusan"
                    id="jurusan">
                @error('jurusan')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-3">Tambah Data!</button>
        </form>
        <!--end::Table-->
    </div>
    <!--end::Table container-->
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
