<?php
  include_once("koneksi.php");
  $IdAnggota = isset($_GET['IdAnggota']) ? $_GET['IdAnggota'] : false;
  $query = mysqli_query($koneksi, "SELECT * FROM dataanggota WHERE IdAnggota='$IdAnggota' ");
  while($row = mysqli_fetch_assoc($query)){
    $NamaAnggota = $row['NamaAnggota'];
    $AlamatAnggota = $row['AlamatAnggota'];
    $StatusAnggota = $row['StatusAnggota'];

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
          <label>Id Anggota</label>
          <input type="text" class="form-control" name="IdAnggota" value="<?php echo $IdAnggota; ?>">
      </div>
       <div class="form-group">
          <label>Nama Anggota</label>
          <input type="text" class="form-control" name="NamaAnggota" value="<?php echo $NamaAnggota; ?>">
      </div>
      <div class="form-group">
          <label>Alamat Anggota</label>
          <input type="text" class="form-control" name="AlamatAnggota" value="<?php echo $AlamatAnggota; ?>">
      </div>
      <div class="form-group">
          <label>Status Anggota</label>
          <input type="text" class="form-control" name="StatusAnggota" value="<?php echo $StatusAnggota; ?>">
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
$NamaAnggota = isset($_POST['NamaAnggota']) ? $_POST['NamaAnggota'] : false;
$AlamatAnggota = isset($_POST['AlamatAnggota']) ? $_POST['AlamatAnggota'] : false;
$StatusAnggota = isset($_POST['StatusAnggota']) ? $_POST['StatusAnggota'] : false;

if (isset($_POST['submit'])) {
  mysqli_query($koneksi, "UPDATE dataanggota SET NamaAnggota = '$NamaAnggota', AlamatAnggota = '$AlamatAnggota', StatusAnggota='$StatusAnggota' WHERE IdAnggota = '$IdAnggota' ");
  header("location: admin.php");
}


?>
</body>
</html>