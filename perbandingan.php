<!DOCTYPE html>
<html>
<head>
	<title>Perbandingan</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="aritmatika.php">Aritmatika</a></li>
			<li><a class="active" href="perbandingan.php">Perbandingan</a></li>
			<li><a href="sorting.php">Sorting</a></li>
		</ul>
	</nav>
  <?php
  if(isset($_POST['banding'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
  }
  ?>
	<div class="kalkulator">
		<h2 class="judul">Perbandingan</h2>
		<form method="post" action="perbandingan.php">
			<input type="text" name="bil1" class="bilband" autocomplete="off" placeholder="Angka-1">
			<input type="text" name="bil2" class="bilband" autocomplete="off" placeholder="Angka-2">
			<input type="submit" name="banding" value="Bandingkan" class="tombolbd">
		</form>
		<?php if(isset($_POST['banding'])){
			echo '<h2 class="hasilbd">Hasil Perbandingan</h2>';
			if ($bil1 < $bil2){
			 echo '<h2 class="hasilbd">'.$bil1 . ' Lebih Kecil dari ' . $bil2.'</h2>' ;
		 } elseif ($bil1 > $bil2){
				 echo '<h2 class="hasilbd">'.$bil1 . ' Lebih Besar dari ' . $bil2.'</h2>';
			 } else {
				 echo '<h2 class="hasilbd">'.$bil1 . ' Sama Besar dengan ' . $bil2.'</h2>';
			 }
		 }else{ ?>
			<h2 class="hasilbd">Hasil Perbandingan</h2>
		<?php } ?>
	</div>
</body>
</html>
