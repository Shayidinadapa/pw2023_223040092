<?php 
$hardware = ['motherboard','processor','harddisk','pc collor','vga card','ssd']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 4b</title>
</head>
<body>

    <h2>macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach($hardware as $hw) { ?>
            <li><?= $hw; ?></li>
            <?php } ?>
    </ol>
    <br>

    <h2>macam-macam perangkat keras komputer baru</h2>
    <?php 
    array_push($hardware,'card reader','modem');
    asort($hardware); 
    ?>
    <ol>
        <?php foreach($hardware as $hw) { ?>
        <li><?= $hw; ?></li> 
        <?php } ?>
    </ol>
    
</body>
</html>