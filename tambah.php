<?php 
// koneksi kedalam database
include "koneksi.php";

//uji jika tombol simpan di klik 
if (isset($_POST['bsimpan'])){
    $simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, alamat,prodi)
                            values('$_POST[tnim]',
                                    '$_POST[tnama]',
                                    '$_POST[talamat]',
                                    '$_POST[tprodi]'
                            )"); 
    //membuat pengujian jika simpan data berhasil atau gagal
    if($simpan){
        echo "<script>
        alert ('simpan data suskses');
        document.location = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('simpan data gagal');
        document.location = 'index.php';
        </script>";
    }
}