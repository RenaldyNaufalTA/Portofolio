@extends('layouts.admin.layout.index')
@section('title', 'Master Projek')
@section('title-page', 'Master Projek')
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
                <div class="card-header py-3 bg-success">
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
                                            <a class="btn btn-warning btn-rounded btn-sm"
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
                <div class="card-header py-3 bg-success">
                    <h6 class="m-0 font-weight-bold text-light">Data Projek</h6>
                </div>
                <div class="card-body" id="projek">

                </div>
            </div>
        </div>
    </div>
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
    <script>
        function create($id) {
            $.get('masterprojek/create/' + $id, function(data) {
                $('#projek').html(data);
            });
        }

        function show($id) {
            $.get('masterprojek/' + $id, function(data) {
                $('#projek').html(data);
            });
        }

        // function edit($id) {
        //     $.get('masterprojek/edit/' + $id, function(data) {
        //         $('#projek').html(data);
        //     });
        // }
    </script>


@endsection
