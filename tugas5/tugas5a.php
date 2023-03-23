<?php 
$mahasiswa = [
[
'nrp' => '223040092',
'nama' => 'Shayidina Daffa',
'email' => 'shayidinadaffa2003@gmail.com',
'jurusan' => 'teknik informatika',
'gambar' => 'daffa.jpeg'
],
[
'nrp' => '223040093',
'nama' => 'syaiful jamil',
'email' => 'syaifulJA@gmail.com',
'jurusan' => 'teknik industri',
'gambar' => 'syaiful.jpg'
],
[
'nrp' => '223040094',
'nama' => 'ahmad ruslan',
'email' => 'ahmd94@gmail.com',
'jurusan' => 'teknik informatika',
'gambar' => 'ahmad.jpg'
],
[
'nrp' => '223040095',
'nama' => 'nabila rasyid',
'email' => 'nabilaaa11@gmail.com',
'jurusan' => 'teknik mesin',
'gambar' => 'nabila.jpg'
],
[
'nrp' => '223040097',
'nama' => 'muhammad ruslan somad',
'email' => 'ruslanmuhammad@gmail.com',
'jurusan' => 'teknik informatika',
'gambar' => 'ruslan.jpg'
],
[
'nrp' => '223040101',
'nama' => 'khobir sholeh',
'email' => 'khbr101@gmail.com',
'jurusan' => 'kedokteran',
'gambar' => 'khobir.jpg'
],
[
'nrp' => '2230400105',
'nama' => 'sholehah putri rohmat',
'email' => 'putri1105@gmail.com',
'jurusan' => 'teknik informatika',
'gambar' => 'putri.jpg'
],
[
'nrp' => '223040066',
'nama' => 'muhammad bayu indra',
'email' => 'bayubayu@gmail.com',
'jurusan' => 'fakultas manajemen',
'gambar' => 'bayu.jpg'
],
[
'nrp' => '223040070',
'nama' => 'cantika citra',
'email' => 'cantikacitra@gmail.com',
'jurusan' => 'fakultas manajemen',
'gambar' => 'cantika.jpg'
],
[
'nrp' => '223040080',
'nama' => 'immanuel slamet',
'email' => 'imanuel80@gmail.com',
'jurusan' => 'teknik industri',
'gambar' => 'immanuel.jpg'
],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 5</title>
</head>


<body>
    
<?php foreach($mahasiswa as $m) { ?>
    <ul>
        <img src="img/<?= $m['gambar']; ?>">
        <li>nrp : <?= $m['nrp'] ?></li>
        <li>nama : <?= $m['nama'] ?> </li>
        <li>email :  <?= $m['email'] ?> </li>
        <li>jurusan : <?= $m['jurusan'] ?> </li>
        </li>
    </ul>
    <?php } ?>

</body>


</html>