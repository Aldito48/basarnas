<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $hal = trim(mysqli_real_escape_string($con, $_POST['hal']));
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            mysqli_query($con, "INSERT INTO akuntabilitas (ID, hal, link) VALUES ('', '$hal', '$link')") or die (mysqli_error($con));
            echo "<script>window.location='../../Akuntabilitas.php';</script>";
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $hal = trim(mysqli_real_escape_string($con, $_POST['hal']));
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            mysqli_query($con, "UPDATE arsipan SET hal = '$hal', link = '$link' WHERE ID = '$id'") or die (mysqli_error($con));
            echo "<script>window.location='../../Akuntabilitas.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>