<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	$title = $_POST['title'];

	$sql = "update category set title = '$title' where id = $id";
	execute($sql);

	header('Location: adm_category.php');
	die();
}

$id = $_GET['id'];
$sql = "select * from category where id = $id";
$category = executeResult($sql, true);
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
                        <input required type="text" name="id" value="<?=$category['id']?>" style="display: none;">
                        <li>title</li>
                        <li><input required type="text" name="title"  value="<?=$category['title']?>"></li>
                        <li> <button type="submit">Save</button></li>
                    </ul>   
               </form>
            </div>
            </div>
    </div>
</body>
</html>