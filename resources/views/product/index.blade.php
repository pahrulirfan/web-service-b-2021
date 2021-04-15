<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h2>Data Product</h2>
<table border="1">
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
</body>
</html>
