<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            mysqli_query($con, "INSERT INTO arsipan (ID, jenis, link) VALUES ('', '$jenis', '$link')") or die (mysqli_error($con));
            echo "<script>window.location='../../Arsip.php';</script>";
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            mysqli_query($con, "UPDATE arsipan SET jenis = '$jenis', link = '$link' WHERE ID = '$id'") or die (mysqli_error($con));
            echo "<script>window.location='../../Arsip.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>