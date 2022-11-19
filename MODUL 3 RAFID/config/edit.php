<?php
require '../config/connector.php';

$id = $_GET['id'];
$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "UPDATE showroom_rafid_table SET nama_mobil = '$namamobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', foto_mobil = '$gambar', status_pembayaran = '$status' WHERE id_mobil = $id";
  if (mysqli_query($connector, $sql)) {
    header("location: ../pages/ListCar-Rafid.php?message=update");
  } else {
    echo "Gagal";
  }
} else {
  echo "Gagal";
}

if (isset($_GET['message'])) {
  if ($_GET['message'] == 'succes') {
    // get name
    echo "<script>alert('successfuly added to database ')</script>";
  } else if ($_GET['message'] == 'update') {
    echo "<script>alert('Data berhasil di edit')</script>";
  } else if ($_GET['message'] == 'delete') {
    echo "<script>alert('Data berhasil dihapus')</script>";
  }
}