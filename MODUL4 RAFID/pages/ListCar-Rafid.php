<?php 
session_start();

require "../config/connector.php";

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

$list = query("SELECT * FROM showroom_rafid_table");

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

function read_more($string)
    {
      // strip tags to avoid breaking any html
        $string = strip_tags($string);
        if (strlen($string) > 100) {

            // truncate string
            $stringCut = substr($string, 0, 100);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '...';
        }
        return $string;
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil | Rafid 1202204021</title>
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
    <style>
    <?php include "../asset/style/index.css";
    ?>
    </style>
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

    <section id="list">
        <div class="container">
            <div>
                <h1>My Show Room</h1>
                <p>List Show Room Rafid - 1202204021</p>
                <div class="d-flex gap-5">
                    <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='card cardcontent' style='width: 18rem;' mb-3>
            <img src='../asset/images/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
              <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
              <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
              <span class='d-flex'>
                <a href='Detail-Rafid.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                <a href='../config/delet.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
              </span>
            </div>
          </div>";
            }
          } else {
            echo "0 results";
          }
          ?>
                </div>
            </div>
        </div>
    </section>
    <footer class="fixed-bottom" style="padding-bottom: 50px; margin-top:50px;">
        <div class="container">
            <p
                style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">
                Jumlah Mobil : <?php echo mysqli_num_rows($result) ?></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>