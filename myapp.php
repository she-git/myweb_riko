<html>
<head>
	<title>MyApps</title>
</head>
<h1>Hitung Operasi Persegi</h1>
<hr>
<form method="POST" action="#" >
  Masukkan sisi : 
  <input type="text" name="sisi"><br>
  <hr>
  <input type="submit" value="Submit">
</form>

<?php 
if(!empty($_POST)) {
	 $sisi=$_POST["sisi"];
	 $luas=$sisi*$sisi;
	 $kel=4*$sisi;
	 echo "Luas Perseginya adalah : $luas<br>";
	 echo "Keliling Perseginya adalah : $kel<br>";
}
 ?>
 <hr>
 <a href="index.php"><h3>Home</h3></a>
 </html>
