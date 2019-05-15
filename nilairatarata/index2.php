<?php

$i = isset($_GET['iterasi']) ? $_GET['iterasi'] : $i=1;
$nama = isset($_POST['nama']) ? $_POST['nama'] : false;
$nilai = isset($_POST['nilai']) ? $_POST['nilai'] : false;

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container row-padding">
  <h3>Nilai rata rata dan max</h3>
    <form method="POST">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Nilai</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
    <div id="row1">
     <tr>
          <td><input type="text" name="nama[]"></td>
          <td><input type="number" name="nilai[]"></td>
          <td><button class="btn btn-danger" id="hapusrow1">Delete</button></td>
      </tr>
    </div>
    <div>
      <tr>
          <td><input type="text" name="nama[]"></td>
          <td><input type="number" name="nilai[]"></td>
          <td><button class="btn btn-danger" id=row>Delete</button></td>
      </tr>
    </div>
    <div>
      <tr>
          <td><input type="text" name="nama[]"></td>
          <td><input type="number" name="nilai[]"></td>
          <td><button class="btn btn-danger" id=row>Delete</button></td>
      </tr>
    </div>
    
  </tbody>
</table>
<button class="btn btn-primary"><a href="index.php?iterasi=<?php echo $a=$a+1;?>">Tambah Baris</a></button>
<button class="btn btn-primary" type="submit">Rekap Nilai</button>
</form>
<?php
error_reporting(E_ERROR | E_PARSE);
$temp = 0;
for ($i=0; $i < count((array)$nilai); $i++) { 
   $temp = $temp + $nilai[$i];
}
$ratarata = $temp/count((array)$nilai);
$value = max((array)$nilai);
for ($i=0; $i < count((array)$nilai); $i++) { 
   if ($nilai[$i] == $value) { 
     $maxs = $i;
   }
}
echo "<br>Rata rata : $ratarata <br>";
echo "Nilai tertinggi $value";
echo " Oleh $nama[$maxs] <br>";
echo "Median = " .  
      findMedian($nilai, count($nilai));
echo "Modus = " .  
      mode($nilai, count($nilai));    

function findMedian($a, $n) 
{ 
    // First we sort the array 
    sort($a); 
  
    // check for even case 
    if ($n % 2 != 0) {
    return (double)$a[$n / 2]; 
    }else{  
    return (double)($a[($n - 1) / 2] + 
                    $a[$n / 2]) / 2.0; 
    }
}
function mode($x, $y) {
   $maxValue = 0;
   $maxCount = 0;

   for ($i = 0; $i < $y; $i++) {
      $count = 0;
      
      for ($j = 0; $j < $y; $j++) {
         if ($x[$j] == $x[$i])
              $count=$count+1;
      }
      
      if ($count > $maxCount) {
         $maxCount = $count;
         $maxValue = $x[$i];
      }
   }

   return $maxValue;
}

?>
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#hapusrow1").click(function(){
    $("#row1").remove();
  });
});

</script>
</body>
</html>

