<?php 
session_start();

require "../config/connector.php";

if(!isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}

$id = $_GET["id"];
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

$list = query("SELECT * FROM showroom_rafid_table WHERE id_mobil = $id")[0];

function query($query){
    global $conn_user;
    $result = mysqli_query($conn_user, $query);
    // kita siapkan barisnya
    $rows = [];
    // kita tambahkan elemen ke setiap barisnya
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    // kita tampilkan barisan yang sudah diisi oleh setiap elemen
    return $rows;
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
    <title>Detail Mobil | Rafid 1202204021 </title>
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="Home-Rafid.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" style="font-weight: bold; color:white;"
                            href=<?php onButtonCar(); ?>>MyCar</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="Add-Rafid.php"><button
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

    <section id="Detail" class="mb-5">
        <div class="judul-atas" style="margin: 50px 0 0 120px;">
            <h1 class="fw-bold"><?= $list["nama_mobil"] ?></h1>
            <p> Detail Mobil <?= $list["nama_mobil"] ?></p>
        </div>

        <div class="isian d-flex justify-content-center mt-5">

            <div class="col">
                <div class="row">
                    <img class="pe-5 w-75 h-75 mx-auto" src="../asset/images/<?= $list["foto_mobil"]?>" alt="gambar">
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <form action="" class=" w-75" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="mobil" class="form-label"><b>Nama Mobil</b></label>
                            <input type="text" class="form-control" id="mobil" name="mobil"
                                style="background-color: white; border-radius: 8px;" value="<?= $list["nama_mobil"] ?>"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label for="pemilik" class="form-label">Nama Pemilik</label>
                            <input type="text" class="form-control" style="background-color: white; border-radius: 8px;"
                                id="pemilik" name="pemilik" value="<?= $list["pemilik_mobil"] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="merk" class="form-label">Nama Merk</label>
                            <input type="text" class="form-control" style="background-color: white; border-radius: 8px;"
                                id="merk" name="merk" value="<?= $list["merk_mobil"] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
                            <input type="date" class="form-control" style="background-color: white; border-radius: 8px;"
                                id="tanggal_beli" name="tanggal_beli" value="<?= $list["tanggal_beli"] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control"
                                style="background-color: white; border-radius: 8px;" cols="30" rows="10"
                                readonly> <?= $list["deskripsi"];?> </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">foto</label>
                            <input type="file" class="form-control" style="background-color: white; border-radius: 8px;"
                                id="foto" name="foto" accept="image/*" placeholder="<?= $list["foto_mobil"]?>"
                                value="<?= $list["foto_mobil"]?>" readonly>
                            <span style="font-size: 14px; color: red;"><?php echo $list["foto_mobil"] ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Pembayaran</label>
                            <br>
                            <div class="d-flex flex-row">
                                <label for="Lunas" class="me-4 d-flex gap-2"><input type="radio" id="Lunas"
                                        name="status" value="Lunas"
                                        <?php if($list["status_pembayaran"]=="Lunas" )echo "checked"; ?>>Lunas</label><br>
                                <label for="Belum Lunas" class="me-4 d-flex gap-2"><input type="radio" id="Belum Lunas"
                                        name="status" value="Belum Lunas"
                                        <?php if($list["status_pembayaran"]=="Belum Lunas" )echo "checked"; ?>>Belum
                                    Lunas</label><br>
                            </div>
                        </div>
                    </form>
                    <a href="Edit-Rafid.php?id=<?= $list["id_mobil"]; ?>"><button
                            class="btn btn-primary px-3 py-2">Edit</button></a>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>