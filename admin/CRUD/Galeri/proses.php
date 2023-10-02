<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $caption = trim(mysqli_real_escape_string($con, $_POST['caption']));
            $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            mysqli_query($con, "INSERT INTO galeri (ID, caption, gambar) VALUES ('', '$caption', '$gambar')") or die (mysqli_error($con));
            echo "<script>window.location='../../Galeri.php';</script>";
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $caption = trim(mysqli_real_escape_string($con, $_POST['caption']));
            $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            mysqli_query($con, "UPDATE galeri SET caption = '$caption', gambar = '$gambar' WHERE ID = '$id'") or die (mysqli_error($con));
            echo "<script>window.location='../../Galeri.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>