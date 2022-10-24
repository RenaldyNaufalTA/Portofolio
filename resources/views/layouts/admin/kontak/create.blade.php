<div class="card">
    <div class="card-header bg-primary text-light">Tambah Kontak {{ $siswa->nama }}</div>
    <div class="card-body py-3">
        <!--begin::Table container-->
        <form action="{{ route('masterkontak.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
            <div class="mb-3">

                <label for="jenis_kontak" class="form-label d-block">Jenis Kontak :</label>
                <select class="custom-select @error('jenis_kontak') is-invalid @enderror" name="jenis_kontak"
                    id="jenis_kontak">
                    <option disabled selected>Pilih</option>
                    @foreach ($jenis as $item)
                        <option value="{{ $item->id }}">{{ $item->jenis_kontak }}</option>
                    @endforeach
                </select>
                @error('jenis_kontak')
                    <div class="alert p-2 alert-sm alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi :</label>
                <input class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi"
                    required>
                <small class="text-muted text-small">NB : Deskripsi tidak boleh lebih 200 karakter</small>
                @error('deskripsi')
                    <div class="alert p-2 alert-sm alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-3 my-3 float-right">Tambah Kontak!</button>
        </form>
        <!--end::Table-->
    </div>
</div>
