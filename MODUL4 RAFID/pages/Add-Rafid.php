<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}
require "../config/insert.php";
$query = "SELECT * FROM showroom_rafid_table";
$result = mysqli_query($conn_user, $query);
function onButtonCar() {
    global $result;
    if(mysqli_num_rows($result) > 0) {
      echo "ListCar-Rafid.php";
    } else {
      echo "Add-Rafid.php";
    }
  }

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
                    <script> 
                    alert('data berhasil ditambahkan');
                    document.location.href = 'ListCar-Rafid.php';  
                    </script>";
    }  else {
        echo "
                <script> 
                    alert('data tidak berhasil ditambahkan');
                    document.location.href = 'ListCar-Rafid.php';  
                </script>";
    }
}

$pilihan_warna = [
    "primary" => "Blue",
    "dark" => "Black",
    "secondary" => "Gray",
    "danger" => "Merah"
  ];

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masukkan Mobil | Rafid 1202204021 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../asset/style/index.css" />
</head>

<body>
    <nav
        class="navbar navbar-expand-lg shadow bg-<?=isset($_COOKIE["warnaNavbar"]) ? $_COOKIE["warnaNavbar"] : "primary";?> text-white py-3">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link  aria-current=" page" href="Home-Rafid.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold; color:white;"
                            href=<?php onButtonCar(); ?>>MyCar</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="Add-Rafid.php"><button
                                class="btn btn-light text-primary px-3 py-1"> Add
                                Car</button></a>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-light text-primary dropdown-toggle px-3 py-1" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION["nama"]; ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Profile-Rafid.php">Profile</a></li>
                            <li><a class="dropdown-item" href="../config/logout.php">Log out</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section id="form">
        <div class="container">
            <div class="tambah">
                <h1>Tambah mobil</h1>
                <p>Tambah Mobil Baru Anda Ke List Show Room</p>
            </div>
            <form action="" method="post" class="w-75" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="mobil" class="form-label" style="margin-top: 30px;"><b>Nama Mobil</b></label>
                    <input type="text" class="form-control" id="mobil" name="mobil"
                        placeholder="Masukkan Nama Mobil anda">
                </div>
                <div class="mb-3">
                    <label for="pemilik" class="form-label"><b>Nama Pemilik</b></label>
                    <input type="text" class="form-control" id="pemilik" name="pemilik"
                        placeholder="Masukkan Nama Pemilik Mobil">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label"><b>Merk</b></label>
                    <input type="text" class="form-control" id="merk" name="merk"
                        placeholder="Masukkan Merk Mobil Anda">
                </div>
                <div class="mb-3">
                    <label for="tanggal_beli" class="form-label"><b>Tanggal Beli</b></label>
                    <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"
                        placeholder="Masukkan Deskripsi Mobil Anda"
                        style="width: 1000px; height: 147px; border: 1px solid #757575; border-radius: 8px;"></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label"><b>Foto</b></label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/*"
                        style="height: 37px;">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label" style="margin-top: 30px;"><b>Status Pembayaran</b></label>
                    <br>
                    <div class=" mt-3 d-flex flex-row" style="color: #757575; font-size: 15px;">
                        <input type="radio" id="Lunas" name="status" value="Lunas" style="width: 17px; height: 17px;">
                        <label for="Lunas" class="me-4" style="margin-left: 10px;">Lunas</label><br>
                        <input type="radio" id="Belum" name="status" value="Belum Lunas"
                            style="width: 17px; height: 17px; margin-left: 20px; ">
                        <label for="Belum" style="margin-left: 10px;">Belum Lunas</label><br>
                    </div>
                </div>
                <div style="margin-top:50px; padding-bottom:50px;">
                    <button type="submit" name="submit"
                        class="btn btn-primary py-2 px-4 mb-4 btn-primary">Selesai</button>
                </div>
            </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>