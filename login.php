<?php
session_start();
require 'backend/koneksi.php';

if(!isset($_SESSION['username'])){

} else {
    header('location:admin.php');
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuname = mysqli_query($conn,"select * from admin where username='$username' and password='$password'");
    $cekrow = mysqli_num_rows($cekuname);

    if($cekrow>0){
        $_SESSION['username'] = $username;
        header('location:admin.php');
    } else {
        echo 'Password salah';
        header('location:login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body >
		<!-- Wrapper -->
			<div>
					<div id="main">

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<div align="left">
										<a href="index.php" class="btn btn-light">Kembali</a>
									</div>
                                    <h2>Masuk sebagai admin</h2>
								</header>
								
                            <form method="post">
                            <div align="center" >
												<div class="col-6 col-12-xsmall">
                                                    Nama
													<input type="text" name="username" placeholder="Username" />
												</div>
												<div class="col-6 col-12-xsmall">
                                                    Password
													<input type="password" name="password" placeholder="Password" />
                                                </div>
												<p></p>
                                                <div class="col-12">
													
                                                    <input type="submit" value="Login" class="primary" name="login" />
												
                                                </div>
                                            </div>
                                    </form>
							</section>

						
					</div>

				<!-- Footer -->
					<footer id="footer">
					<td class="major">
							<th><h4 class="copyright">Contact Kopian Rizky</h4></th>
							<th><a href="https://www.instagram.com/kopian_rizky/?hl=id"><i class ="fa-brands fa-instagram"></i></a></th>
							<th><a href="https://www.tiktok.com/@kopian_rizky?_t=8nmI8Kf1q53&_r=1"><i class ="fa-brands fa-tiktok"></i></a></th>
							<th><a href="http://mdpdenim7020@gmail.com/"><i class ="fa-brands fa-google"></i></a></th>
							<th><a href="https://wa.me/6282139822754"><i class ="fa-brands fa-whatsapp"></i></a></th>
						</td>
						<p align="rigth"class="copyright">Rizky Imam Safii | Kopian Rizky 2024</p>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>