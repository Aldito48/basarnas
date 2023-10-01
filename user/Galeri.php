<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CDNS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/CSS/styleGaleri.css" />
    <link rel="stylesheet" href="../assets/CSS/lightbox.css"/>
    

    <title>Publikasi | Basarnas</title>
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

    <!-- Start Gallery -->
      <section id="galeri">

      <div class="container"> 
        <h1>Dokumentasi Arsip Kantor Pencarian dan Pertolongan Kelas A Medan</h1>
        <div class="top-content">
          <h3>Foto Galeri</h3>
          <label>DOKUMENTASI GALERI</label>
        </div>
        <div class="photo-gallery">
          <a href="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg" data-lightbox="models" data-title="Caption1">
            <div class="pic place">
                <img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg">
            </div>
          </a>
          <a href="https://img.freepik.com/premium-photo/beautiful-mountain-range-reflects-tranquil-water-generative-ai_188544-9117.jpg" data-lightbox="models" data-title="Caption2">
            <div class="pic place">
              <img src="https://img.freepik.com/premium-photo/beautiful-mountain-range-reflects-tranquil-water-generative-ai_188544-9117.jpg">
            </div>
          </a>
          <a href="https://img.freepik.com/free-photo/natures-beauty-reflected-tranquil-mountain-waters-generative-ai_188544-7867.jpg" data-lightbox="models" data-title="Caption3">
            <div class="pic place">
              <img src="https://img.freepik.com/free-photo/natures-beauty-reflected-tranquil-mountain-waters-generative-ai_188544-7867.jpg">
            </div>
          </a>
          <a href="https://img.freepik.com/premium-photo/foggy-mountain-lake-with-reflections-surrounding-peaks-created-with-generative-ai_419341-59257.jpg" data-lightbox="models" data-title="Caption4">
            <div class="pic place">
              <img src="https://img.freepik.com/premium-photo/foggy-mountain-lake-with-reflections-surrounding-peaks-created-with-generative-ai_419341-59257.jpg">
            </div>
          </a>
        </div>
      </div>
      </section>
    <!-- End Gallery -->


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Lightbox -->
    <script src="../assets/js/lightbox-plus-jquery.js"></script>
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
