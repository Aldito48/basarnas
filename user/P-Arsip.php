<?php
  require_once "../config/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CDNS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/CSS/styleP-Arsip.css" />

    <title>Layanan | Basarnas</title>
  </head>
  <body>
    <!-- Start Navbar -->
      <header>
      <a href="" class="logo"><img src="../assets/img/sar nasional.jpeg" alt="Logo" width="40" height="40" class="d-inline-block rounded-circle" /> <img src="../assets/img/basarnas.png" alt="Logo" width="40" height="42" class="d-inline-block" /> Basarnas</a>
        <div class="navigation">
          <ul class="menu">
            <div class="close-btn"></div>
            <li class="menu-item"><a href="Beranda.php">Beranda</a></li>
            <li class="menu-item">
              <a class="sub-btn">Profil <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li class="sub-item"><a href="profil.php#">Visi & Misi</a></li>
                  <li class="sub-item"><a href="profil.php#page">Tugas Pokok dan Fungsi</a></li>
                  <li class="sub-item"><a href="profil.php#tree">Struktur Organisasi</a></li>
                  <li class="sub-item"><a href="profil.php#info">Profil Pengolah</a></li>
                </ul>
            </li>
            <li class="menu-item">
              <a class="sub-btn">Publikasi <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li class="sub-item"><a href="AK.php">Akuntabilitas Kinerja</a></li>
                  <li class="sub-item"><a href="Galeri.php">Galeri</a></li>
                </ul>
            </li>
            <li class="menu-item">
              <a class="sub-btn">Layanan <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li class="sub-item"><a href="P-Arsip.php">Peminjaman Arsip</a></li>
                  <li class="sub-item"><a href="D-Arsip.php">Daftar Arsip</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="Peraturan.php">Peraturan</a></li>
            <li class="menu-item"><a href="Hubungi-kami.php">Hubungi Kami</a></li>
          </ul>
        </div>
        <div class="menu-btn"></div>
      </header>
    <!-- End Navbar -->

    <!-- Content (Start) -->
      <section id="content">
        <form method="POST">
            <div class="wrapper">
                <div class="title">
                  Peminjaman Arsip
                </div>
                <div class="form">
                    <div class="input_field">
                        <label for="nama_peminjam">Nama Peminjam</label>
                        <input type="text" id="nama_peminjam" name="nama_peminjam" class="input" placeholder="Nama Peminjam..." required autofocus>
                    </div>
                    <div class="input_field">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" class="input" placeholder="E-mail..." required autofocus>
                    </div>
                    <div class="input_field">
                        <label for="no_hp">No. Hp</label>
                        <input type="text" id="no_hp" name="no_hp" class="input" placeholder="No. Hp..." required autofocus>
                    </div>
                    <div class="input_field">
                        <label for="jenis_arsip">Jenis Arsip</label>
                        <input type="text" id="jenis_arsip" name="jenis_arsip" class="input" placeholder="Jenis Arsip..." required>
                    </div>
                    <div class="input_field">
                        <label for="kode_arsip">Kode Arsip</label>
                        <input type="text" id="kode_arsip" name="kode_arsip" placeholder="Kode Arsip..." class="input" required>
                    </div>
                    <div class="input_field">
                        <label for="jumlah">Jumlah Arsip</label>
                        <input type="number" id="jumlah" name="jumlah" class="input" required>
                    </div>
                    <div class="input_field">
                        <label for="tgl_pinjam">Tanggal Pinjam</label>
                        <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="input" required>
                    </div>
                    <div class="input_field">
                        <label for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" id="tgl_kembali" name="tgl_kembali" class="input" required>
                    </div>
                    <div class="input_field">
                        <input type="submit" value="Kirim" class="btn" id="Kirim" name="Kirim">
                    </div>
                </div>
            </div>
        </form>
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

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $np = $_POST["nama_peminjam"];
            $email = $_POST["email"];
            $hp = $_POST["no_hp"];
            $ja = $_POST["jenis_arsip"];
            $ka = $_POST["kode_arsip"];
            $jumlah = $_POST['jumlah'];
            $pinjam = $_POST["tgl_pinjam"];
            $balik = $_POST["tgl_balik"];
    
            $to = "arsipariskansar@gmail.com";
            $subject = "Pesan Ajuan Peminjaman";
            $message = "Nama Peminjam: $np\nE-mail: $email\nNo. Hp: $hp\nJenis Arsip: $ja\nKode Arsip: $ka\nJumlah: $jumlah\nTanggal Peminjaman: $pinjam\nTanggal Pengembalian: $balik";
    
            $headers = "From: $email";
    
            if (mail($to, $subject, $message, $headers)) {
                echo "<script>alert('Berhasil Mengirim Pesan');</script>";
            } else {
                echo "<script>alert('Gagal Mengirim Pesan');</script>";
            }
          }
        ?>
      </section>
    <!-- Content (End) -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- CDNS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Toggle -->
    <script type="text/javascript">
      $(document).ready(function(){
        // toggle sub-menus
        $(".sub-btn").click(function(){
          $(this).next(".sub-menu").slideToggle();
        });
      });

      // Responsive Nav Menu
      var menu = document.querySelector(".menu");
      var menuBtn = document.querySelector(".menu-btn");
      var closeBtn = document.querySelector(".close-btn");

      menuBtn.addEventListener("click", () => {
        menu.classList.add("active")
      })
      closeBtn.addEventListener("click", () => {
        menu.classList.remove("active")
      })
    </script>
  </body>
</html>
