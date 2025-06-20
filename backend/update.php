<?php
    if(isset($_POST['update'])){
        $u1 = $_POST['updateprodukname'];
        $u2 = $_POST['updatedesc'];
        $u3 = $_POST['updatestart'];
        $u4 = $_POST['updateend'];
        $u5 = $_POST['updatedeadline'];
        $idd = $_POST['updateid'];

        $updatejob = mysqli_query($conn,"update produk set produkname='$u1', produkdesc='$u2', produkstart='$u3', produkend='$u4', registerend='$u5' where id='$idd'");

        if($updatejob){
            echo 'Berhasil
            <meta http-equiv="refresh" content="1;url=admin.php" />';
        } else {
            echo 'Gagal
                  <meta http-equiv="refresh" content="3;url=admin.php" />';
        };


    };
?>