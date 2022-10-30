<!-- list array -->
<?php
$credit = "Rafid_1202204021";

$tempat = [
    [
        "tp" => "Toyota Rush",
        "yar" => 200000,
        "img" => "IMG/Rush.png"
    ],
    [
        "tp" => "BMW M1",
        "yar" => 350000,
        "img" => "img/mobil.png"
    ],
    [
        "tp" => "Marchedes",
        "yar" => 500000,
        "img" => "img/Marchedes.png"
    ],
]

?>
<!-- list array end -->

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Logo  -->
        <link href="IMG/logo-ead 1.png" rel="icon" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>RENTAL MOBIL ESD</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
            
                <div class="collapse navbar-collapse justify-content-md-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="RAFID_HOME.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="RAFID_BOOKING.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- Welcome -->
        <div>
            <p class="m-2" style="text-align: center; font-size: 25px">WELCOME TO EAD RENT</p>
        </div>

        <div class="container bg-black">
            <p class="p-1" style="text-align: center; color: white">Find your best deal, here!</p>
        </div>
        <!-- Welcome End -->

        <!-- card -->
        <div class="container">
            <div class="d-flex justify-content-around">
                <div class="col-3 m-1">
                    <div class="card shadow-sm rounded" >
                        <img src="<?php echo $tempat[0]["img"];?>" alt="">
                        <div class="m-3">
                            <p class="m-0" style="font-size: 20px"><?php echo $tempat[0]["tp"];?></p>
                            <p class="m-0" style="color: grey">Rp.<?php echo $tempat[0]["yar"];?> / Days</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold;">8 Kursi</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold">1500 CC</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold">Manual</p>
                        <div class="text-center bg-light">
                            <button class="m-2 btn btn-primary" type="submit"><a href="RAFID_BOOKING.php?img=<?= $tempat[0]["img"];?>&tp=<?= $tempat[0]["tp"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-1 ms-2 me-2">
                    <div class="card shadow-sm rounded" >
                        <img src="<?php echo $tempat[1]["img"];?>" alt="">
                        <div class="m-3">
                            <p class="m-0" style="font-size: 20px"><?php echo $tempat[1]["tp"];?></p>
                            <p class="m-0" style="color: grey">Rp.<?php echo $tempat[1]["yar"];?> / Days</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold;">5 Kursi</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold;">2500 CC</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold;">Matic</p>
                        <div class="text-center bg-light">
                            <button class="m-2 btn btn-primary" type="submit"><a href="RAFID_BOOKING.php?img=<?= $tempat[1]["img"];?>&tp=<?= $tempat[1]["tp"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-1">
                    <div class="card shadow-sm rounded" >
                        <img src="<?php echo $tempat[2]["img"];?>" alt="">
                        <div class="m-3">
                        <p class="m-0" style="font-size: 20px"><?php echo $tempat[2]["tp"];?></p>
                            <p class="m-0" style="color: grey">Rp.<?php echo $tempat[2]["yar"];?> / Days</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold;">5 Kursi</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold;">2700 CC</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: blue; font-weight: bold">Manual</p>
                        <div class="text-center bg-light">
                            <button class="m-2 btn btn-primary" type="submit"><a href="RAFID_BOOKING.php?img=<?= $tempat[2]["img"];?>&tp=<?= $tempat[2]["tp"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card end -->
        
        <!-- footer  -->
        <footer class="fixed-bottom text-center pt-3 bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by: <?php echo $credit;?>
            </p>
        </footer>
        <!-- footer end -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>