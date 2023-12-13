<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

$user_id = $_GET['user_id'];
if(isset($user_id)){
    $sql = "delete from users where id = $user_id";
    execute($sql);
    header('Location: adm_users.php');
    die();
}


$advises_id = $_GET['advises_id'];
if(isset($advises_id)){
    $sql = "delete from advises where id = $advises_id";
    execute($sql);
    header('Location: adm_advises.php');
    die();
}

$cate_id = $_GET['cate_id'];
if(isset($cate_id)){
    $sql = "delete from category where id = $cate_id";
    execute($sql);
    header('Location: adm_category.php');
    die();
}

$detai_id = $_GET['detai_id'];
if(isset($detai_id)){
  $sql = "delete from detail_category where id = $detai_id";
  execute($sql);
  header('Location: detail_category.php');
    die();
}


$albums_id = $_GET['albums_id'];
if(isset($albums_id)){
 $sql = "delete from albums where id = $albums_id";
execute($sql);
header('Location: adm_albums.php');
    die();
}
