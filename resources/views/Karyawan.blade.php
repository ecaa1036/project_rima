@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<a href="{{ url('karyawan/add') }}"><button class="btn btn-primary btn-sm mt-3">TAMBAH DATA</button></a>
<table class="table table-bordered text-center mt-3">
    <tr>
        <th>NO</th>
        <th>ID KARYAWAN</th>
        <th>NAMA KARYAWAN</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
        <th>KETERANGAN</th>
        <th>AKSI</th>
    </tr>
    @foreach ($table_absensikaryawan as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->id_karyawan }}</td>
        <td>{{ $item->nama_karyawan }}</td>
        <td>{{ $item->jk=='L'?'Laki-Laki':'Perempuan' }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->keterangan }}</td>
        <td>
            <a href="karyawan/hapus/{{$item->id_karyawan}}"onclick="return window.comfirm('hapus data ini')"><button class="btn btn-danger btn-sm mt-3">HAPUS</button></a>
            <a href="karyawan/edit/{{$item->id_karyawan}}"><button class="btn btn-succes btn-sm mt-3">UPDATE</button></a>
        </td>
    </tr>
    @endforeach
</table> 
</body>
</html>