<?php 
require '../function.php';

$id_product = $_GET["id_product"];

if( hapus($id_product) > 0 ) {
    echo "<script>
        alert('data sudah berhasil dihapuskan');
        document.location.href = 'project_view.php';
    </script>
    ";
} else {
    echo "<script>
        alert('data gagal dihapuskan');
        document.location.href = 'project_view.php';
    </script>
    ";
}

?>