<?php

include_once("koneksi.php");
$querybuku = mysqli_query($koneksi, "SELECT * FROM databuku" );
$queryanggota = mysqli_query($koneksi, "SELECT * FROM dataanggota" );
$querypeminjaman = mysqli_query($koneksi, "SELECT * FROM datapeminjaman" );

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
					<li><a  class="nav-link" href="main.php">Selamat Datang Admin</a></li>
				</ul>
			</div>

</nav>
<div class="container">
	<div class="row row-padding">
    <div class="col-md">
    <h4 class="text-center">Daftar Anggota</h4><br>
    <table class="table table-striped display">
        <thead>
           <tr>
              <th scope="col">ID Anggota</th>
              <th scope="col">Nama Anggota</th>
              <th scope="col">Alamat Anggota</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($queryanggota)){
          echo '
          <tr>
              <th scope="row">'.$row["IdAnggota"].'</th>
            <td>'.$row["NamaAnggota"].'</td>
              <td>'.$row["AlamatAnggota"].'</td>
              <td>'.$row["StatusAnggota"].'</td>
              <td><a href="editanggota.php?IdAnggota='.$row["IdAnggota"].'"><button class="btn btn-danger">Edit</button></a><span style="display:inline-block; width: 5px;"></span><a href="deleteanggota.php?IdAnggota='.$row["IdAnggota"].'"><button class="btn btn-danger">Delete</button></a></td>
          </tr>';
          }
          ?>
        </tbody>
    </table>
    <a href="addanggota.php"><button class="btn btn-primary float-right">Add</button></a>
    </div>
    </div>

    <div class="row">    
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
              <th scope="col">Action</th>
          </tr>
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
              <td><a href="editbuku.php?KodeBuku='.$row["KodeBuku"].'"><button class="btn btn-danger">Edit</button></a><span style="display:inline-block; width: 5px;"></span><a href="deletebuku.php?KodeBuku='.$row["KodeBuku"].'"><button class="btn btn-danger">Delete</button></a></td>
          </tr>';
          }
          ?>

  			</tbody>
		</table>
   <a href="addbuku.php"><button class="btn btn-primary float-right">Add</button></a>
		</div>		

	</div>
  <div class="row">    
    <div class="col-md">
    <h4 class="text-center">Daftar Peminjaman</h4><br>
    <table class="table table-striped display">
        <thead>
           <tr>
              <th scope="col">Id Anggota</th>
              <th scope="col">Nama Anggota</th>
              <th scope="col">Kode Buku</th>
              <th scope="col">Tanggal Pinjam</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Lama Pinjam</th>\
              <th scope="col">Keadaan Buku</th>
              <th scope="col">Action</th>
          </tr>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($querypeminjaman)){
          echo '
          <tr>
              <th scope="row">'.$row["IdAnggota"].'</th>
            <td>'.$row["NamaAnggota"].'</td>
              <td>'.$row["KodeBuku"].'</td>
              <td>'.$row["TglPinjam"].'</td>
              <td>'.$row["TglKembali"].'</td>
              <td>'.$row["LmPinjam"].'</td>
              <td>'.$row["KeadaanBuku"].'</td>
              <td><a href="editpeminjaman.php?IdAnggota='.$row["IdAnggota"].'"><button class="btn btn-danger">Edit</button></a><span style="display:inline-block; width: 5px;"></span><a href="deletepeminjaman.php?IdAnggota='.$row["IdAnggota"].'"><button class="btn btn-danger">Delete</button></a></td>
          </tr>';
          }
          ?>
        
        </tbody>
    </table>
    <a href="addpeminjaman.php"><button class="btn btn-primary float-right">Add</button></a>
    </div>    

  </div>
	
</div>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<footer class="page-footer font-small footer-padding">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#">Telkom Developer</a>
  </div>
  <!-- Copyright -->

</footer>

</body>
</html>