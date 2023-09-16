@extends('templates/app')
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Tambah Data Peserta
                </div>
                <div class="card-body">
                    <form action="{{ route('peserta.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name"
                                name="name"placeholder="Nama Peserta">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                placeholder="Alamat Peserta">
                        </div>
                        <div class="mb-3">
                            <label for="sekolah" class="form-label">Sekolah</label>
                            <input type="text" class="form-control" id="sekolah" name="sekolah"
                                placeholder="Asal Sekolah">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('peserta.index') }}" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
