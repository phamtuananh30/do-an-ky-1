<?php 
require_once('check_admin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Admin</title>
</head>
<body>
    <div id="wrapper">
        <div class="header">
            <nav class="container">
               <marquee behavior="" direction="">Welcome to the admin page</marquee>
            </nav>
           
        </div>
        <div class="main-admin">
                <div class="main-left">
                    <ul>
                        <a href="../index.php" id="logo">
                            <img src="../img/logo.png" alt="">
                        </a>
                            <li><a href="adm_users.php">Admin</a></li>
                            <li><a href="adm_advises.php">Advises</a></li>
                            <li><a href="adm_category.php">Category</a></li>
                            <li><a href="detail_category.php">Detail_Category</a></li>
                            <li><a href="adm_albums.php">Albums</a></li>
                            <?php
                    if(!isset($_SESSION['uid'])){
                            echo "<div class='login'>
                                    <button><a href='../validation/login.php'>Login</a></button>
                                    <button><a href='../validation/register.php'>Register</a></button>
                                  </div>";
                    }
                    else{
                        echo "<div class='login'><button><a href='../validation/logout.php'>Log Out</a></button></div>";
                    }
                    ?>
                    </ul>

                </div>
                <div class="main-right">

                </div>
        </div>
    </div>
   
</body>
</html>