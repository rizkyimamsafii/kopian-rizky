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
    <title>Daftar Menu</title>
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
	<div >
			<div  id="main" >
						<section id="second" class="main special">
								<header class="major">
								<div align="left">
										<a href="index.php" class="btn btn-light">Kembali</a>
								</div>
									<h2><strong>Menu Tersedia</strong></h2>
                                </header>

                                <div class="table-wrapper">
									<table class="alt">
										<tbody>
											<!-- <thead> -->
											<tr>
												<th>Menu Tersedia</th>
												<th>Batas Awal Produk</th>
												<th>Batas Akhir Produk</th>
												<th>Harga</th>
												<th>Aksi</th>
											</tr>

											<!-- <thead> -->
											<?php
											$getdata = mysqli_query($conn,"select * from produk where registerend>'$date_now'");
											while($data=mysqli_fetch_array($getdata)){
												$idproduk = $data['id'];
												$descproduk = $data['produkdesc'];
												$namaproduk = $data['produkname'];
												$mulai = date_format(date_create($data['produkstart']),"d M Y");
												$selesai = date_format(date_create($data['produkend']),"d M Y");
												$periode = $mulai." - ".$selesai;
												$deadline = date_format(date_create($data['registerend']),"d M Y");
											?>

											<tr>
												<td><?=$namaproduk;?></td>
												<td><?=$periode;?></td>
												<td><?=$deadline;?></td>
												<th>Rp.<?=$descproduk;?></th>
												<td><a href="apply.php?id=<?=$idproduk;?>" class="btn btn-primary">Beli Sekarang</a></td>
											</tr>
											<?php
											};	
											?>
										</tbody> 
									</table>
								</div>
						</section>
				</div>
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