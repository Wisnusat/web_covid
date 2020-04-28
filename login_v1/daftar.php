<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">
<!--===============================================================================================-->
</head>
<body>
	
	<!-- ini gambarnya, kalau mau diganti tinggal ganti nama gambarnya di line 32, "images/" nya gausah dihapus, 
	soalnya gambarnya ambil dari situ. Oh iya kalau mau makek gambar jangan lupa gambarnya di save di folder images -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic">
					<img src="images/dokter.png" alt="IMG">
				</div>
<!--===============================================================================================-->

				<form method="post" action="proses-daftar.php">
					<span class="login100-form-title">
						Sign up
                    </span>
                    
                    <div class="wrap-input100 validate-input" data-validate = "nik is required">
						<input class="input100" type="text" name="nik" placeholder="nik">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "nama is required">
						<input class="input100" type="text" name="nama" placeholder="nama">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "tanggal lahir is required">
						<input class="input100" type="date" name="tanggal_lahir">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "tempat tinggal is required">
						<input class="input100" type="text" name="tempat_tinggal" placeholder="tempat tinggal">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "jenis kelamin is required">
						<input class="input100" type="text" name="gender" placeholder="jenis kelamin">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="daftar">
							Sign up
						</button>
                    </div>
                    
                    <div class="text-center p-t-12">
						<a class="txt2" href="index.html">
							login
						</a>
					</div>

					<!-- ini buat cari akunnya kalau lupa password
					<div class="text-center p-t-12">
						<span class="txt1">
							Alre
						</span>
						<a class="txt2" href="daftar.php">
							Sign up
						</a>
					</div> -->
<!--===============================================================================================-->					

					<!-- <div class="text-center p-t-136"> ini tombol buat daftar account, tapi nggak tak pakek
						<a class="txt2" href="#">
							Create your Account
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		// $('.js-tilt').tilt({
		// 	scale: 1.1
		// })
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>