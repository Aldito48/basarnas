<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $tentang = trim(mysqli_real_escape_string($con, $_POST['tentang']));
            $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            mysqli_query($con, "INSERT INTO peraturan (ID, tentang, file) VALUES ('', '$tentang', '$file')") or die (mysqli_error($con));
            echo "<script>window.location='../../Peraturan.php';</script>";
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $tentang = trim(mysqli_real_escape_string($con, $_POST['tentang']));
            $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            mysqli_query($con, "UPDATE peraturan SET tentang = '$tentang', file = '$file' WHERE ID = '$id'") or die (mysqli_error($con));
            echo "<script>window.location='../../Peraturan.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>