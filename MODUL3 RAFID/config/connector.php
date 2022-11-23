<?php
$connector = new mysqli("localhost", "root", "", "modui3");

if (!$connector) {
  die("Koneksi Gagal: " . $connector->connect_error);
}