<!DOCTYPE html>
<html>
<head>
	<title>
		Sistem Perpustakaan Online
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar bg-success navbar-dark navbar-expand-sm fixed-top">
	<a href="#" class="navbar-brand">Sistem Perpustakaan Online</a>
	<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a  class="nav-link" href="main.php">Admin</a></li>
				</ul>
			</div>

</nav>
<div class="container">
  <div class="row row-padding">
    <div class="col-md-4 offset-md-4">
    <form method="POST">
      <div class="form-group">
          <label>Kode Buku</label>
          <input type="text" class="form-control" name="KodeBuku">
      </div>
       <div class="form-group">
          <label>Judul Buku</label>
          <input type="text" class="form-control" name="JudulBuku">
      </div>
      <div class="form-group">
          <label>Pengarang Buku</label>
          <input type="text" class="form-control" name="PengarangBuku">
      </div>
      <div class="form-group">
          <label>jumlah Buku</label>
          <input type="text" class="form-control" name="JumlahBuku">
      </div>
      <div class="form-group">
          <label>Penerbit Buku</label>
          <input type="text" class="form-control" name="PenerbitBuku">
      </div>
      <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
  </form>
  </div>
  </div>
</div>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<footer class="page-footer font-small bg-light footer-padding">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#">Telkom Developer</a>
  </div>
  <!-- Copyright -->

</footer>
<?php

include_once("koneksi.php");
$KodeBuku = isset($_POST['KodeBuku']) ? $_POST['KodeBuku'] : false;
$JudulBuku = isset($_POST['JudulBuku']) ? $_POST['JudulBuku'] : false;
$PengarangBuku = isset($_POST['PengarangBuku']) ? $_POST['PengarangBuku'] : false;
$JumlahBuku = isset($_POST['JumlahBuku']) ? $_POST['JumlahBuku'] : false;
$PenerbitBuku = isset($_POST['PenerbitBuku']) ? $_POST['PenerbitBuku'] : false;

if (isset($_POST['submit'])) {
  mysqli_query($koneksi, "INSERT INTO databuku (KodeBuku, JudulBuku, PengarangBuku, JumlahBuku, PenerbitBuku) VALUES ('$KodeBuku', '$JudulBuku', '$PengarangBuku','$JumlahBuku','$PenerbitBuku')");
  header("location: admin.php");
}


?>

</body>
</html>