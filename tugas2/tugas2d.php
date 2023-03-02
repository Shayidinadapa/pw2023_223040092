<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2d</title>
	<style>
		*{
			margin: 0;
            padding: 0;
            line-height:0;
		}

		.kotak{
			width: 100px;
			height: 100px; 
			background-color: black;
			text-align: center;
			line-height: 100px;
			display: inline-block;
            margin-right: -5px;
            border: 1px solid black;
		}
        .kotak1{
			width: 100px;
			height: 100px; 
			text-align: center;
			line-height: 100px;
			display: inline-block;
            margin-right: -5px;
            border: 1px solid black;
		}
	</style>
</head>
<body>
    <?php for ($i=1; $i <= 5 ; $i++) : ?>
        <?php if ($i % 2 == 1) : ?>
            <div class="kotak"></div>
            <?php else :?>
            <div class="kotak1"></div>
       <?php endif; ?>
    <?php endfor; ?>
    <br>
    <?php for ($i=1; $i <= 5 ; $i++) : ?>
        <?php if ($i % 2 == 0) : ?>
            <div class="kotak"></div>
            <?php else :?>
            <div class="kotak1"></div>
       <?php endif; ?>
    <?php endfor; ?>
    <br>
    <?php for ($i=1; $i <= 5 ; $i++) : ?>
        <?php if ($i % 2 == 1) : ?>
            <div class="kotak"></div>
            <?php else :?>
            <div class="kotak1"></div>
       <?php endif; ?>
    <?php endfor; ?>
    <br>
    <?php for ($i=1; $i <= 5 ; $i++) : ?>
        <?php if ($i % 2 == 0) : ?>
            <div class="kotak"></div>
            <?php else :?>
            <div class="kotak1"></div>
       <?php endif; ?>
    <?php endfor; ?>
    <br>
</body>
</html>