@extends('template')
@section('content')
    <div class="container">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title">Data Product</h4>

                <a href="{{ route('product.add') }}" class="btn btn-outline-info">Add Product</a>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>HAPUS</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
