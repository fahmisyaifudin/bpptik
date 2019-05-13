<!DOCTYPE html>
<html>
<head>
	<title>Nilai Mahasiswa</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row-padding">
	<div class="card">
	<div class="card-body">
	<h5>Perhitungan Nilai Akhir Mahasiswa</h5>
	<form method="POST">
	UTS : <br><input type="number" min="0" max="100" name="uts" style="width: 316px;" required><br>
	UAS : <br><input type="number" min="0" max="100" name="uas" style="width: 316px;" required><br>
	Tugas : <br><input type="number" min="0" max="100" name="tugas" style="width: 316px;" required><br>
	Kehadiran : <br><input type="number" min="0" max="100" name="kehadiran" style="width: 316px;" required><br>
	<button type="submit">Submit</button>
	</form>
	<?php
		$uts = isset($_POST['uts']) ? $_POST['uts'] : false;
		$uas = isset($_POST['uas']) ? $_POST['uas'] : false;
		$tugas = isset($_POST['tugas']) ? $_POST['tugas'] : false;
		$kehadiran = isset($_POST['kehadiran']) ? $_POST['kehadiran'] : false;

		
		if ($kehadiran>80) {
			$total = ($uts*30/100)+($uas*40/100)+($tugas*20/100)+($kehadiran*10/100);
		}else{
			$total = 0;
		}

		if ($total>=85) {
			$mutu = 'A';
		}elseif ($total>=70&&$total<85) {
			$mutu = 'B';
		}
		elseif ($total>=60&&$total<70) {
			$mutu = 'C';
		}elseif ($total>=55&&$total<60) {
			$mutu = 'D';
		}
		elseif ($total<55) {
			$mutu = 'E';
		}
		echo "Nilai : $total<br>";
		echo "Mutu : $mutu<br>";

	?>
	</div>
	</div>
	</div>
	</div>
</body>
</html>