<?php
    require_once "../config/config.php";
    if(isset($_SESSION['Username'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Peraturan | Arsip Nasional</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

        <!-- CSS -->
        <link rel="stylesheet" href="CSS/peraturan.css">

        <!-- Font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <!-- favicon -->
        <link rel="shortcut icon" href="../assets/img/anri.ico" type="image/x-icon">
        
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
                    <div class="item"><a href="Arsip.php"><i class="bi bi-folder"></i>Data Arsip</a></div>
                    <div class="item"><a href="Peminjaman.php"><i class="bi bi-inboxes"></i></i>Daftar Pinjaman</a></div>
                    <div class="item">
                        <a class="sub-btn"><i class="bi bi-calendar3"></i></i>Publikasi<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="Akuntabilitas.php" class="sub-item"><i class="bi bi-keyboard"></i>Akuntabilitas</a>
                            <a href="Galeri.php" class="sub-item"><i class="bi bi-card-image"></i>Galeri</a>
                        </div>
                    </div>
                    <div class="item"><a href="Peraturan.php"><i class="bi bi-globe"></i></i>Peraturan</a></div>
                    <div class="item"><a href="../auth/logout.php"><i class="bi bi-power"></i></i>Logout</a></div>
                </div>
            </div>
        <!-- End Sidebar -->

        <!-- Start content -->
            <section class="main">
                <h1>Peraturan</h1>
                <div class="page">
                    <a href="CRUD/Peraturan/create.php">Tambahkan</a>
                </div>
                <div class="container">
                    <div class="data">
                        <table cellspacing="5px">
                            <thead>
                                <tr>
                                    <th class="no">NO</th>
                                    <th class="tentang">TENTANG</th>
                                    <th class="file">FILE</th>
                                    <th class="crud"><i class="fa-solid fa-gear"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $no = 1;
                                        $query = "SELECT * FROM peraturan";
                                        $result = mysqli_query($con, $query);
                    
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                                <tr>
                                                    <td align="center"><?=$no++?>.</td>
                                                    <td align="center"><?=$data['tentang']?></td>
                                                    <td align="center">
                                                        <a href="data:application/pdf;base64,<?= base64_encode($data['file']); ?>" target="_blank" download="<?=$data['tentang']?>.pdf">
                                                            Download PDF
                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <a href="CRUD/Peraturan/update.php?id=<?=$data['ID']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="CRUD/Peraturan/delete.php?id=<?=$data['ID']?>" onclick="return confirm('Apakah Yakin Ingin Dihapus?')"><i class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                    <?php
                                            }
                                        } else{
                                            echo "Belum Ada Peraturan.";
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        <!-- End Content -->

        <!-- Bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

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
<?php
    } else{
        echo "<script>window.location='../auth/login.php';</script>";
    }
?>