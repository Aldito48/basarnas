<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $tentang = trim(mysqli_real_escape_string($con, $_POST['tentang']));
            $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            $query = "INSERT INTO peraturan (tentang, file) VALUES ('$tentang', '$file')";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
                echo "<script>window.location='../../Peraturan.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
                echo "<script>window.location='../../Peraturan.php';</script>";
            }
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $tentang = trim(mysqli_real_escape_string($con, $_POST['tentang']));
            $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            $query = "UPDATE peraturan SET tentang = '$tentang', file = '$file' WHERE ID = '$id'";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
                echo "<script>window.location='../../Peraturan.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
                echo "<script>window.location='../../Peraturan.php';</script>";
            }
        } else {
            echo "<script>window.location='../../Peraturan.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>