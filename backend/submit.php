<?php

if(isset($_POST['apply'])){
    $a = $_POST['fullname'];
    $b = $_POST['gender'];
    $d = $_POST['dob'];
    $e = $_POST['alamat'];
    $f = $_POST['email'];
    $g = $_POST['telepon'];
    $p = $_POST['jmlpesan'];
	$t = $_POST['total'];
	$sts = $_POST['status'];

    $rand = rand();
	$ekstensi = array('pdf','docx','png','jpg','jpeg');
    $j = $_FILES['pengantar']['name'];
	$ukurani = $_FILES['pengantar']['size'];
	$ext = pathinfo($j, PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi)){
		echo 'Gagal Ekstensi';
	}else{
		if($ukurani < 1044070){
			$j = $rand.'_'.$i;
			move_uploaded_file($_FILES['pengantar']['tmp_name'], 'surat/'.$rand.'_'.$i);
			mysqli_query($conn,"insert into registrasi (idproduk,name,gender,dob,alamat,email,telepon, jmlpesan, pengantar, total, status) values('$idproduk','$a','$b','$d','$e','$f','$g','$h','$p','$j','$t','$sts',)");
			header('location:thanks.php');
		} else {
			echo 'Gagal Ukuran';
		}
	}
};
?>