<?php 
    include "koneksi.php";
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $query=mysqli_query($conn, "select * from tb_mahasiswa where nim='$nim'");
    if(mysqli_num_rows($query)>0){
        echo "<script>alert ('Data dengan NIM $nim sudah ada!');
        location.href='index.php';</script>";
    }else{
        if (!$conn -> query("insert into tb_mahasiswa values('$nim','$nama','$alamat')")) {
            echo("Error description: " . $conn -> error);
        }else{
            echo "<script>alert ('Data berhasil ditambahkan');
            location.href='index.php';</script>";
        }
    }
?>