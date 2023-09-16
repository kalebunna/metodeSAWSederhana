@extends('templates/app')
@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('peserta.create') }}" class="btn btn-primary">Tambah Data Baru</a>
    </div>
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
                                <th>Alamat</th>
                                <th>Sekolah</th>
                                <th class="text-center" style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->sekolah }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
