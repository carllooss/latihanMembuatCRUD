<?php 
// koneksi kedalam database
include "koneksi.php";

//uji jika tombol hapus di klik 
if (isset($_POST['bhapus'])){

    $hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = '$_POST[id]'"); 
    //membuat pengujian jika hapus data berhasil atau gagal
    if($hapus){
        echo "<script>
        alert ('Data berhasil dihapus');
        document.location = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('Data gagal dihapus');
        document.location = 'index.php';
        </script>";
    }
}