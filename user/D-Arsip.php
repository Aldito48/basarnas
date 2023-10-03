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
    <link rel="stylesheet" href="../assets/CSS/styleD-Arsip.css" />

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/sar.ico" type="image/x-icon">

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
              <a class="sub-btn"">Layanan <i class="fas fa-angle-down"></i></a>
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

    <!-- Start Arsip -->
      <section id="arsip"> 
        <main class="table">
          <section class="table__header">
            <h1>Daftar Arsip</h1>
          </section>
          <section class="table__body">
              <table>
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Jenis Arsip</th>
                          <th style="text-align:center;"><i class="fa-solid fa-eye"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <?php
                          $no = 1;
                          $query = "SELECT * FROM arsipan";
                          $result = mysqli_query($con, $query);
      
                          if (mysqli_num_rows($result) > 0) {
                            while ($data = mysqli_fetch_array($result)) {
                      ?>
                              <tr>
                                  <td align="center"><?=$no++?>.</td>
                                  <td align="center"><?=$data['jenis']?></td>
                                  <td><p class="status"><a href="<?=$data['link']?>" target="_blank">Lihat</a></p></td>
                              </tr>
                      <?php
                            }
                          } else{
                              echo "Belum Ada Data Arsip.";
                          }
                      ?>
                  </tr>
                  </tbody>
              </table>
          </section>
        </main>
      </section>
    <!-- End Arsip -->

    <!-- Start Footer -->
      <footer class="footer-distributed">
        <div class="footer-left">
            <h3>ARSIPARIS KANSAR<span> MEDAN</span></h3>
            <p class="footer-links">
                <a href="Beranda.php">Beranda</a>
                |
                <a href="Profil.php">Profil</a>
                |
                <a href="Hubungi-Kami.php">Hubungi Kami</a>
                |
                <a href="P-Arsip.php">Layanan</a>
            </p>
            <p class="footer-company-name">Copyright © 2021 <strong>Basarnas Medan</strong> All rights reserved</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="bi bi-geo-alt-fill"></i>
                <p><span>Jl. Letjen Jamin Ginting No. 99 Kelurahan Sidomulyo, <br>Kecamatan Medan Tuntungan, Kota Medan</span>
                Sumatera Utara</p>
            </div>
            <div>
                <i class="bi bi-envelope-fill"></i>
                <p><a href="mailto:arsipariskansarmedan@gmail.com">arsipariskansarmedan@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Tentang Kami</span>
                  Basarnas merupakan leading sektor resmi milik Indonesia pada operasi Search and Rescue (SAR). 
                  Dengan posisi tersebut, perannya begitu besar pada level nasional, bahkan internasional. 
                  Tujuan utama kehadiran Basarnas adalah menyediakan layanan pencarian dan pertolongan (SAR)
                  bagi seluruh warga dalam berbagai musibah.
            </p>
        </div>
      </footer>
    <!-- End Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- CDNS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Arsip -->
    <script src="../assets/js/script.js"></script>

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
