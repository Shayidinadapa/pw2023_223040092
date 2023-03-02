<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2c</title>
	<style>
		*{
			margin: 0;
            padding: 0;
            line-height:0;
		}

		.kotak{
			width: 50px;
			height: 50px; 
			background-color: red;
			text-align: center;
			line-height: 100px;
			display: inline-block;
            margin-right: -5px;
            border: 1px solid black;
		}
	</style>
</head>
<body>
    <?php for ($i=1; $i <= 10; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 9; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 8; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 7; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 6; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 5; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 4; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 3; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 2; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
    <br>
    <?php for ($i=1; $i <= 1; $i++) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endfor;?>
</body>
</html>