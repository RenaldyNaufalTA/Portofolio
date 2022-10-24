@if ($projek->isEmpty())
    <div class="text-danger text-center">
        <h5>Projek tidak ada</h5>
    </div>
@else
    <div class="card m-2">
        <div class="ms-2 card-header p-2 bg-primary text-light">
            <h6 class="mb-0 d-inline">List Projek
                {{ $siswa->nama }}
            </h6>
        </div>
        <div class="card-body m-0">
            <table class="table text-dark" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Nama Projek</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    @can('admin')
                        <th>Action</th>
                    @endcan
                </thead>
                <tbody>
                    @foreach ($projek as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_projek }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                @can('admin')
                                    <a href="/masterprojek/{{ $item->id }}/edit" class="btn btn-success btn-sm"><i
                                            class="fas fa-pen"></i></a>
                                    <form action="{{ url('masterprojek', $item->id) }}" method="post"
                                        class=" d-inline-flex">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus data ?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endif
