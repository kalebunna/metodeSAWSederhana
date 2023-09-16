@extends('templates/app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Rangking</div>
                <div class="card-body">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th style="width: 4%">NO</th>
                                <th>Nama</th>
                                <th>Sekolah</th>
                                <th>Nilai</th>
                                <th>Juara</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data['nama'] }}</td>
                                    <td>{{ $data['sekolah'] }}</td>
                                    <td>{{ round($data['nilaiAkhir'], 2) }}</td>
                                    <td>Juara ke- {{ $loop->iteration }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
