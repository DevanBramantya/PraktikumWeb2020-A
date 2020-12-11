<?php 
    include "koneksi.php";
    $nim=$_GET['nim'];
    if (!$conn -> query("delete from tb_mahasiswa where nim='$nim'")) {
        echo("Error description: " . $conn -> error);
    }else{
        echo "<script>alert ('Data berhasil dihapus');
        location.href='index.php';</script>";
    }
?>