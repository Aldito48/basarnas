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

        <title>Akuntabilitas Kinerja | Arsip Nasional</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

        <!-- CSS -->
        <link rel="stylesheet" href="CSS/akuntabilitas.css">

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
            <div class="main">
                <h1>Akuntabilitas Kinerja</h1>
                <div class="page">
                    <a href="CRUD/Akuntabilitas/create.php">Tambahkan</a>
                </div>
                <div class="container">
                    <div class="data">
                        <table>
                            <thead>
                                <tr> 
                                    <th class="no">NO</th>
                                    <th class="hal">HAL</th>
                                    <th class="link">STATUS</th>
                                    <th class="crud"><i class="fa-solid fa-gear"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $no = 1;
                                        $query = "SELECT * FROM akuntabilitas";
                                        $result = mysqli_query($con, $query);
                    
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                                <tr>
                                                    <td align="center"><?=$no++?>.</td>
                                                    <td align="center"><?=$data['hal']?></td>
                                                    <td><a href="<?=$data['link']?>" target="_blank">Open</a></td>
                                                    <td align="center">
                                                        <a href="CRUD/Akuntabilitas/update.php?id=<?=$data['ID']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="CRUD/Akuntabilitas/delete.php?id=<?=$data['ID']?>" onclick="return confirm('Hapus?')"><i class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                    <?php
                                            }
                                        } else{
                                            echo "Belum Ada Data Akuntabilitas.";
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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