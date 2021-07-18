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
    <title>Cetak Data Suppliers</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pegawai</b></p>
        <table align="center" rules="all" border="1px" style="width: 90%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID suppliers</th>
                    <th>Nama Toko</th>
                    <th>Barang</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key => $value)
                <tr>
                    <td scope="row">{{$key+1}}</td>
                    <td>{{$value->kode}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->barang}}</td>
                    <td>{{$value->alamat}}</td>
                    <td>{{$value->no_hp}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
