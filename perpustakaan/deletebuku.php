<?php
include_once("koneksi.php");
$KodeBuku = isset($_GET['KodeBuku']) ? $_GET['KodeBuku'] : false;

mysqli_query($koneksi, "DELETE FROM databuku WHERE KodeBuku='$KodeBuku' ");

header("location: admin.php");

 ?>