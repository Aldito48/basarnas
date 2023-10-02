<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
         if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $np = trim(mysqli_real_escape_string($con, $_POST['nama_peminjam']));
            $email = trim(mysqli_real_escape_string($con, $_POST['email']));
            $hp = trim(mysqli_real_escape_string($con, $_POST['no_hp']));
            $ja = trim(mysqli_real_escape_string($con, $_POST['jenis_arsip']));
            $ka = trim(mysqli_real_escape_string($con, $_POST['kode_arsip']));
            $jumlah = trim(mysqli_real_escape_string($con, $_POST['jumlah']));
            $pinjam = trim(mysqli_real_escape_string($con, $_POST['tgl_pinjam']));
            $balik = trim(mysqli_real_escape_string($con, $_POST['tgl_kembali']));
            $status = $_POST['status'];
            mysqli_query($con, "UPDATE peminjaman SET nama_peminjam = '$np', email = '$email', no_hp = '$hp', jenis_arsip = '$ja', kode_arsip = '$ka', jumlah = '$jumlah', tgl_pinjam = '$pinjam', tgl_kembali = '$balik', status = '$status' WHERE ID = '$id'") or die (mysqli_error($con));
            echo "<script>window.location='../../Peminjaman.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>