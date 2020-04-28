<?php
include '../koneksi.php';
session_start();

if(isset($_POST['daftar'])){
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $tempat_tinggal =$_POST["tempat_tinggal"];
    $gender =$_POST["gender"];
    $username =$_POST["username"];
    $password =$_POST["password"];

    $daftar = mysqli_query($connect,"INSERT INTO pasien VALUES('','$nik','$nama','$tanggal_lahir','$tempat_tinggal','$gender','$username','$password','negatif')");
    // var_dump($daftar);
    

    if($daftar > 0){

        $sql = "SELECT * FROM pasien WHERE nik='$nik' AND nama='$nama' AND tanggal_lahir='$tanggal_lahir' AND tempat_tinggal='$tempat_tinggal' AND gender='$gender' AND username='$username' AND password='$password' ";
        $res = mysqli_query($connect,$sql);
        $data_login = mysqli_fetch_assoc($res);
        $_SESSION['id_pasien'] = $data_login['id_pasien'];
        // $_SESSION['nik'] = $data_login['nik'];
        // $_SESSION['nama'] = $data_login['nama'];
        // $_SESSION['tanggal_lahir'] = $data_login['tanggal_lahir'];
        // $_SESSION['tempat_tinggal'] = $data_login['tempat_tinggal'];
        // $_SESSION['gender'] = $data_login['gender'];
        // $_SESSION['username'] = $data_login['username'];
        // $_SESSION['password'] = $data_login['password'];


            header("Location: index.html");
    }
    // else{
    //     header("Location: daftar.php");
    // }



}

?>