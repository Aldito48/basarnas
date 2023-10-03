<?php
    if(isset($_POST['Kirim'])){
        $np = trim(mysqli_real_escape_string($con, $_POST['nama_peminjam']));
        $email = trim(mysqli_real_escape_string($con, $_POST['email']));
        $hp = trim(mysqli_real_escape_string($con, $_POST['no_hp']));
        $ja = trim(mysqli_real_escape_string($con, $_POST['jenis_arsip']));
        $ka = trim(mysqli_real_escape_string($con, $_POST['kode_arsip']));
        $jumlah = trim(mysqli_real_escape_string($con, $_POST['jumlah']));
        $pinjam = trim(mysqli_real_escape_string($con, $_POST['tgl_pinjam']));
        $balik = trim(mysqli_real_escape_string($con, $_POST['tgl_kembali']));
        mysqli_query($con, "INSERT INTO peminjaman (ID, nama_peminjam, email, no_hp, jenis_arsip, kode_arsip, jumlah, tgl_pinjam, tgl_kembali) VALUES ('', '$np', '$email', '$hp', '$ja', '$ka', '$jumlah', '$pinjam', '$balik')") or die (mysqli_error($con));
        echo "<script>window.location='P-Arsip.php';</script>";
    }
?>