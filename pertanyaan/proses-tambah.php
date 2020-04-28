<?php
include '../koneksi.php';
session_start();


if( !isset($_SESSION['id_pasien'])){
    echo "<script>
                alert('Silahkan Login Terlebih dahulu'); 
                document.location.href='../login_v1/index.html';
              </script>";
}
else{
$id_pasien = $_SESSION['id_pasien'];

if(isset($_POST['positif'])){

    $sql = "UPDATE pasien SET status = 'positif' WHERE pasien.id_pasien = $id_pasien";
    // var_dump($sql);;

    $res = mysqli_query($connect, $sql);

    $count = mysqli_affected_rows($connect);
    // var_dump($count);
    if($count == 1){
        echo "<script>
                alert('Data berhasil ditambahkan. Status anda positif'); 
                document.location.href='../index.php';
              </script>";
    }
    
    else{
        header("Location: ../index.php");
    }
}
}

if(isset($_POST['negatif'])){

    $sql = "UPDATE pasien SET status = 'negatif' WHERE pasien.id_pasien = $id_pasien";

    $res = mysqli_query($connect, $sql);

    $count = mysqli_affected_rows($connect);
    // var_dump($count);
    if($count == 1){
        echo "<script>
        alert('Data berhasil ditambahkan. Status anda negatif'); 
        document.location.href='../index.php';
        </script>";
    }
    
    else{
        header("Location: ../index.php");
    }
}


?>