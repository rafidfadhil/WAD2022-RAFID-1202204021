<!-- list array -->
<?php
$credit = "Rafid_1202204021";

$tempat = [
    [
        "gdg" => "Toyota Rush",
        "yar" => 200000,
        "img" => "IMG/Rush.png"
    ],
    [
        "gdg" => "BMW M1",
        "yar" => 350000,
        "img" => "img/mobil.png"
    ],
    [
        "gdg" => "Marchedes",
        "yar" => 500000,
        "img" => "img/Marchedes.png"
    ],
];
// list array end

// variable
$event = $_POST["event"]." ".$_POST["time"];
$starev = date("d-m-Y H:i", strtotime($event));
$endev = date("d-m-Y H:i", strtotime($event)+60*60*24*$_POST["days"]);
$gedung = $_POST["gedung"];
$pone = $_POST["pone"];

$serprice = 0; 
if (isset($_POST["ser"])){
    foreach ($_POST["ser"] as $ser ){
        if ($ser == "Helt Protocol"){
            $serprice += 100000;
        }
        if ($ser == "Driver"){
            $serprice += 250000;
        }
        if ($ser == "Fuel filled"){
            $serprice += 100000;
        }
    }
}
else{
    $serprice += 0;
}

?>
<!-- variable end -->
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
                            <a class="nav-link" href="RAFID_HOME.PHP">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="RAFID_BOOKING.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="text-align: center;">
            <div class="m-2">
            <p class="m-0" style="font-size:30px">Thank you <?php echo $credit;?> for Reserving</p>
                <p class="m-0" style="font-size:25px">Please double check your reservation detail</p>
            </div>
        </div>
        <!-- Navbar end -->

        <!-- invoice -->
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Building Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <tr>
                        <td><?php echo rand (8000000, 10000000);?></td>
                        <td><?php echo $credit; ?></td>
                        <td><?php echo $starev?></td>
                        <td><?php echo $endev?></td>
                        <td><?php echo $gedung?></td>
                        <td><?php echo $pone?></td>
                        <td>
                            <?php
                                if (isset($_POST["ser"])){
                                    foreach ($_POST["ser"] as $ser ){
                                        echo "<li>$ser</li>";
                                    }
                                }
                                else{
                                    echo "no service";
                                }
                            ?>
                        </td>
                        <td>Rp.
                            <?php
                                if ($_POST["gedung"] == $tempat[0]["gdg"]){
                                    echo ($_POST["days"]*$tempat[0]["yar"])+$serprice;
                                }
                                else if ($_POST["gedung"] == $tempat[1]["gdg"]){
                                    echo ($_POST["days"]*$tempat[1]["yar"])+$serprice;
                                }
                                else if ($_POST["gedung"] == $tempat[2]["gdg"]){
                                    echo ($_POST["days"]*$tempat[2]["yar"])+$serprice;
                                }
                                else{
                                    echo "0";
                                }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- invoice end -->

        <!-- footer -->
        <footer class="fixed-bottom text-center pt-3 bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by: <?php echo $credit;?>
            </p>
        </footer>
        <!-- footerend -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>