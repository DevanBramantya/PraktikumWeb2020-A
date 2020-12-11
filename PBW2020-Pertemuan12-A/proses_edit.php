<?php 
    include "koneksi.php";
    $nim_awal=$_POST['nim_awal'];
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $query=mysqli_query($conn, "select * from tb_mahasiswa where nim='$nim'");
    if(mysqli_num_rows($query)>0){
        echo "<script>alert ('Data dengan NIM $nim sudah ada!');
        location.href='index.php';</script>";
    }else{
        if (!$conn -> query("update tb_mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where nim='$nim_awal'")) {
            echo("Error description: " . $conn -> error);
        }else{
            echo "<script>alert ('Data berhasil diedit');
            location.href='index.php';</script>";
        }
    }
?>