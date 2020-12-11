<?php 
    session_start();
    include "koneksi.php";
    if(!isset($_SESSION['nama']))
    {
        echo "<script>alert ('Silahkan Login Terlebih Dahulu');
        location.href='login.php';</script>";	
    }
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="data">
            <b>Selamat Datang <?php echo $_SESSION['nama'];?></b><br>
            <a href="#input">+Tambah Data</a><br>
            <table border="1" width="100%">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <?php 
                    if($_SESSION['role']=="Admin"){
                        echo "<th colspan='2'>Opsi</th>";
                    }else{
                        echo "<th>Opsi</th>";
                    }
                    ?>
                </tr>
                <?php 
                    $sql=mysqli_query($conn,"select * from tb_mahasiswa");
                    while($data=mysqli_fetch_array($sql)){
                ?>
                        <tr>
                            <td><?php echo $data['nim'];?></td>
                            <td><?php echo $data['nama'];?></td>
                            <td><?php echo $data['alamat'];?></td>
                <?php 
                        if($_SESSION['role']=="Admin"){?>
                            <td style='width:12.5%'><a href="edit.php?nim=<?php echo $data['nim']?>">Edit</a></td>
                            <td><a href="delete.php?nim=<?php echo $data['nim']?>">Delete</a></td>
                        </tr>
                        <?php
                        }else{?>
                            <td><a href="edit.php?nim=<?php echo $data['nim']?>">Edit</a></td>
                        </tr>
                        <?php
                        }
                    }
                ?>
            </table><br>
            <button onclick="location.href='logout.php'">Logout</button>
        </div>

        <div id="input">
            <div class="window">
                <a href="#" class="close-button" title="Close">X</a>
                <form action="proses_input.php" method="post">
                    <table>
                        <tr>
                            <td width="80%">NIM</td>
                            <td><input type="text" name="nim" required></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" required></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right"><input type="submit" value="Tambah"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>