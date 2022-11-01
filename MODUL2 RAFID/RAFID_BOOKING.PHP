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
<!-- list array -->
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
        <!-- navbar -->
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
        <!-- navbar end -->

        <!-- welcome -->
        <div class="mt-2 mb-2 container bg-dark">
            <p class="p-1" style="text-align: center; color: white">Resent your car now!</p>
        </div>
        <!-- Welcome -->

        <div class="container card shadow-sm">
            <div class="d-flex justify-content-around">
                <!-- Gambar mobil -->
                <div class="col-6 ps-5 pe-5 d-flex align-items-center">
                    <?php
                        if(isset($_POST["img"])){
                            ?><img class="" width="100%" src="<?= $_GET["img"];?>" alt="">
                    <?php
                        }else{
                            ?><img width="100%" src="IMG/Rush.png" alt="">
                    <?php }?>
                </div>
                <!-- Gambar mobil end -->

                <!-- form -->
                <div class="col-6 ps-5 pe-5">
                    <ul type="none">
                        <form action="RAFID_MYBOOKING.php" method="get">
                            <li class="m-1">
                                <label for="nama">Name</label><br>
                                <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $credit?>" readonly>
                            </li>
                            <li class="m-1">
                                <label for="event">Book Date</label><br>
                                <input class="form-control" type="date" name="event" id="event">
                            </li>
                            <li class="m-1">
                                <label for="time">Start Time</label><br>
                                <input class="form-control" type="time" name="time" id="time">
                            </li>
                            <li class="m-1">
                                <label for="days">Duration (Days)</label><br>
                                <input class="form-control" type="number" name="days" id="days" min="1" value="1">
                            </li>
                            <li class="m-1">
                                <label for="tipe">Car Type</label>
                                    <select class="form-select" name="tipe" id="tipe">
                                        <option selected>Choose...</option>
                                        <?php foreach ($tempat as $tmp):?>
                                            <?php
                                                if($tmp["tp"]==$_GET["tp"]){
                                                    ?><option selected="selected" value="<?= $tmp["tp"];?>"><?= $tmp["tp"];?></option>
                                            <?php
                                                }else{
                                                    ?><option value="<?= $tmp["tp"];?>"><?=$tmp["tp"];?></option>
                                            <?php }?>
                                        <?php endforeach; ?>
                                    </select>
                            </li>
                            <li class="m-1">
                                <label for="pone">Phone Number</label><br>
                                <input class="form-control" type="number" name="pone" id="pone" min="0">
                            </li>
                            <li class="m-1">
                                <label for="service">Add Service (s)</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="ser[]" value="Helt Protocol" id="Helt Protocol"><label class="form-check-label" for="Helt Protocol">Helt Protocol / Rp 100000</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="ser[]" value="Driver" id="Driver"><label class="form-check-label" for="Driver">Driver / Rp 250000</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="ser[]" value="Fuel filled System" id="Fuel filled"><label class="form-check-label" for="Fuel filled">Fuel filled / Rp 100000</label><br>
                            </li>
                            <li class="text-center">
                                <button class="btn btn-success justify-content-around" type="submit" style="width: 510px;">Book</button>
                            </li>
                        </form>
                    </ul>
                </div>
                <!-- form end -->
            </div>
        </div>

        <!-- footer -->
        <footer class="fixed-bottom text-center pt-3 bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by: <?php echo $credit;?>
            </p>
        </footer>
        <!-- footer end -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>