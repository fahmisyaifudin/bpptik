<?php
  include_once("koneksi.php");
  $IdAnggota = isset($_GET['IdAnggota']) ? $_GET['IdAnggota'] : false;
  $query = mysqli_query($koneksi, "SELECT * FROM datapeminjaman WHERE IdAnggota='$IdAnggota' ");
  while($row = mysqli_fetch_assoc($query)){
    $NamaAnggota = $row['NamaAnggota'];
    $KodeBuku = $row['KodeBuku'];
    $TglPinjam = $row['TglPinjam'];
    $TglKembali = $row['TglKembali'];
    $LmPinjam = $row['LmPinjam'];
    $KeadaanBuku = $row['KeadaanBuku'];

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
          <label>Kode Buku</label>
          <input type="text" class="form-control" name="KodeBuku" value="<?php echo $KodeBuku; ?>">
      </div>
      <div class="form-group">
          <label>Tgl Pinjam</label>
          <input type="date" class="form-control" name="TglPinjam" value="<?php echo $TglPinjam; ?>">
      </div>
      <div class="form-group">
          <label>Tgl Kembali</label>
          <input type="date" class="form-control" name="TglKembali" value="<?php echo $TglKembali; ?>">
      </div>
      <div class="form-group">
          <label>Lm pinjam</label>
          <input type="text" class="form-control" name="LmPinjam" value="<?php echo $LmPinjam; ?>">
      </div>
      <div class="form-group">
          <label>Keadaan Buku</label>
          <input type="text" class="form-control" name="KeadaanBuku" value="<?php echo $KeadaanBuku; ?>">
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
$NamaAnggota = isset($_POST['NamaAnggota']) ? $_POST['NamaAnggota'] : false;
$KodeBuku = isset($_POST['KodeBuku']) ? $_POST['KodeBuku'] : false;
$TglPinjam = isset($_POST['TglPinjam']) ? $_POST['TglPinjam'] : false;
$TglKembali = isset($_POST['TglKembali']) ? $_POST['TglKembali'] : false;
$LmPinjam = isset($_POST['LmPinjam']) ? $_POST['LmPinjam'] : false;
$KeadaanBuku = isset($_POST['KeadaanBuku']) ? $_POST['KeadaanBuku'] : false;

if (isset($_POST['submit'])) {
    mysqli_query($koneksi, "UPDATE datapeminjaman SET NamaAnggota = '$NamaAnggota', KodeBuku='$KodeBuku', TglPinjam='$TglPinjam', TglKembali='$TglKembali', KeadaanBuku='$KeadaanBuku' WHERE IdAnggota = '$IdAnggota' ");
  header("location: admin.php");
}


?>

</body>
</html>