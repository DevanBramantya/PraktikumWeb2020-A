<?php 
    session_start();
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $nilai1=$_POST['nilai1'];
    $nilai2=$_POST['nilai2'];
    $data=array();
    array_push($data,$nim,$nama,$nilai1,$nilai2);
    if(!isset($_SESSION['data'])){
        $_SESSION['data']=array();
    }
    array_push($_SESSION['data'],$data);
    echo "<script>location.href='index.php'</script>";
?>