<?php 
    require "connector.php";

    $id= $_GET["id"];

    function hapus($id) {
        global $conn_user;
        mysqli_query($conn_user, "DELETE FROM showroom_rafid_table WHERE id_mobil = $id");
        return mysqli_affected_rows($conn_user);   
    }
    if(hapus($id) > 0){
        echo "
                <script> 
                    alert('data berhasil dihapus');
                    document.location.href = '../pages/ListCar-Rafid.php';  
                </script>";
    } else {
        echo "
            <script> 
                alert('data tidak berhasil dihapus');
                document.location.href = '../pages/ListCar-Rafid.php';  
            </script>";
    }

?>