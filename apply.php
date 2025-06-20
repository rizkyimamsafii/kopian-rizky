<?php
session_start();
require 'backend/koneksi.php';
date_default_timezone_set("Asia/Bangkok");
$date_now = date("Y-m-d", strtotime("-16 years"));
$getid = $_GET['id'];
$getdata = mysqli_query($conn,"select * from produk where id='$getid'");
$data = mysqli_fetch_array($getdata);

                    $idproduk = $data['id'];
                    $namaproduk = $data['produkname'];
                    $descproduk = $data['produkdesc'];
                    $mulai = date_format(date_create($data['produkstart']),"d M Y");
                    $selesai = date_format(date_create($data['produkend']),"d M Y");
                    $periode = $mulai." - ".$selesai;
                    $deadline = date_format(date_create($data['registerend']),"d M Y");

                    if(isset($_POST['apply'])){

                        $a = $_POST['fullname'];
                        $b = $_POST['gender'];
                        $e = $_POST['alamat'];
                        $f = $_POST['email'];
                        $g = $_POST['telepon'];
						$p = $_POST['jumlah'];

						$rand = rand();
						$ekstensi = array('pdf','docx','png','jpg','jpeg');
                        $i = $_FILES['pengantar']['name'];
						$ukurani = $_FILES['pengantar']['size'];
						$ext = pathinfo($i, PATHINFO_EXTENSION);

                        // $insertdata = mysqli_query($conn,"insert into registrant (idjob,name,gender,dob,alamat,email,telepon,instansi,pengantar) values('$idjob','$a','$b','$d','$e','$f','$g','$h','$i')");
						if(!in_array($ext,$ekstensi)){
							echo 'Gagal Ekstensi
								<meta http-equiv="refresh" content="3;url=submit.php" />';
						}else{
							if($ukurani < 1044070){
								$j = $rand.'_'.$i;
								move_uploaded_file($_FILES['pengantar']['tmp_name'], 'surat/'.$rand.'_'.$i);
								mysqli_query($conn,"insert into registrasi (idproduk,name,gender,alamat,email,telepon, jmlpesan, pengantar) values('$idproduk','$a','$b','$e','$f','$g',$p,'$j')");
								header('location:thanks.php');
							} else {
								echo 'Gagal Ukuran
								<meta http-equiv="refresh" content="3;url=submit.php" />';
							}
						}
                        // if($insertdata){
                        //     header('location:thanks.php');
                        // } else {
                        //     echo 'Gagal
                        //     <meta http-equiv="refresh" content="3;url=submit.php" />';
                        // }
                    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$namaproduk;?></title>
    
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


<body class="is-preload">
			<div>
				<!-- Main -->
					<div id="main">
							<!-- First Section -->
							<section id="first" class="main special">
								<div class="major">
									<div align="left">
									<a href="listproduk.php" class="btn btn-light">Kembali</a>

									</div>

										<header class="major">
											<h2><?=$namaproduk;?></h2>
										</header>
                                        <h3><?=$descproduk;?></h3>
									</div>

                            <form method="post" enctype="multipart/form-data">
                            <div align="center">
												<div class="col-6 ">
                                                    Nama Lengkap
													<input type="text" name="fullname" placeholder="Name" />
												</div>
												<!-- <div class="col-6 col-12-xsmall">
                                                    Email
													<input type="email" name="email" placeholder="Email" />
                                                </div> -->
												<div class="col-6 col-12-xsmall">
                                                    Jenis Kelamin
													<select name="gender"><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select>
                                                </div>
                                                <div class="col-6 col-12-xsmall">
                                                    Alamat Lengkap / Link Alamat Google Maps
													<input type="text" name="alamat" placeholder="Alamat" />
												</div>
												<div class="col-6 col-12-xsmall">
                                                    Telepon (Whatsapp) dimulai dengan 62
													<input type="text" name="telepon" min="1" value="62"required>
                                                </div>
												<div class="col-6 col-12-xsmall">
													Jumlah Pesanan
													<input type="text" name="jumlah" placeholder="Jumlah">
                                                </div>
												<!-- <div class="col-6 col-12-xsmall">
                                                    Pesanan
													<input type="text" name="status" placeholder="cod/take away">
                                                </div> -->
												<div class="col-12">
												<p>Upload Foto Rumah/Lokasi</p>
													<input  type="file" name="pengantar" required >
													<p align="center" style="color: red">Hanya Mendeteksi Ekstensi .png | .jpg | .jpeg <br>Size Maximal 800Kb</p>
													<input type="submit" value="Submit" class="btn btn-success primary" name="apply" />
                                                </div>
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