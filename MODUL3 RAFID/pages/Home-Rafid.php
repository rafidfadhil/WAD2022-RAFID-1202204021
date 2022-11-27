<?php
require '../config/connector.php';

$query = "SELECT * FROM showroom_rafid_table";
$result = mysqli_query($connector, $query);

function onClick($result)
{
  if (mysqli_num_rows($result) > 0) {
    echo "ListCar-Rafid.php";
  } else {
    echo"Add-Rafid.php";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Rafid 1202204021</title>
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
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold; color:white;" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Add-Rafid.php">Mycar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="jumbotron">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center tengah gap-5">
                <div>
                    <h1>
                        Selamat Datang di<br /> Show Room Rafid
                    </h1>
                    <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis<br /> cursus vestibulum,
                        facilisi ac,
                        sed faucibus.</p>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="<?php if (mysqli_num_rows($result) > 0) {
                                      echo "./pages/ListCar-Rafid.php";
                                    } else {
                                      echo "./pages/Add-Rafid.php";
                                    } ?>" class="mycar" type="button">Mycar</a>
                    </div>
                    <span class="d-flex gap-5 align-items-center">
                        <img src="../asset/images/logo-ead 1.png" alt="" style="margin-top: 70px;">
                        <p style="margin-top: 80px; font-size:12px;">Rafid_1202204021</p>
                    </span>
                </div>
                <img src="../asset/images/Image.png" alt="">
            </div>
        </div>
    </section>
</body>

</html>