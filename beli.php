
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
			<div>
				<!-- Main -->
					<div id="main">
							<section id="first" class="main special">
								
								<div class="major">
									<div align="left">
									<a href="index.php" class="btn btn-light">Kembali</a>


                            <form method="post" enctype="multipart/form-data">
                            <div align="center">
												<div class="col-6 ">
                                                    Nama Lengkap
													<input type="text" name="fullname" placeholder="Name" />
												</div>
												<div class="col-6 col-12-xsmall">
                                                    Email
													<input type="email" name="email" placeholder="Email" />
                                                </div> 
                                                <div class="col-6 col-12-xsmall">
                                                    Alamat
													<input type="text" name="alamat" placeholder="Alamat" />
												</div>
												<div class="col-6 col-12-xsmall">
                                                    Telepon (Whatsapp) dimulai dengan 62
													<input type="text" name="telepon" min="1" value="62"required>
                                                </div>
												<div class="col-12">
												<p>Upload Surat Pengantar PKL</p>
													<input  type="file" name="pengantar" required >
													<p align="center" style="color: red">Hanya Mendeteksi Ekstensi .pdf | .docx | .png | .jpg | .jpeg <br>Size Maximal 800Kb</p>
													<input type="submit" value="Submit" class="btn btn-success primary" name="apply" />
                                                </div>
                                                </div> 
                                            </div>
                                    </form>
							</section>

						
					</div>
            </div>
</body>
</html>