<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	$url = $_POST['url'];
	$describes = $_POST['describes'];

	$sql = "insert into albums(id,url, describes) values ('$id', '$url', '$describes'";
	execute($sql);

	header('Location: adm_albums.php');
	die();
}
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
    <title>Add</title>
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
                    <h1>Add</h1>
                    <ul>
                        <li>ID</li> 
                        <li><input required type="text" name="id"></li>
                        <li>Url</li>
                        <li><input required type="text" name="url"></li>
                        <li>Describes</li>
                        <li><input required type="text" name="describes"></li>
                        <li> <button type="submit">Save</button></li>
                    </ul>
               </form>
            </div>
            </div>
    </div>
    
</body>
</html>