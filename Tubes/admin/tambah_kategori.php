<?php 
require '../function.php';

if(isset($_POST['tambah'])) {
    // tampilkanlah data jika berhasil ditambahkan
    if(tambah($_POST) > 0) {
        echo "<script>
            alert('data sudah berhasil ditambahkan');
            document.location.href = 'kategori.view.php';
            </script>";
    }else
    {
        echo "<script>
                alert('data sudah ada');
                document.location.href = 'tambah.kategori.php';
                </script>";
    }
}
?>

<div class="container mt-3">
    <h1>Tambah Produk</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3 w-25">
                    <label for="nama_produk" class="form-label">Produk</label>
                    <input type="text" class="form-control" name="nama_kategori" id="nama_kategori">
                </div>
                <div class="mb-3">
                    <label for="gambar_produk" class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="gambar_kategori" id="gambar_kategori">
                </div>
                <div class="mb-3 w-25">
                    <label for="deksripsi_produk" class="form-label">Deksripsi</label>
                    <input type="text" class="form-control" name="deksripsi_kategori" id="deksripsi_kategori">
                </div>
                <input type="submit" name="tambah" value="Tambah Data" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>