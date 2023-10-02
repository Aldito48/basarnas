<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        mysqli_query($con, "DELETE FROM peminjaman WHERE ID = '$_GET[id]'") or die (mysqli_error($con));
        echo "<script>window.location='../../Peminjaman.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>