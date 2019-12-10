<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Mahasiswa UBG</title>

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
    <h4 style="text-align: center">Daftar Mahasiswa</h4>
    <a href="tambah_mhs.html" class="btn btn-primary btn-lg active" style="float: right" role="button" aria-pressed="true">Tambah
      Mahasiswa</a>


    <table class="table-bordered table-striped table-hover table-sm table-responsive">
      <thead>
        <tr>
          <th>#</th>
          <th>Nim Mahasiswa</th>
          <th>Nama Mahasiswa</th>
          <th>Smester</th>
          <th>Jurusan</th>
          <th>Alamat</th>
          <th>No. Hp</th>
          <th>E-mail</th>
          <th>Jenis Kelamin</th>
          <th>Status Mahasiswa</th>
          <th>Tools</th>
        </tr>
      </thead>
      <tbody>
        <?php
                        include "koneksi.php";
                        $tampil = "SELECT * FROM tbl_mhs";
                        $mhs = mysqli_query ($conn, $tampil);
                        // var_dump($mhs);
                        $no = 1;
                        foreach($mhs as $mahasiswa){                        
                          ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $mahasiswa['nim_mahasiswa'];?></td>
          <td><?php echo $mahasiswa['nama_mahasiswa'];?></td>
          <td><?php echo $mahasiswa['smester'];?></td>
          <td><?php echo $mahasiswa['jurusan'];?></td>
          <td><?php echo $mahasiswa['alamat'];?></td>
          <td><?php echo $mahasiswa['no_hp'];?></td>
          <td><?php echo $mahasiswa['email'];?></td>
          <td><?php echo $mahasiswa['jenis_kelamin'];?></td>
          <td><?php echo $mahasiswa['status_mhs'];?></td>
          <td>
            
          <a href = "hapus_mhs.php?nim=<?php echo $mahasiswa['nim_mahasiswa'];?>" type="button" onclick="return confirm('Are You Sure to Delete ?');" class="btn btn-danger btn-sm"
          >Hapus</a>
          <a href = "ubah_mhs.php?nim=<?php echo $mahasiswa['nim_mahasiswa'];?>" type="button" class="btn btn-warning btn-sm">Ubah</a>
          
          
          
          </td>
        </tr>
        <?php
        $no++;
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>