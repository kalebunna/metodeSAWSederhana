@extends('templates/app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Daftar Peserta</div>
                <div class="card-body">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th style="width: 4%">NO</th>
                                <th>Nama</th>
                                <th>Nilai Rata-Rata</th>
                                <th>Nilai Matematika</th>
                                <th>Keterampilan</th>
                                <th>Perilaku</th>
                                <th>Waktu Pengerjaan (Max 120 Menit)</th>
                                <th class="text-center" style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <form action="{{ route('nilai.update', $data->id) }}" method="post">
                                        @csrf
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->peserta->name }}</td>
                                        <td><input class="form-control" type="text" name="nilai_rata_rata"
                                                id="nilai_rata_rata" value="{{ $data->nilai_rata_rata }}"></td>
                                        <td><input class="form-control" type="text" name="nilai_matematika"
                                                id="nilai_matematika" value="{{ $data->nilai_matematika }}"></td>
                                        <td><input class="form-control" type="text" name="keterampilan" id="keterampilan"
                                                value="{{ $data->keterampilan }}"></td>
                                        <td><input class="form-control" type="text" name="perilaku" id="perilaku"
                                                value="{{ $data->perilaku }}"></td>
                                        <td><input class="form-control" type="text" name="kecepatan" id="kecepatan"
                                                value="{{ $data->kecepatan }}"></td>
                                        <td class="text-center">
                                            <button type="submit" class="btn btn-success btn-block">Simpan</button>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
