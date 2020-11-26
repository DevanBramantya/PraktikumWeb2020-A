<html>
    <head>
        <title>Input Nilai</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="proses.php" method="post">
            <table class="input">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Nilai 1</td>
                    <td><input type="text" name="nilai1" required></td>
                </tr>
                <tr>
                    <td>Nilai 2</td>
                    <td><input type="text" name="nilai2" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php 
    session_start();
    if(isset($_SESSION['data'])){
        foreach($_SESSION['data'] as $value){
            $jumlah=$value[2]+$value[3];
            $rata=$jumlah/2;
        ?>
        <table class="data">
            <tr>
                <td width="60px">NIM</td>
                <td width="10px"> : </td>
                <td><?php echo $value[0];?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><?php echo $value[1];?></td>
            </tr>
            <tr>
                <td>Nilai 1</td>
                <td> : </td>
                <td><?php echo $value[2];?></td>
            </tr>
            <tr>
                <td>Nilai 2</td>
                <td> : </td>
                <td><?php echo $value[3];?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td> : </td>
                <td><?php echo $jumlah;?></td>
            </tr>
            <tr>
                <td>Rata-rata</td>
                <td> : </td>
                <td><?php echo $rata;?></td>
            </tr>
        </table>
        <?php
        }
    }
?>