<?php 

require '../function.php';

$id_product = $_GET["id_product"];

$product = query("SELECT * FROM product WHERE id_product = $id_product")[0];

if( isset($_POST["submit"])) {

    if(ubah($_POST) > 0 ){
        echo "
            <script> 
            alert('data berhasil diubah!');
            document.location.href = 'project_view.php';
            </script>
        ";
    } else {
        echo "
        <script> 
        alert('data gagal diubah!');
        document.location.href = 'project_view.php';
        </script>
        ";
    }
}
?>


<?php require('../partials/header.php')  ?>
<?php require('../partials/sidebar.php') ?>
    <main class="mt-5 pt-3">
        <div class="container-fluid"> 

            <div class="content" id="container">
                <h1>ubah produk</h1>

                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <div class="mb-3">
                            <input class="form-control"type="hidden" name="id_product" value="<?= $product["id_product"]; ?>">
                            <input class="form-control"type="hidden" name="gambarLama" value="<?= $product["gambar"]; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Masukan gambar produk</label>
                                <img src="img/<?= $product['gambar']; ?>" width="50">
                                <input class="form-control" type="file" id="gambar" name="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">nama produk</label>
                                <input class="form-control" type="text" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class= "form-label">deskripsi produk</label>
                                <input class="form-control" type="deskripsi" id="deskripsi" name="deskripsi">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">harga product</label>
                                <input class="form-control" type="harga" id="harga" name="harga">
                            </div>
                            <div class="button">
                                <button type="submit" name="submit" class="btn btn-primary">ubah</button>
                            </div>
                    </div>
                </form>
            </div>                       
        </div>
    </main>
    <?php require('../partials/footer.php')  ?>