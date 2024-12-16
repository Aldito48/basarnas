<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $hal = trim(mysqli_real_escape_string($con, $_POST['hal']));
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            $query = "INSERT INTO akuntabilitas (hal, link) VALUES ('$hal', '$link')";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
                echo "<script>window.location='../../Akuntabilitas.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
                echo "<script>window.location='../../Akuntabilitas.php';</script>";
            }
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $hal = trim(mysqli_real_escape_string($con, $_POST['hal']));
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            $query = "UPDATE arsipan SET hal = '$hal', link = '$link' WHERE ID = '$id'";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
                echo "<script>window.location='../../Akuntabilitas.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
                echo "<script>window.location='../../Akuntabilitas.php';</script>";
            }
        } else {
            echo "<script>window.location='../../Akuntabilitas.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>