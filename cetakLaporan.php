<!DOCTYPE html>
<htmL lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data</title>
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
    <!-- <?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment; filename=Laporan Pesanan.xls');
    ?> -->

    <center>
        <h2>laporan Pesanan Kopian Rizky</h2>
    </center>

    <table border="1">

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
    </tr>
    
    <?php
    include_once('backend/koneksi.php');
    include 'backend/cek.php';
    $cetak_laporan = mysqli_query($conn, "select * from registrasi r, produk j where r.idproduk=j.id");
    while($data = mysqli_fetch_assoc($cetak_laporan))
    {
    ?>
        <tr>
        <td><?=$data['idreg'];?></td>
        <td><?=$data['date'];?></td>
        <td><?=$data['produkdesc'];?></td>
        <td><?=$data['name'];?></td>
        <td><?=$data['produkname'];?></td>
        <td><?=$data['gender'];?></td>
        <td><?=$data['alamat'];?></td>
        <td><?=$data['jmlpesan'];?></td>
        <td><?=$data['status'];?></td>
    </tr>
    <?php
    }
    ?>
    </table>

</body>

</htmL>