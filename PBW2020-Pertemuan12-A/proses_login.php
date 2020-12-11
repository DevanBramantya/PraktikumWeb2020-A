<?php 
	include "koneksi.php";
	session_start();
	$user=$_POST['user'];
	$pass=$_POST['pass'];
    $query=mysqli_query($conn,"select * from tb_user where username='$user' and password='$pass'");
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_array($query);
        $_SESSION['nama']=$data['nama'];
        $_SESSION['role']=$data['role'];
        echo "<script>alert ('Selamat Datang ".$_SESSION['nama']."');
        location.href='index.php';</script>";
    }
    else
    {
        echo "<script>alert ('Username atau Password Salah');
        location.href='login.php';</script>";
    }
	
?>