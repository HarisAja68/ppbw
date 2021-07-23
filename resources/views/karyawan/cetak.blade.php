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
    <title>Data Table Karyawan</title>
</head>
<body>
    <table align="center" rules="all" border="1px" style="width: 90%">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>Nama Karyawan</th>
                <th>Alamat</th>
                <th>No Handphone</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $value)
            <tr>
                <td scope="row">{{$key+1}}</td>
                <td>{{$value->nip}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->alamat}}</td>
                <td>{{$value->no_hp}}</td>
                <td>
                    <img src="{{ asset('images/foto_karyawan/'.$value->foto)}}" width="75px"/>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
