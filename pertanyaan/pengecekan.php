<?php
include '../koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pengecekan</title>
	<link rel="stylesheet" href="style.css">
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
                <h1>Cek Kesehatan</h1>
				<a href="../index.php"><button class="cek-btn">Kembali ke beranda</button></a>
                    </div>    
             </div>
             <div class="home-right-col">
            </div>
        </div>
    </section>
 
	<div class="pertanyaan">
		<center><h1 class="judul">Jawab pertanyaan dibawah ini</center>             
		<br>

		<center><label>1. Apakah anda mengalami gangguan pada pernapasan serta nyeri pada dada ?</label></center>
		<br>
			<center><a href="pengecekan2.php?" class="cek-btn" style="background-color:#0779e4 ">Iya</a>
			<a href="pengecekan2.php?" class="cek-btn" style="background: #c70039">Tidak</a></center>
	</div>
 
</body>
</html>