<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        mysqli_query($con, "DELETE FROM peraturan WHERE ID = '$_GET[id]'") or die (mysqli_error($con));
        echo "<script>window.location='../../Peraturan.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>