<?php
require "connector.php";
function tambah($tambahData) {
    global $conn_user;
    // ambil data dari tiap element dalam form
    // pake htmlspecialchars biar gak diganggu user
    $mobil = htmlspecialchars($tambahData["mobil"]);
    $pemilik = htmlspecialchars($tambahData["pemilik"]);
    $merk = htmlspecialchars($tambahData["merk"]);
    $tanggal_beli = htmlspecialchars($tambahData["tanggal_beli"]);
    $deskripsi = htmlspecialchars($tambahData["deskripsi"]);
    $foto = upload();

    if (!$foto) {
        return false;
    }
    $status = htmlspecialchars($tambahData["status"]);
    // query insert data into tables
    $query = "INSERT INTO showroom_rafid_table VALUES ('', '$mobil', '$pemilik', '$merk', '$tanggal_beli', '$deskripsi', '$foto', '$status' )";
    mysqli_query($conn_user, $query); 
    
    return mysqli_affected_rows($conn_user);
}

function upload() {
    $namaFile = $_FILES["foto"]["name"];
    $ukuranFile = $_FILES["foto"]["size"];
    $error = $_FILES["foto"]["error"];
    $tmpName = $_FILES["foto"]["tmp_name"];
    
    // mindahin tmpfile ke lokasi yang diinginkan
    move_uploaded_file($tmpName, "../asset/images/" . $namaFile);

    return $namaFile;
}

?>