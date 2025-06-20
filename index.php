<?php
session_start();
require 'backend/koneksi.php';
date_default_timezone_set("Asia/Bangkok");
$date_now = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopian Rizky</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
    <body>
			<div>		
				<!-- Nav -->
				<nav id="nav" class="alt">
					<ul>
						<li><img src="img/logokr.png" class="landing"></li>
						<li><a href="#home" class="active">Beranda</a></li>
						<li><a href="#intro">Tentang</a></li>
						<li><a href="#first">Galery</a></li>
						<li><a href="#second">Menu Tersedia</a></li>
						<!-- <li><a><img src="img/lockr.png" class="landing"></a></li> -->
					</ul>
				</nav>
				<!-- Main -->
					<div id="main">
						<!-- Tentang -->	
						<section id="home" class="main special">
								<img src="img/Bannerkr.jpg" alt="Avatar" class="image">
										<header id="header" class="major">
											<h1>Panggone Wong Damai<br>Kopian Rizky</h1>
											<p>Kedai Kopi Bernuansa alam <br> Menyajikan Pemandangan Sawah dan tiga view gunung.</p>
										</header>										
						</section>
						<!-- Introduction -->
						<section id="intro" class="main">
							<div align="center" class="spotlight">
								<div class="content">
									<header class="major">
										<h2>Kopian Rizky</h2>
									</header>
										<p align="left">Kopian Rizky (KR) adalah salah satu kedai kopi bernuansa tradisional pedesaan yang terletak 
											<br>di lokasi persawahan Desa Kendalpayak, Kecamatan Pakisaji, Kabupaten Malang. KR dibuka sejak 3 Juni 2023 oleh pengelola yang bernama Rizky. Kopian ini sangat 
											cocok untuk bersantai, ketika pagi hari disuguhkan dengan pemandangan gunung semeru, ketika siang sampai sore disuguhkan<br>dengan pemandangan gunung arjuna dan 
											gunung putri tidur. KR merupakan tempat yang sering digunakan sebagai tempat melepaskan beban pikiran karena suasana persawahan yang penuh dengan pemandangan asri dan banyak tanaman hijau serta pemandangan lain dapat dirasakan
											ketika matahari mulai terbenam.</p>
								</div>								
								<video width="350" height="530" controls>
									<source src="img/opening.mp4" type="video/mp4" />
									Browsermu tidak mendukung tag ini, upgrade donk!
								</video>
								</div>
						</section>
						<!-- First Section -->
						<section id="first" class="main special">
							<header class="major">
								<h2>Galery</h2>
							</header>
								<ul class="features">
									<li>
									<div class="container-con">
										<img src="img/testimoni1.jpg" alt="Avatar" class="image">
										<div class="overlay">
											<div class="text">Spot Sunset Gunung Putri Tidur</div>
										</div>
									</div>
									</li>
									<li>
									<div class="container-con">
										<img src="img/testimoni2.jpg" alt="Avatar" class="image">
										<div class="overlay">
											<div class="text">Bersantai dengan keluarga</div>
										</div>
									</div>
									</li>
									<li>
									<div class="container-con">
											<img src="img/testimoni3.jpg" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Nongkrong dengan damai</div>
											</div>
											</div>
									</li>
									<li>
									<div class="container-con">
											<img src="img/testimoni4.jpg" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Resesrvasi Kuliner</div>
											</div>
											</div>
									</li>
									<li>
									<div class="container-con">
											<img src="img/testimoni5.jpg" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text" href="listproduk.php">Spot Mancing</div>
											</div>
											</div>
										</li>
										<li>
									<div class="container-con">
											<img src="img/testimoni6.jpeg" alt="Avatar" class="image">
											<div class="overlay">
												<div class="text">Senam olahraga</div>
											</div>
											</div>
									</li>
						</section>

						<section id="second" class="main special">
							<header class="major">
								<div class="hero-image">
									<h2><strong>Menu Tersedia</strong></h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
		
		<div class="col">
                <div class="card">
                    <img src="./img/tahuTelor.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tahu Telor</h5>
                        <p class="card-text">signatur menu dari kopian rizky yang memiliki cita rasa gurih, dibuat dari lontong, telor, & sambal dari kacang.
							makanan ini dinikmati waktu apapun.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>Rp. 15.000</h3>
						<td><a href="listproduk.php" class="btn btn-primary">beli</a></td>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="./img/kopiHijau.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kopi Hijau</h5>
                        <p class="card-text">Kopi khas dari Kabupaten Tulungangun dengan cita rasa kacang hijau.
							cocok diminum ketika sedang beristirahat setalah melakukan aktifitas.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>Rp. 8000</h3>
						<td><a href="listproduk.php" class="btn btn-primary">beli</a></td>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="./img/arabicaAceh.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kopi Arabica Aceh Gayo</h5>
                        <p class="card-text">kopi yang berasal dari Aceh ini memiliki cita rasa asam karena ditanam
							didataran tinggi. kopi ini nikmat diminum pada saat sore hari menjelang magrib.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>Rp. 10.000</h3>
						<td><a href="listproduk.php" class="btn btn-primary">beli</a></td>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="./img/letegLembut.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kopi Leteg (tubruk)</h5>
                        <p class="card-text">kopi tubruk yang di grinder (dihancurkan) dengan tingkat kekasaram medium.
							kopi ini sangat cocok dinikmati ketika malam hari sambil bersantai ngobrol dengan teman.
						</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>Rp. 10.000</h3>
						<td><a href="listproduk.php" class="btn btn-primary">beli</a></td>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="./img/tapeSusu.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Es Tape Susu</h5>
                        <p class="card-text">perpaduan Tape(fermentasi) ketan hitam & susu kental manis menciptakan rasa yang cukup unik (manis dan asam).
							Es tape susu ini cocok dinikmati ketika siang hari.
						</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>Rp. 7.000</h3>
						<td><a href="listproduk.php" class="btn btn-primary">beli</a></td>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="./img/kopiHijau.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kopi Robusta Dampit</h5>
                        <p class="card-text">Kopi hitam yang berasal dari daerah Dampit malang dengan kualitas 
							terbaik. kopi ini sangat enak diminum pada saat pagi hari ketika sebelum melakukan aktifitas.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>Rp.7000</h3>
						<td><a href="listproduk.php" class="btn btn-primary">beli</a></td>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div>
	</section>
	</div>
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
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        	crossorigin="anonymous"></script>
	</body>
</html>