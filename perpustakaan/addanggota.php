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
          <label>Id Anggota</label>
          <input type="text" class="form-control" name="IdAnggota">
      </div>
       <div class="form-group">
          <label>Nama Anggota</label>
          <input type="text" class="form-control" name="NamaAnggota">
      </div>
      <div class="form-group">
          <label>Alamat Anggota</label>
          <input type="text" class="form-control" name="AlamatAnggota">
      </div>
      <div class="form-group">
          <label>Status Anggota</label>
          <input type="text" class="form-control" name="StatusAnggota">
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
$IdAnggota = isset($_POST['IdAnggota']) ? $_POST['IdAnggota'] : false;
$NamaAnggota = isset($_POST['NamaAnggota']) ? $_POST['NamaAnggota'] : false;
$AlamatAnggota = isset($_POST['AlamatAnggota']) ? $_POST['AlamatAnggota'] : false;
$StatusAnggota = isset($_POST['StatusAnggota']) ? $_POST['StatusAnggota'] : false;

if (isset($_POST['submit'])) {
  mysqli_query($koneksi, "INSERT INTO dataanggota (IdAnggota, NamaAnggota, AlamatAnggota, StatusAnggota) VALUES ('$IdAnggota', '$NamaAnggota', '$AlamatAnggota','$StatusAnggota')");
  header("location: admin.php");
}


?>

</body>
</html>