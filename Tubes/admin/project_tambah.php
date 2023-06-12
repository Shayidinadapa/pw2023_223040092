<?php 

require '../function.php';

if( isset($_POST["submit"])) {


    if(tambah($_POST) > 0 ){
        echo "
            <script> 
            alert('data berhasil ditambahkan!');
            document.location.href = 'project_view.php';
            </script>
        ";
    } else {
        mysqli_error(koneksi());
    }
}
?>


<?php require('../partials/header.php')  ?>
<?php require('../partials/sidebar.php') ?>
    <main class="mt-5 pt-3">
        <div class="container-fluid"> 

            <div class="content" id="container">
                <h1>Tambah produk</h1>

                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <div class="mb-3">
                        <!-- <label for="category" class="form-label">Produk</label>
                        <select class="form-control" name="category">
                            <option value="">Pilih produk</option>
                            </div>
                        </select> -->
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Masukan gambar produk</label>
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
                                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                            </div>
                </form>
            </div>                       
        </div>
    </main>
    <?php require('../partials/footer.php')  ?>