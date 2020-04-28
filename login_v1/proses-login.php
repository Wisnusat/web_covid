<!-- proses pengolahan data -->
<?php
$connect = mysqli_connect("localhost","root","","covid");
session_start();


if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM pasien WHERE username='$username' AND password='$password' ";
    $res = mysqli_query($connect,$sql);

    $count = mysqli_affected_rows($connect);
    $data_login = mysqli_fetch_assoc($res);

    if($count == 1){

        $_SESSION['id_pasien'] = $data_login['id_pasien'];
        $_SESSION['nik'] = $data_login['nik'];
        $_SESSION['nama'] = $data_login['nama'];
        $_SESSION['tanggal_lahir'] = $data_login['tanggal_lahir'];
        $_SESSION['tempat_tinggal'] = $data_login['tempat_tinggal'];
        $_SESSION['gender'] = $data_login['gender'];
        $_SESSION['username'] = $data_login['username'];
        $_SESSION['password'] = $data_login['password'];

        setcookie('tujuan','delete',time()-1);

        header("Location:../index.php");

        
    }else{

        header("Location:index.html");

    }
}
?>