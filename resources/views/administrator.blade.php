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
<a href="{{ url('administrator/add') }}"><button class="btn btn-primary btn-sm mt-3">TAMBAH DATA</button></a>
<table class="table table-bordered text-center mt-3">
    <tr>
        <th>NO</th>
        <th>ID ADMIN</th>
        <th>NAMA ADMIN</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
        <th>AKSI</th>
    </tr>
    @foreach ($table_administrator as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->id_adm }}</td>
        <td>{{ $item->nama_adm }}</td>
        <td>{{ $item->jk=='L'?'Laki-Laki':'Perempuan' }}</td>
        <td>{{ $item->alamat }}</td>
        <td>
            <a href="administrator/hapus/{{ $item->id_adm }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>Delete</a>
            <a href="administrator/edit/{{ $item->id_adm }}" class="btn btn-success btn-sm">Edit</a>
        </td>
        <!-- <td>
            <a href="administartor/hapus/{{$item->id_adm}}" onclick="return window.comfirm('hapus data ini')"><button class="btn btn-danger btn-sm mt-3">HAPUS</button></a> -->
            <!-- <a href="administrator/edit/{{$item->id_adm}}"><button class="btn btn-succes btn-sm mt-3">UPDATE</button></a> -->
        <!-- </td> -->
    </tr>
    @endforeach
</table> 
</body>
</html>
