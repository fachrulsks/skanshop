<?php
 //koneksi Database
 $server= "localhost";
 $user= "root";
 $pass= "";
 $database= "skanshop";

 $koneksi= mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
 //untuk penghubung dengan file koneksi

 if(isset($_POST['input'])){
     $email = $_POST['email'];
     $password= $_POST['password'];

     //ambil data dari database tabel login dengan username dan password yang sesuai
     $data = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password' ");

     if(mysqli_num_rows($data)){
         header("location:home.php");
     }
     else{
         echo "Login Gagal";
         
     }
     $koneksi= mysqli_connect('localhost', 'root', '', 'skanshop');
    if(!$koneksi){
        echo "koneksi Gagal";
    }
   

 }
?>

<!doctype html>
<html lang="en">
  <head>
		<style>
		body { height: 100vh; background: linear-gradient(180deg, #6AC9C9 0%, #43E7FE 100%);}
		</style>
		<!-- Required meta tags -->

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>login</title>
  </head>
  <body>
	<div class="text-center"><img src="user 1.png" alt=""></div>
	<div class="container">
	<h2 class="text-center">Login</h2>
		<form action = "home.php" method = "post" name = "form_input">
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" placeholder="Masukkan email" required="" class="form-control">
				</div>
				<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Masukkan password" required="" class="form-control">
				</div>
				<div class="text-end">
				<a href="reset.html">Forgot Password</a> 
				</div>
				<div class="text-center mt-5">
					<input class="btn btn-primary" type="submit" name="input" value="LOGIN">
				</div>			
			</div>
		</form>
					<p class="text-center mt-3"> Jika anda belum mempunyai akun?</p>
			<div class="text-center mt-3">
				<a href="registrasi.php">Daftar disini</a> 
				</div>
				

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
        
  </html>