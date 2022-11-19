<?php
$connector = new mysqli("localhost", "root", "", "modul3");

if (!$connector) {
  die("Koneksi Gagal: " . $connector->connect_error);
}