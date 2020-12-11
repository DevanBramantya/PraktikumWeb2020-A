<?php 
    session_start();
    include "koneksi.php";
    if(!isset($_SESSION['nama']))
    {
        echo "<script>alert ('Silahkan Login Terlebih Dahulu');
        location.href='login.php';</script>";	
    }else{
        if(!isset($_GET['nim'])){
            echo "<script>location.href='index.php';</script>";	
        }else{
            $nim=$_GET['nim'];
            $query=mysqli_query($conn,"select * from tb_mahasiswa where nim='$nim'");
            $data=mysqli_fetch_array($query);
        }
    }
?>
<html>
    <head>
        <title>Edit</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="proses_edit.php" method="post">
            <table class="login">
                <input type="hidden" name="nim_awal" value="<?php echo $data['nim'];?>">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" value="<?php echo $data['nim'];?>" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $data['nama'];?>" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" value="Edit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>