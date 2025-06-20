<?php
require 'backend/koneksi.php';
include 'backend/cek.php';
require_once('tcpdf/tcpdf.php');
 // Include file TCPDF utama

// Contoh data (bisa diganti dari database)
$conn = new mysqli("localhost", "root", "", "kopianrizky");
$result = $conn->query("select * from registrasi r , produk j where r.idproduk=j.id");
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = ['id' => $row['idreg'], 
            'descproduk' => $row['produkdesc'],
            'date' => $row['date'],
            'namaproduk' => $row['produkname'],
            'nama' => $row['name'],
            'gender' => $row['gender'],
            'alamat' => $row['alamat'],
            // 'telepon' => $row['telepon'],
            // 'pengantar' => $row['pengantar'],
            'jumlah' => $row['jmlpesan'],
            'status' => $row['status']];
}


// Inisialisasi PDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Pengaturan dasar
$pdf->SetCreator('Native PHP');
$pdf->SetAuthor('Export System');
$pdf->SetTitle('Data PDF Export');
$pdf->SetHeaderData('', 0, '', '', array(0,0,0), array(0,0,0));
$pdf->setHeaderFont(Array('helvetica', '', 12));
$pdf->setFooterFont(Array('helvetica', '', 10));
$pdf->SetDefaultMonospacedFont('helvetica');
$pdf->SetMargins(15, 27, 15);
$pdf->SetHeaderMargin(5);
$pdf->SetFooterMargin(10);
$pdf->SetAutoPageBreak(TRUE, 25);
$pdf->SetFont('helvetica', '', 12);

// Tambah halaman baru
$pdf->AddPage();

// Buat tabel HTML
$html = '<h2>Daftar Pesanan Kopian Rizky</h2>
<table border="1" cellpadding="5">
<thead>
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
</thead>
<tbody>';

foreach ($data as $row) {
    $html .= '<tr><td>' . htmlspecialchars($row['id']) . '</td>
    <td>' . htmlspecialchars($row['date']) . '</td>
    <td>' . htmlspecialchars($row['descproduk']) . '</td>
    <td>' . htmlspecialchars($row['namaproduk']) . '</td>
    <td>' . htmlspecialchars($row['nama']) . '</td>
    <td>' . htmlspecialchars($row['gender']) . '</td>
    <td>' . htmlspecialchars($row['alamat']) . '</td>
    <td>' . htmlspecialchars($row['jumlah']) . '</td>
    <td>' . htmlspecialchars($row['status']) . '</td></tr>';
}

$html .= '</tbody></table>';

// Tulis ke PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Tampilkan atau simpan PDF
$pdf->Output('data_pengguna.pdf', 'I'); // 'I' = tampilkan di browser