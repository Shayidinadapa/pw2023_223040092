<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 2a</title>
</head>
<body>
<?php 
$nama_depan = "Shayidina ";
$nama_belakang = "Daffa";
?>
<?php for ($i=1; $i <= 100 ; $i++) :?>
	<?php  if ($i % 3 == 0 && $i % 5 == 0 ) : ?>
		<?= $nama_depan ." ". $nama_belakang; ?>
		<br>
	<?php  elseif ($i % 5 == 0) : ?>
		<?= $nama_belakang; ?>
		<br>
	<?php  elseif ($i % 3 == 0) : ?>
		<?= $nama_depan; ?>
		<br>
	<?php else: ?>
		<?= $i ?>
		<br>
	<?php endif; ?>
<?php endfor; ?>



</body>
</html>