<?php
if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = "surat/".$fileName;

    if(!empty($fileName) && file_exists($filePath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filePath);
        exit;
    }
    else{
        echo "file tidak ditemukan!!";
    }
}
?>