<?php 
require '../function.php' ;
$product = query("SELECT * FROM product");

if(isset($_POST["cari"])) {
  $product = cari($_POST["keyword"]);
}

?>

<?php require('../partials/header.php') ?>
<?php require('../partials/sidebar.php') ?>

<div class="container mt-3">

  <h3>Daftar Items</h3>

  <a href="project_tambah.php" class="btn btn-primary">Tambah Item</a>
  <br>

<div class="row">
  <div class="col-md-6">
    <form action="" method="post">
      <div class="input-group my-3"></div>
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan produk anda.." autocomplete="off">
        <button type="submit" name="cari">cari</button>
      </div>
    </form>
  </div>
</div>
<br>

  <div id="search-container-item">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Gambar</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($product as $p) : ?>
        <tr>
          <th scope="row"><?= $p['id_product']?></th>
          <td><?= $p['nama']; ?></td>
          <td>
            <img src="../img<?= $p['gambar']; ?>" width="50">
          </td>
          <td><?= $p['nama']; ?></td>
          <td><?= $p['deskripsi']; ?></td>
          <td><?= $p['harga']; ?></td>
          <td>
            <a href="project_ubah.php?id_product=<?= $p['id_product']; ?>" class="badge text-bg-warning">ubah</a> |
            <a href="project_hapus.php?id_product=<?= $p['id_product']; ?>" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  </div>
</div>

<?php require('../partials/footer.php') ?>