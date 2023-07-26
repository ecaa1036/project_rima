<form action="{{ '$action' }}" method="POST" enctype="multipart/form-data">
    
    <table>
        <tr>
            <td>ID </td>
            <td><input type="text" name="id_karyawan" id="id_karyawan"></td>
        </tr>
        <tr>
            <td>NAMA </td>
            <td><input type="text" name="nama_karyawan" id="nama_karyawan"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><input type="radio" name="jk" id="jk" value="L">Laki-laki
            <input type="radio" name="jk" id="jk" value="P">Perempuan
            </td>
</tr>
        <tr>
            <td valign=>ALAMAT</td>
            <td><input type="text" name="alamat" id="alamat" cols="30" rows="10"></td>
        </tr>
      
         <tr>
            <td colspan="2">
            <input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body> 
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="container-fluid p-3">
                <div class="col-md-12">
                    <form action="">
                        <div class="mb-2">
                            <label for="" class="form-label ">ID KARYAWAN</label>
                            <input type="text" name="id_karyawan" id="id_karyawan" class="form-control" placeholder="Masukan ID">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">NAMA KARYAWAN</label>
                            <input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control" placeholder="Masukan Nama">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">JENIS KELAMIN</label>
                            <input type="radio" name="jk" id="jk" value="L">Laki-Laki
                            <input type="radio" name="jk" id="jk" value="P">Perempuan
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">TANGGAL</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Masukan tanggaln">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">KETERANGAN</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukan Keterangan">
                        </div>

                        <div class="pt-3">
                            <input type="submit" value="simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

