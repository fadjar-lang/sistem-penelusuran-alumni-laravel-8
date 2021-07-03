<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>New Data Tambah</title>
  </head>
  <body>
      <div class="container">
      <h1>Masukkan Data Diri</h1>
      <br>
      <p style="color: red">note:</p>
      <p>jika setelah submit mengarah ke menu login, anda berhasil registrasi</p>
    </div>
    <div class="container">
        <form action="/new" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
            <label>tgl lahir</label>
            <input type="date" class="form-control" name="tgl_lahir">
            </div>
            <div class="form-group">
            <label>jenis kelamin</label>
            <input type="text" class="form-control" name="jk">
            </div>
            <div class="form-group">
            <label>alamat</label>
            <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
            <label>nisn</label>
            <input type="text" class="form-control" name="nisn">
            </div>
            <div class="form-group">
            <label>no ijazah</label>
            <input type="text" class="form-control" name="no_ijazah">
            </div>
            <div class="form-group">
            <label>jurusan</label>
            <input type="text" class="form-control" name="jurusan">
            </div>
            <div class="form-group">
            <label>no telp</label>
            <input type="text" class="form-control" name="no_telp">
            </div>
            <div class="form-group">
            <label>pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan">
            </div>
            <div class="form-group">
            <label>tahun masuk</label>
            <input type="text" class="form-control" name="tahun_masuk">
            </div>
            <div class="form-group">
            <label>tahun lulus</label>
            <input type="text" class="form-control" name="tahun_lulus">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>