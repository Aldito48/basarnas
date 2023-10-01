<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Galeri | Arsip Nasional</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

        <!-- CSS -->
        <link rel="stylesheet" href="CSS/admin.css">

        <!-- Font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    </head>
    <body>
        <!-- Start Sidebar -->
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            <div class="side-bar">
                <header>
                    <div class="close-btn">

                    <i class="fas fa-times"></i>
                    </div>
                    <img src="../assets/img/anri.jpeg" alt="">
                        <h1>Arsip Nasional</h1>
                </header>
                <div class="menu">
                    <div class="item"><a href="dashboard.php"><i class="bi bi-display"></i>Dashboard</a></div>
                        <div class="item">
                            <a class="sub-btn"><i class="bi bi-folder"></i></i>Data Arsip<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">
                                <a href="#" class="sub-item"><i class="bi bi-layers"></i>Arsip 01</a>
                                <a href="#" class="sub-item"><i class="bi bi-layers"></i>Arsip 02</a>
                                <a href="#" class="sub-item"><i class="bi bi-layers"></i>Arsip 03</a>
                            </div>
                        </div>
                        <div class="item"><a href="DaftarP.php"><i class="bi bi-inboxes"></i></i>Daftar Pinjaman</a></div>
                        <div class="item">
                            <a class="sub-btn"><i class="bi bi-calendar3"></i></i>Publikasi<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">
                                <a href="AK.php" class="sub-item"><i class="bi bi-keyboard"></i>Akuntabilitas</a>
                                <a href="Galeri.php" class="sub-item"><i class="bi bi-card-image"></i>Galeri</a>
                            </div>
                        </div>
                        <div class="item"><a href="Peraturan.php"><i class="bi bi-globe"></i></i>Peraturan</a></div>
                        <div class="item"><a href="#"><i class="bi bi-power"></i></i>Logout</a></div>
                </div>
            </div>
        <!-- End Sidebar -->

        <!-- Start content -->
            <section class="main">
                <h1>Galeri</h1>
            </section>
        <!-- End Content -->

        <!-- Bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <!-- Js -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

        <!-- Reasponsive -->
        <script type="text/javascript">
            $(document).ready(function(){
                //jquery for toggle sub menus
                $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
                });

                //jquery for expand and collapse the sidebar
                $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
                });

                $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
                });
            });
        </script>

    </body>
</html>