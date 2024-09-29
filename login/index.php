<?php
include '../travel/php/koneksi.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome To Balipath</h2>
				</div>
			</div>
			<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0">
				<h3 class="mb-4 text-center">Silahkan Masukkan Akun</h3>
				<form action="index.php" method="POST" class="signin-form">
					<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Username" required>
					</div>
					<div class="form-group">
					<input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
					<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-group">
					<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
					</div>
				</form>
				</div>
			</div>
			</div>

		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyiapkan statement SQL
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah user ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verifikasi password langsung
        if ($password === $row['password']) {
            // Jika password benar, simpan session dan redirect ke base.php
            $_SESSION['username'] = $username;
            header("Location: ../travel/base.php");
            exit(); // Menghentikan eksekusi skrip setelah redirect
        } else {
            // Jika password salah
            $_SESSION['error'] = "Password salah.";
            header("Location: index.php"); // Kembali ke halaman login
            exit();
        }
    } else {
        // Jika username tidak ditemukan
        $_SESSION['error'] = "Username tidak ditemukan.";
        header("Location: index.php"); // Kembali ke halaman login
        exit();
    }
}
?>

