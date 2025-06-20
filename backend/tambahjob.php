<?php

if(isset($_POST['addproduk'])){

    $n = $_POST['produkname'];
    #saya tambah kalimat produk
    $d = $_POST['descproduk'];
    $s = $_POST['start'];
    $e = $_POST['end'];
    $er = $_POST['endregist'];

    $tambahjob = mysqli_query($conn,"insert into produk (produkname,produkdesc,produkstart,produkend,registerend)
                                    values ('$n','$d','$s','$e','$er')");

    if($tambahproduk){
        echo 'Berhasil';
        header('location:admin.php');
    } else {
        echo 'Gagal';
        header('location:admin.php');
    };

};



?>