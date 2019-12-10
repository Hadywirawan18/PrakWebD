<?php

include "koneksi.php";

$conn->query("DELETE FROM tbl_mhs WHERE nim_mahasiswa=".$_GET['nim']);

?>

<script>
document.location = 'data_mhs.php'
</script>