<?php
include_once("koneksi.php");
$IdAnggota = isset($_GET['IdAnggota']) ? $_GET['IdAnggota'] : false;

mysqli_query($koneksi, "DELETE FROM datapeminjaman WHERE IdAnggota='$IdAnggota' ");

header("location: admin.php");

 ?>