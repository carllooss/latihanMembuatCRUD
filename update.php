<?php 
// koneksi kedalam database
include "koneksi.php";

//uji jika tombol ubah di klik 
if (isset($_POST['bubah'])){
    $ubah = mysqli_query($koneksi, "UPDATE mahasiswa SET
                                    nim ='$_POST[tnim]',
                                    nama = '$_POST[tnama]',
                                    alamat = '$_POST[talamat]',
                                    prodi = '$_POST[tprodi]'
                                    where id = '$_POST[id]'
                            "); 
    //membuat pengujian jika simpan data berhasil atau gagal
    if($ubah){
        echo "<script>
        alert ('Data berhasil diubah');
        document.location = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('Data gagal diubah');
        document.location = 'index.php';
        </script>";
    }
}