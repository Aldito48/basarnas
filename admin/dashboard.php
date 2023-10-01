<?php
    require_once "../config/config.php";
?>
<!DOCTYPE html>
<htmL>
    <head>
        <title>ANRI | ADMIN</title>
        <meta charset="utf-8"/>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/styleDashboard.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Halo Yang Sedang Login!</h1>
        <p>Semoga hari mu menyenangkan :)</p>
        <?php
            echo "<a href=\"../auth/logout.php\">"
        ?>
        <i class="bx bx-log-out" id="log_out"></i>
        <?php
            "</a>";
        ?>
    </body>
</htmL>