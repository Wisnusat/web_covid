<?php
include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-fix.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<style>    
    html, body {
    max-width: 100%;
    overflow-x: hidden;
    }
</style>    
</head>
<body>


    
        <!-- home -->
    <section id="home">
    <div class="menu">
            <ul>
                <li class="logo"><h1>COVID INFO.</h1></li>
                <?php
                if(!isset($_SESSION["id_pasien"])){
                    $pesan="Login";
                    $tujuan="login_v1/index.html";
                }
                else{
                    $pesan="Logout";
                    $tujuan="login_v1/logout.php";
                } 
                ?>
                <li><a href="<?= $tujuan ?>" class="login-btn"><span><?= $pesan ?></span></a></li>
            </ul>
        </div>
        <div class="container home-row">
            <div class="home-left-col">
                <div class="home-text">
                <h1>Cek Kesehatan</h1>
                    <span class="square"></span>
                    <p>Cek diri anda sekarang, cegah penyebaran virus corona</p>
                    <a href="pertanyaan/pengecekan.php"><button class="cek-btn">Cek sekarang</button></a>
                    </div>    
             </div>
             <div class="home-right-col">
               <div class="home-image"> 
                <img src="image/cek.png">
               </div> 
            </div>
        </div>
    </section>

    <!-- navbar -->
    <nav id="sideNav">
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#covid19">CORONAVIRUS</a></li>
            <li><a href="#data">DATA</a></li>
            <li><a href="#konsultasi">KONSULTASI</a></li>
        </ul>
    </nav>

    <img src="image/menu.png" id="menuBtn">

    <script>
        var menuBtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");

        sideNav.style.right = "-250px";
        menuBtn.onclick = function(){
            if(sideNav.style.right == "-250px"){
                sideNav.style.right = "0";
            }
            else{
                sideNav.style.right = "-250px";
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

        <!-- <div class="content-isi"> -->
    <!-- covid-19 -->
    <section id="covid19">
        <div class="covid19-left-col">
            <img src="image/coronavirus.png">
        </div>
        <div class="covid19-right-col">
            <div class="covid19-text">
                <h1>Coronavirus</h1>
                <span class="square"></span>
                <P>Pelajari berbagai hal tentang virus corona</P>

                <a href="informasi.php"><button class="cek-btn">Pelajari tentang virus corona</button></a>
            </div>
        </div>
    </section>

    <!-- data -->

    <section id="data">
    <div class="data-col-judul">
                <h3>Perkembangan covid-19</h3>
                <p>berdasarkan data terbaru WHO</p>
            </div>
            <br>
        <div class="data-row">
            <div class="data-col">
                <img src="image/sakit.png">
                <h4>2.724.809</h4>
                <p>Kasus Positif</p>
            </div>
            <div class="data-col">
                <img src="image/death.png">
                <h4>187.847</h4>
                <p>Korban Meninggal</p>
            </div>
            <div class="data-col">
                <img src="image/wilayah.png">
                <h4>213</h4>
                <p>Negara yang terjangkit</p>
            </div>
        </div>
    </section>
    <!-- </div>  -->

    <!-- konsultasi -->
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
            <div class="konsultasi-right-col">
               <div class="konsultasi-image"> 
                <img src="image/dokter.png">
               </div> 
            </div>
        </div>
    </section>
        
    <div class="footer">
    <center><h1 class="footer">STAY SAFE!</h1></center>
    </div>
</body>
</html>