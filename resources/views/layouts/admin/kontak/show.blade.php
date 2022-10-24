@if ($kontaks->isEmpty())
    <div class="text-danger text-center">
        <h5>Kontak tidak ada</h5>
    </div>
@else
    <div class="card m-2">
        <div class=" card-header p-2 bg-primary text-light">
            <h6 class="mb-0 d-inline">List Kontak
                {{ $siswa->nama }}
            </h6>
        </div>
        <div class="card-body m-0">
            <table class="table text-dark" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Kontak</th>
                    @can('admin')
                        <th>Action</th>
                    @endcan
                </thead>
                <tbody>
                    @foreach ($kontaks as $kontak)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kontak->jenis_kontak }}</td>
                            <td>{{ $kontak->pivot->deskripsi }}</td>
                            <td>
                                @can('admin')
                                    <a href="/masterkontak/{{ $kontak->pivot->id }}/edit" class="btn btn-success btn-sm"><i
                                            class="fas fa-pen"></i></a>
                                    <form action="{{ url('masterkontak', $kontak->pivot->id) }}" method="post"
                                        class="ms-1 d-inline-flex">
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
