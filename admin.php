<?php
include 'backend/cek.php';
require 'backend/koneksi.php';
include 'backend/tambahjob.php';
include 'backend/update.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

  <body>
		<!-- Wrapper -->
			<div>
			<!-- <div id="wrapper"> -->
            <nav id="nav" class="alt">
					<ul>
						<li><img src="img/logokr.png" class="landing"></li>
						<li><a href="#home" class="active">Dashboard</a></li>
						<li><a href="#first">Kelola Pesanan</a></li>
						<li><a href="#kelolaMenu">Kelola Menu</a></li>
						<li><a href="logout.php" class="btn btn-danger">Logout</a></li>
					</ul>
				</nav>
				<!-- Header -->
                
				<!-- Main -->
                <div id="main">
                        <section id="home" class="main special">
                            <h1>Kopian Rizky<br> Admin Dashboard</h1>
                        </section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Kelola Pesanan</h2>
								</header>
								
                                <table id="table2" class="display" width="100%">
                                    <thead style="background-color:#2b98f1;color:#fff">
                                    <tr>
                                        <th>idreg</th>    
                                        <th>Register</th>
                                        <th>Harga</th>
                                        <th>Nama</th>
                                        <th>Pesanan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Jumlah Pesanan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                    <?php
                                    $getregistrasi = mysqli_query($conn,"select * from registrasi r , produk j where r.idproduk=j.id");

                                    while($reg=mysqli_fetch_array($getregistrasi)){
                                        //main
                                        $id = $reg['idreg'];
                                        $descproduk = $reg['produkdesc'];
                                        $date = $reg['date'];
                                        $namaproduk = $reg['produkname'];
                                        $nama = $reg['name'];
                                        $email = $reg['email'];
                                        $gender = $reg['gender'];
                                        // $dob = $reg['dob'];
                                        $alamat = $reg['alamat'];
                                        $telepon = $reg['telepon'];
                                        $pengantar = $reg['pengantar'];
                                        $jumlah = $reg['jmlpesan'];
                                        $status = $reg['status'];
                                        // $totalbayar = $reg['total'];
                                    ?>
                                    <tr>
                                        <td><?=$id;?></td>
                                        <td><?=$date;?></td>
                                        <td><?=$descproduk;?></td>
                                        <td><?=$nama;?></td>
                                        <td><?=$namaproduk;?></td>
                                        <td><?=$gender;?></td>
                                        <td><?=$alamat;?></td>
                                        <td><?=$jumlah;?></td>
                                        <td><?=$status;?></td>
                                        <td><button type="button" class="btn primary" data-toggle="modal" data-target="#view<?=$id;?>">Tampilkan</button></td>
                                        <!-- <td><select name="status" class="btn btn-success">><option value="dibayar">dibayar</option><option value="belum dibayar">belum dibayar</option></select></td> -->
                                    </tr>
                                    
                                    <!-- The Modal -->
                                    <div class="modal fade" id="view<?=$id;?>">
                                    <form method="post">
                                        <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title"><?=$namaproduk;?></h4>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                            <h2><?=$nama;?>,<?=$alamat;?>, (<?=$email;?>), (<?=$telepon;?>)</h2> 
                                            <h3><?=$namaproduk;?>, <?=$jumlah;?></h3>
                                            <h3 type="button" class="button primary"><a href="download.php?file=<?php echo $reg['pengantar'];?>">foto lokasi pemesan</a></h3>
                                            <br><br>
                                            <!-- <a href="https://mailto:<?=$email;?>" class="btn btn-success">Send Email</a> -->
                                             <a target="_blank" href="https://wa.me/<?=$telepon;?>" class="btn btn-success">Send Whatsapp</a>
                                            </div>

                                            <input type="hidden" name="idpendaftar" value="<?=$id;?>">
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="submit" name="delete" class="btn btn-danger" style="background-color:red"><font color="white">Delete</font></button>
                                            <button type="submit" name="done" class="btn btn-done" style="background-color:orange" ><font color="white">Selesai</font></button>

                                        </div>
                                            
                                        </div>
                                        </div>
                                    </form>
                                </div>

                                    <?php
                                    };

                                    if(isset($_POST['delete'])){
                                        $lihatid = $_POST['idpendaftar'];
                                        $hapus = mysqli_query($conn,"delete from registrasi where idreg='$lihatid'");
                                        if($hapus){
                                            echo 'Berhasil <meta http-equiv="refresh" content="1;url=admin.php" />';
                                        } else {
                                            echo 'Gagal menghapus <meta http-equiv="refresh" content="1;url=admin.php" />';
                                        };
                                    }

                                    if(isset($_POST['done'])){
                                        $lihatid = $_POST['idpendaftar'];
                                        $updatests = mysqli_query($conn,"update registrasi set status='sudah dibayar' where idreg='$lihatid'");
                                        if($updatests){
                                            echo 'Berhasil <meta http-equiv="refresh" content="1;url=admin.php" />';
                                        } else {
                                            echo 'Gagal menghapus <meta http-equiv="refresh" content="1;url=admin.php" />';
                                        };
                                    }
                                    ?>
                                    

                                </tbody>
                                </table>
                                <div class="float-rigth">
                                <a href="export_pdf.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i>&nbspCetak Laporan</a>
                                </div>
                            </section>
                            
                            <section id="kelolaMenu"class="main special">
                            <header class="major">
									<h2>Kelola Menu</h2>
							</header>

            <div class="data-tables datatable-dark">
                <table id="table1" class="display" width="100%">
                    <thead style="background-color:#2b98f1;color:#fff">
                    <tr>
                        <th>Produk Tersedia</th>
                        <th>Periode</th>
                        <th>Maksimal Periode</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                <tbody>
                    <?php
                    $getdata = mysqli_query($conn,"select * from produk");
                    while($data=mysqli_fetch_array($getdata)){
                    $idproduk = $data['id'];
                    $namaproduk = $data['produkname'];
                    $descproduk = $data['produkdesc'];
                    $mulai = date_format(date_create($data['produkstart']),"d M Y");
                    $selesai = date_format(date_create($data['produkend']),"d M Y");
                    $periode = $mulai." - ".$selesai;
                    $deadline = date_format(date_create($data['registerend']),"d M Y");
                    ?>
                    <tr>
                    <form method="post">
                    <input type="hidden" name="idj" value="<?=$idproduk;?>">
                        <td><?=$namaproduk;?></td>
                        <td><?=$periode;?></td>
                        <td><?=$deadline;?></td>
                        <td>Rp. <?=$descproduk?></td>
                        <td><button type="button" class="button primary small" data-toggle="modal" data-target="#edit<?=$idproduk;?>">Edit</button><button type="submit" class="button small" style="background-color:red;" name="deleteproduk"><font color="white">Delete</font></button></td>
                    </form>
                    </tr>

                    <!-- The Modal -->
                    <div class="modal fade" id="edit<?=$idproduk;?>">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Edit <?=$namaproduk;?></h4>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <input type="text" name="updateprodukname" class="form-control" value="<?=$namaproduk;?>"><br>

                                <textarea name="updatedesc"><?=$descproduk;?></textarea><br>

                                Mulai Pesan: <input type="date" name="updatestart" class="form-control" value="<?=$data['produkstart'];?>"><br>

                                Akhir Pesan: <input type="date" name="updateend" class="form-control" value="<?=$data['produkend'];?>"><br>

                                Maximal Pesan: <input type="date" name="updatedeadline" class="form-control" value="<?=$data['registerend'];?>"><br>

                                <input type="hidden" name="updateid" value="<?=$idproduk;?>">
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    
                    <?php
                    };

                    if(isset($_POST['deleteproduk'])){
                        $idj = $_POST['idj'];
                        $querydelete = mysqli_query($conn,"delete from produk where id='$idj'");
                        
                        if($querydelete){
                            echo 'Berhasil
                            <meta http-equiv="refresh" content="1;url=admin.php" />';
                        } else {
                            echo 'Gagal
                            <meta http-equiv="refresh" content="3;url=submit.php" />';
                        };
                    };

                    ?>
                </tbody>
                </table>
                <div align="center"><button type="button" class="primary" data-toggle="modal" data-target="#myModal">Tambah Menu Baru</button></div>
            </section>

						
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy Kopian Rizky 2024</p>
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


    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color:#2b2b2b;">
          <form method="post">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Produk Baru</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <input type="text" name="produkname" placeholder="Masukan Produk tersedia" class="form-control"><br>

            <textarea name="produkdesc" placeholder="Harga Produk" ></textarea><br>

            Periode: <input type="date" name="start" class="form-control"><br>

            Akhir pesan: <input type="date" name="end" class="form-control"><br>

            Maksimal Pesan <input type="date" name="endregist" class="form-control"><br>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="addproduk">Submit</button>
        </div>
        
        </form>
      </div>
    </div>
  </div>
    



<script>
    $(document).ready(function() {
    $('#table1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );

    $(document).ready(function() {
    $('#table2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
</script><!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<!-- Start datatable js -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
</html>
