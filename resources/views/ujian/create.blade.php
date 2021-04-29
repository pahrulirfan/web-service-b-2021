@extends('template')

@section('content')
    <div class="container">
        <h2>Input Ujian</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('ujian.store') }}" method="post" data-parsley-validate>
            @csrf
            <div class="form-group">
                <label>Nama MK</label>
                <input required type="text" value="{{ old('nama_mk') }}" name="nama_mk"
                       class="form-control @error('nama_mk') is-invalid @enderror">
                @error('nama_mk')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>dosen</label>
                <input required type="text" value="{{ old('dosen') }}" name="dosen" class="form-control">
            </div>
            <div class="form-group">
                <label>jumlah_soal</label>
                <input type="number" value="{{ old('jumlah_soal') }}" name="jumlah_soal" class="form-control">
            </div>
            <div class="form-group">
                <label>keterangan</label>
                <textarea name="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
            </div>
            <input type="submit" name="submit" value="Save Data" class="btn btn-primary">
            <a href="{{ route('ujian.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
            integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
            crossorigin="anonymous"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/parsley.css">
@endsection
