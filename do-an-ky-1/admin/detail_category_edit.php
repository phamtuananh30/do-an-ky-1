<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$thumbnail = $_POST['thumbnail'];
	$content = $_POST['content'];
	$category_id = $_POST['category_id'];

	$sql = "update detail_category set title = '$title', thumbnail = '$thumbnail', content = '$content', category_id = '$category_id' where id = $id";
	execute($sql);

	header('Location: detail_category.php');
	die();
}

$id = $_GET['id'];
$sql = "select * from detail_category where id = $id";
$detail_category = executeResult($sql, true);
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
    <title>Login</title>
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
                        <li>Title</li>
                        <li><input required type="text" name="title"  value="<?=$detail_category['title']?>"></li>
                        <input type="text" name="id" value="<?=$detail_category['id']?>" style="display: none;">
                        <li>Thumbnail</li>
                        <li><input required type="text" name="thumbnail"  value="<?=$detail_category['thumbnail']?>"></li>
                        <li>Content</li>
                        <li><textarea required cols="30" rows="9" style="width:100%; height:200px;" name="content"><?=$detail_category['content']?></textarea></li>
                        <li>Category_id</li>
                        <li><input required type="text" name="category_id"  value="<?=$detail_category['category_id']?>"></li>
                        <li> <button type="submit">Save</button></li>
                    </ul>
               </form>
            </div>
            </div>
    </div>
</body>
</html>