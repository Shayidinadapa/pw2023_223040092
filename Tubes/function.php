<?php    

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');
  return $conn;
}
 
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
    $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// kategori //
function tambah($data){

  $conn = koneksi();

  $nama = htmlspecialchars($data["nama"]);
  $deskripsi = htmlspecialchars($data["deskripsi"]);
  $harga = htmlspecialchars($data["harga"]);
  $gambar = upload();
  if(!$gambar ) {
    return false;
  }

  $query = "INSERT INTO product
  VALUES
  (NULL, '$gambar', '$nama', '$deskripsi', '$harga')
  ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

// upload
function upload(){
  
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4 ) {
      echo "<script>
              alert('pilih gambarmu');
            </script>";
          return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
      echo "<script>
        alert('yand kmu upload bukan gambar yaa!! ');
       </script>";
      return false;
    }

    if($ukuranFile > 1000000) {
      echo "<script>
      alert('ukuranmu kebesaran!! ');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru = '.';
    $namaFileBaru = $ekstensiGambar;

    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}

// hapus //

function hapus($id_product){

  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM product WHERE id_product = $id_product");

  return mysqli_affected_rows($conn);
}

// ubah
function ubah($data) {

$conn = koneksi();

$id_product = $data["id_product"];
$nama = htmlspecialchars($data["nama"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$harga = htmlspecialchars($data["harga"]);
$gambarLama = htmlspecialchars($data["gambarLama"]);

if($_FILES['gambar']['error'] === 4) {
  $gambar = $gambarLama;
} else {
  $gambar = upload();
}

$query = "UPDATE product SET
          gambar = '$gambar',
          nama = '$nama',
          deskripsi = '$deskripsi',
          harga = '$harga'
        WHERE id_product = $id_product
          ";
    
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

// cari
function cari($keyword) {

  $query = "SELECT * FROM product
              WHERE
            nama LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' 

            ";
    return query($query);
}


?>