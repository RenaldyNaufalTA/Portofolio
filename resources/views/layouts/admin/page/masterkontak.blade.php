@extends('layouts.admin.layout.index')
@section('title', 'Master Kontak')
@section('title-page', 'Master Kontak')
@can('admin')
    @section('button')
        <button class="btn btn-primary rounded-3" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="fas fa-plus"></i> Jenis Kontak
        </button>
    @endsection
@endcan

@section('content')
    {{-- content --}}

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button type="button" data-dismiss="alert" class="close"></button>
        </div>
    @endif

    <div class="row ">
        <div class="col-lg-5">
            <div class="card shadow">
                <div class="card-header py-3 bg-warning">
                    <h6 class="m-0 font-weight-bold text-light">List Siswa</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0" width="100%" cellspacing="0">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>No.</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $siswa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $siswa->nisn }}</td>
                                        <td>{{ $siswa->nama }}</td>
                                        <td>
                                            <a class="btn btn-success bg-gradient btn-rounded btn-sm"
                                                onclick="show({{ $siswa->id }})"><i class="fas  fa-folder-open"></i>
                                            </a>
                                            @can('admin')
                                                <a class="btn btn-info btn-rounded btn-sm"
                                                    onclick="create({{ $siswa->id }})"><i class="fas fa-plus"></i>
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    {{ $siswas->links() }}
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-header py-3 bg-warning">
                    <h6 class="m-0 font-weight-bold text-light">Data Kontak</h6>
                </div>
                <div class="card-body" id="kontak">
                    <div class="text-center h6">Pilih Siswa terlebih dahulu!</div>
                </div>
            </div>
        </div>
    </div>
    @can('admin')

        <div class="row mt-3">
            <div class="col-lg-5">
                <div class="card shadow">
                    <div class="card-header py-3 bg-warning d-inline-flex">
                        <h5 class="m-0 font-weight-bold text-light">List Jenis Kontak</h5>
                        <button onclick="myFunction()" class="btn btn-sm btn-primary btn-rounded ms-auto border-0 "><i
                                class="fas fa-plus"></i></button>
                    </div>
                    <div class="card-body" id="myDIV" style="display: none">
                        <div class="table-responsive">
                            <table class="table" width="100%" cellspacing="0">
                                <thead>
                                    <th>Jenis</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($jenis as $item)
                                        <tr>
                                            <td>{{ $item->jenis_kontak }}</td>
                                            <td>{{ $item->jenis_kontak }}</td>
                                            <td>
                                                <form action="{{ url('masterkontak/jenis', $item->id) }}" method="post"
                                                    class="ms-1 d-inline-flex">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus data ?')"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan

    @if (session()->has('errors'))

        <div class="row mt-3">
            <div class="col-lg-5">
                <div class="alert alert-danger p-3">

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-light" id="staticBackdropLabel">Tambah Jenis Kontak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/masterkontak/create/jenis" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="jenis_kontak" class="form-label text-dark">Jenis Kontak :</label>
                            <input class="form-control @error('jenis_kontak') is-invalid @enderror" name="jenis_kontak"
                                id="jenis_kontak" required>
                            @error('jenis_kontak')
                                <div class="alert p-2 alert-sm alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script>
        function create($id) {
            $.get('masterkontak/create/' + $id, function(data) {
                $('#kontak').html(data);
            });
        }

        function show($id) {
            $.get('masterkontak/' + $id, function(data) {
                $('#kontak').html(data);
            });
        }

        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

@endsection
