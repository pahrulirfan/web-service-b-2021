<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $d)
            <tr>
                <td>1</td>
                <td>{{ $d->kolom_nama }}</td>
                <td>{{ $d->kolom_nim }}</td>
                <td>{{ $d->kolom_umur }}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>
