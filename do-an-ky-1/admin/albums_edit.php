<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	$url = $_POST['url'];
	$describes = $_POST['describes'];

	$sql = "update albums set url = '$url', describes = '$describes' where id = $id";
	execute($sql);

	header('Location: adm_albums.php');
	die();
}

$id = $_GET['id'];
$sql = "select * from albums where id = $id";
$albums_category = executeResult($sql, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/lg.css">
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <title>Edit</title>
</head>
<body>
    <div id="wrapper">
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
                    ?>
                    </ul>

                </div>
        <div class="main-right">
            <div class="form-login-right">
               <form method="post">
                    <h1>Edit</h1>
                    <ul>
                        <input required type="text" name="id" value="<?=$albums_category['id']?>" style="display: none;">
                        <li>Url</li>
                        <li><input required type="text" name="url"  value="<?=$albums_category['url']?>"></li>
                        <li>Describes</li>
                        <li><textarea required cols="30" rows="9" style="width:100%;resize:none;font-size:18px;" name="describes"><?=$albums_category['describes']?></textarea></li>
                        <li> <button type="submit">Save</button></li>
                    </ul>   
               </form>
            </div>
            </div>
    </div>
</body>
</html>