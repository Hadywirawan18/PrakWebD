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

$simpan = "UPDATE tbl_mhs SET nim_mahasiswa='".$nim."', nama_mahasiswa='".$nama."', smester=".$smester.", jurusan='".$jurusan."', alamat='".$alamat."', no_hp=".$no_hp.",
email='".$email."', jenis_kelamin='".$jk."', status_mhs='".$status."' WHERE nim_mahasiswa=".$nim;



if (mysqli_query($conn,$simpan)){

    echo "<script language = 'JavaScript'> 
    alert('Data Updated!');
    document.location = 'data_mhs.php'
    </script>";
}else{
    echo "Error !".mysqli_error($conn);
}

?>
