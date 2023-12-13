<?php 
    session_start();
    if($_SESSION['uid'] != 1){
        header('Location: ../index.php');
        die();
    }
?>