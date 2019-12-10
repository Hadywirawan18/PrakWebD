<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Mahasiswa</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="Pendaftaran/css/stylecss.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SISKA-UBG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="data_mhs.html">Data Mahasiswa</a>
        <a class="nav-item nav-link" href="data_nilai.html">Data Nilai</a>
      </div>
    </div>
  </nav>

  <div class="container">

    <h3 style="text-align: center;"> Form Tambah Mahasiswa </h3>
    <div class="col-sm-6">
        <?php
        include "koneksi.php";
        //tampilkan data dari sql dlm bentuk objek
        $sql = $conn->query("SELECT *FROM tbl_mhs WHERE nim_mahasiswa=".$_GET['nim']);
        //konvert ke array
        $s = mysqli_fetch_array($sql);
        
        ?>

    <form action="proses_ubah.php" method="POST">
      <div class="row">
        <div class="col-sm-6">
          <label for="">Nim Mahasiswa</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="nim_mhs" class="form-control" maxlength="10" value="<?php
            echo $s['nim_mahasiswa'] ?>" readonly>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="">Nama Mahasiswa</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="nama_mhs" class="form-control" value="<?php
            echo $s['nama_mahasiswa'] ?>">
        </div>
      </div>
      <div class="row">
          <div class="col-sm-6">
            <label for="">Smester</label>
          </div>
          <div class="col-sm-6">
            <input type="number" name="smester" class="form-control" value="<?php
            echo $s['smester'] ?>">
          </div>
        </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="">Jurusan</label>
        </div>
        <div class="col-sm-6">
          <select name="jurusan" class="form-control" id="">
            <option>--Pilih Jurusan--</option>
            <option value="S1 ILKOM" <?= $s['jurusan'] == 'S1 ILKOM'? 'selected="selected"':''?>>S1 ILKOM</option>
            <option value="S1 DKV" <?= $s['jurusan'] == 'S1 DKV'? 'selected="selected"':''?>>S1 DKV</option>
            <option value="D3 MI" <?= $s['jurusan'] == 'D3 MI'? 'selected="selected"':''?>>D3 MI</option>
            <option value="D3 RPL" <?= $s['jurusan'] == 'D3 RPL'? 'selected="selected"':''?>>D3 RPL</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="">Alamat</label>
        </div>
        <div class="col-sm-6">
          <textarea name="alamat" value=""><?php
            echo $s['alamat'] ?></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="">Email</label>
        </div>
        <div class="col-sm-6">
          <input type="email" name="email" class="form-control" value="<?php
            echo $s['email'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="">No. HP</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="no_hp" class="form-control" value="<?php
            echo $s['no_hp'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="">Jenis Kelamin</label>
        </div>
        <div class="col-sm-6">
          <input type="radio" name="jenis_kelamin" value="L" <?= $s['jenis_kelamin']=='L'? 'checked':'' ?>>L</input>
          <input type="radio" name="jenis_kelamin" value="P" <?= $s['jenis_kelamin']=='P'? 'checked':'' ?>>P</input>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="">Status</label>
        </div>
        <div class="col-sm-6">
          <input type="radio" name="status" value="Aktif" <?= $s['status_mhs']=='Aktif'? 'checked':'' ?>>Aktif</input>
          <input type="radio" name="status" value="Tidak Aktif" <?= $s['status_mhs']=='Tidak Aktif'?'checked':'' ?>>Tidak Aktif</input>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <button type="submit" name="simpan" class="btn btn-primary">Ubah Mahasiswa</button>
        </div>

      </div>
    </div>
    </form>
  </div>
</body>

</html>