<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pengecekan</title>
	<link rel="stylesheet" href="style.css">
	<style>    
    /* html, body {
    max-height: 100%;
    overflow-y: hidden;
    } */
</style>   
</head>
<body>

<section id="home">
    <div class="menu">
            <ul>
                <li class="logo"><h1>COVID INFO.</h1></li>
            </ul>
        </div>
        <div class="container home-row">
            <div class="home-left-col">
                <div class="home-text">
				<h1>Hasil Diagnosis</h1>
				<span class="square"></span>
 				<p class="text"> Anda kemungkinan besar tidak terinfeksi oleh COVID-19, Namun anda disarankan untuk tetap tinggal dirumah. Infeksi anda mungkin disebabkan virus selain COVID-19, Oleh karena itu anda tidak perlu dites oleh COVID-19. Meskipun demikian, hindarilah keluar rumah jika memungkinkan. Penyakit anda akan sembuh sendiri dengan cukup makan dan istirahat</p>
				
				<a href="../index.php"><button class="cek-btn">Kembali ke beranda</button></a>
				<form method="post" action="proses-tambah.php">
				<button class="cek-btn" name="negatif">Simpan hasil tes</button>
				</form>
                    </div>    
             </div>
             <div class="home-right-col">
            </div>
        </div>
    </section>

	<section id="konsultasi">
        <div class="container konsultasi-row">
            <div class="konsultasi-left-col">
                <div class="konsultasi-text">
                    <h1>Konsultasi</h1>
                    <span class="square"></span>
                    <P>Konsultasikan gejala anda
                        kepada dokter
                    </P>
                    <a href="https://www.halodoc.com/tanya-dokter"><button class="cek-btn">Konsultasi sekarang</button></a>
                </div>
            </div>
            <div class="konsultasi-right-col-2">
               <div class="konsultasi-image"> 
                <img src="../image/doctor.png">
               </div> 
            </div>
        </div>
    </section>
	
</body>
</html>


