<?php
  include_once("koneksi.php");
  $KodeBuku = isset($_GET['KodeBuku']) ? $_GET['KodeBuku'] : false;
  $query = mysqli_query($koneksi, "SELECT * FROM databuku WHERE KodeBuku='$KodeBuku' ");
  while($row = mysqli_fetch_assoc($query)){
    $JudulBuku = $row['JudulBuku'];
    $PengarangBuku = $row['PengarangBuku'];
    $JumlahBuku = $row['JumlahBuku'];
    $PenerbitBuku = $row['PenerbitBuku'];

  }
?>
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
          <input type="text" class="form-control" name="KodeBuku" value="<?php echo $KodeBuku; ?>">
      </div>
       <div class="form-group">
          <label>Judul Buku</label>
          <input type="text" class="form-control" name="JudulBuku" value="<?php echo $JudulBuku; ?>">
      </div>
      <div class="form-group">
          <label>Pengarang Buku</label>
          <input type="text" class="form-control" name="PengarangBuku" value="<?php echo $PengarangBuku; ?>">
      </div>
      <div class="form-group">
          <label>jumlah Buku</label>
          <input type="text" class="form-control" name="JumlahBuku" value="<?php echo $JumlahBuku; ?>">
      </div>
      <div class="form-group">
          <label>Penerbit Buku</label>
          <input type="text" class="form-control" name="PenerbitBuku" value="<?php echo $PenerbitBuku; ?>">
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
$JudulBuku = isset($_POST['JudulBuku']) ? $_POST['JudulBuku'] : false;
$PengarangBuku = isset($_POST['PengarangBuku']) ? $_POST['PengarangBuku'] : false;
$JumlahBuku = isset($_POST['JumlahBuku']) ? $_POST['JumlahBuku'] : false;
$PenerbitBuku = isset($_POST['PenerbitBuku']) ? $_POST['PenerbitBuku'] : false;

if (isset($_POST['submit'])) {
  mysqli_query($koneksi, "UPDATE databuku SET JudulBuku = '$JudulBuku', PengarangBuku='$PengarangBuku', JumlahBuku='$JumlahBuku', PenerbitBuku='$PenerbitBuku' WHERE KodeBuku = '$KodeBuku' ");
  header("location: admin.php");
}


?>

</body>
</html>