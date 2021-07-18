<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="{{ csrf_token()}}">
    <style>
        table.static {
            position: relative;
            border: 1px solid;
        }
    </style>
    <title>Data Table Samsung</title>
</head>
<body>
    <h1 align="center">Data Table SAMSUNG</h1>
    <table align="center" rules="all" border="1px" style="width: 90%">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode Barang</th>
                <th>Nama Handphone</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $value)
            <tr>
                <td scope="row">{{$key+1}}</td>
                <td>{{$value->kode}}</td>
                <td>{{$value->nama}}</td>
                <td>
                    <img src="{{ asset('images/foto_samsung/'.$value->foto)}}" width="75px"/>
                </td>
                <td>{{$value->harga}}</td>
                <td>{{$value->stok}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
