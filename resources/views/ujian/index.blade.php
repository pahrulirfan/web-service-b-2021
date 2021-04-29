@extends('template')

@section('content')
    <div class="container">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title">Data Ujian</h4>

                <a href="{{ route('ujian.create') }}" class="btn btn-outline-info">Add Ujian</a>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Matakuliah</th>
                        <th>Dosen</th>
                        <th>Jumlah Soal</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($ujians as $ujian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $ujian->nama_mk }}</td>
                            <td>{{ $ujian->dosen }}</td>
                            <td>{{ $ujian->jumlah_soal }}</td>
                            <td>{{ $ujian->keterangan }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger">delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
