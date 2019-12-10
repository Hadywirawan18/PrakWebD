<?php

include "koneksi.php";



$nim = $_POST[nim_mhs];
$nama = $_POST[nama_mhs]; 
$smester = $_POST[smester];
$jurusan = $_POST[jurusan];
$alamat = $_POST[alamat];
$email = $_POST[email];
$no_hp = $_POST[no_hp];
$jk = $_POST[jenis_kelamin];
$status = $_POST[status];

$namaFile     = $_FILES['foto']['name'];
$dirTmp       = $_FILES['foto']['tmp_name'];

$folder       = "gambar/".$namaFile;

$upload       = move_uploaded_file($dirTmp,$folder);
 

$simpan = "INSERT INTO tbl_mhs (nim_mahasiswa,nama_mahasiswa,smester,jurusan,
alamat,no_hp,email,jenis_kelamin,status_mhs,foto)  
VALUES ('$nim','$nama', '$smester','$jurusan','$alamat','$no_hp',
'$email','$jk','$status','$folder')";

if ($upload){
    mysqli_query($conn,$simpan);

    echo "<script language = 'JavaScript'> 
    alert('Data Saved!');
    document.location = 'data_mhs.php'
    </script>";
}else{
    echo "Error !".mysqli_error($conn);
}

