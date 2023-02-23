<?php 
$angka = "92";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
</head>
<body>
    <?php echo "Aku adalah angka <strong> $angka </strong> </br>";?>
    <?php 
    $angka = $angka * 5; 
    ?>
    <?php echo "Jika aku dikali 5, maka aku sekarang menjadi <strong> $angka </strong> </br>";?>
    <?php 
    $angka = $angka / 2;
    ?>
    <?php echo "Jika aku dibagi 2, maka aku sekarang menjadi <strong> $angka </strong </br>";?>
    <?php 
    $angka = $angka + 75;
    ?>
    <?php echo "Jika aku ditambah 75, maka aku sekarang menjadi <strong> $angka </strong> </br>";?>
    <?php 
    $angka = $angka - 20;
    ?>
    <?php echo "Jika aku dikurang 20, maka aku sekarang menjadu <strong> $angka </strong> </br>";?>
</body>
</html>