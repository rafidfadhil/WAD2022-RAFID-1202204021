<?php
require '../config/connector.php';

$id = $_GET['id'];

$sqldb = "DELETE FROM showroom_rafid_tabel WHERE id_mobil = $id";

if (mysqli_query($connector, $sqldb)) {
  header("location: ../pages/ListCar-Rafid.php?message=delete");
} else {
  echo "Gagal";
}