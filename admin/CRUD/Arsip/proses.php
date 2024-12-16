<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            $query = "INSERT INTO arsipan (jenis, link) VALUES ('$jenis', '$link')";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
                echo "<script>window.location='../../Arsip.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
                echo "<script>window.location='../../Arsip.php';</script>";
            }
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            $query = "UPDATE arsipan SET jenis = '$jenis', link = '$link' WHERE ID = '$id'";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
                echo "<script>window.location='../../Arsip.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
                echo "<script>window.location='../../Arsip.php';</script>";
            }
        } else {
            echo "<script>window.location='../../Arsip.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>