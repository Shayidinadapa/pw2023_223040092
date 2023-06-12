<?php 


$mahasiswa = query("SELECT * FROM user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/stylec.css">
</head>
<body>      

<a href="tambah.php">Tambah produk</a>
<br><br>

<div class="row">
          <div class="col-md-12 mb-3">
            <div class="card-header">
              <div class="input-group">
                  <span><i class="bi bi-table me-2"></i>Data table</span> 
                <form class="d-flex ms-auto my-3 my-lg-0">
                  <input
                  class="form-control"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                  />
                  <button class="btn btn-primary me-5" type="submit">
                    <i class="bi bi-search"></i>
                  </button>
                  <a href="tambah.php" class="btn btn-primary float-end"> Tambah</a>
                </form>
            </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                >
            <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <td>no.</td>
                <td>nama</td>
                <td>email</td>
                <td>Aksi</td>
            </tr>

            </table>
            
    
</body>
</html>