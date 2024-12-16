<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $caption = trim(mysqli_real_escape_string($con, $_POST['caption']));
            $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $query = "INSERT INTO galeri (caption, gambar) VALUES ('$caption', '$gambar')";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
                echo "<script>window.location='../../Galeri.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
                echo "<script>window.location='../../Galeri.php';</script>";
            }
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $caption = trim(mysqli_real_escape_string($con, $_POST['caption']));
            $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $query = "UPDATE galeri SET caption = '$caption', gambar = '$gambar' WHERE ID = '$id'";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
                echo "<script>window.location='../../Galeri.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
                echo "<script>window.location='../../Galeri.php';</script>";
            }
        } else {
            echo "<script>window.location='../../Galeri.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>