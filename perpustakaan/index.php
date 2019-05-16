<?php

include_once("koneksi.php");
$querybuku = mysqli_query($koneksi, "SELECT * FROM databuku" );

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
<nav class="navbar bg-info navbar-dark navbar-expand-sm fixed-top">
	<a href="#" class="navbar-brand">Sistem Perpustakaan Online</a>
	<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a  class="nav-link" href="main.php">User</a></li>
				</ul>
			</div>

</nav>
<div class="container">
	<div class="row row-padding">
		<div class="col-md">
		<h4 class="text-center">Daftar Buku</h4>
		<table class="table table-striped display" id="example">
  			<thead>
   				 <tr>
      				<th scope="col">Kode Buku</th>
      				<th scope="col">Judul Buku</th>
      				<th scope="col">Pengarang Buku</th>
      				<th scope="col">Jumlah Buku</th>
      				<th scope="col">Penerbit Buku</th>
    			</tr>
  			</thead>
  			<tbody>
  				<?php
  				while ($row = mysqli_fetch_assoc($querybuku)){
  				echo '
    			<tr>
      				<th scope="row">'.$row["KodeBuku"].'</th>
     				<td>'.$row["JudulBuku"].'</td>
      				<td>'.$row["PengarangBuku"].'</td>
      				<td>'.$row["JumlahBuku"].'</td>
      				<td>'.$row["PenerbitBuku"].'</td>
    			</tr>';
   				}
   				?>
  			</tbody>
		</table>
		</div>		

	</div>
	
</div>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<footer class="page-footer font-small bg-light">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 fixed-bottom">© 2019 Copyright:
    <a href="#">Telkom Developer</a>
  </div>
  <!-- Copyright -->

</footer>

</body>
</html>