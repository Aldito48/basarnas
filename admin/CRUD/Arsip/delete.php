<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        $query = "DELETE FROM arsipan WHERE ID = '$_GET[id]'";
        if (mysqli_query($con, $query)) {
            echo "<script>alert('Data berhasil dihapus!');</script>";
            echo "<script>window.location='../../Arsip.php';</script>";
        } else {
            echo "<script>alert('Data gagal dihapus!');</script>";
            echo "<script>window.location='../../Arsip.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>