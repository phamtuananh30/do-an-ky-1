<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

if(!empty($_POST)) {
	$title = $_POST['title'];
	$thumbnail = $_POST['thumbnail'];
	$content = $_POST['content'];
	$category_id = $_POST['category_id'];

	$sql = "insert into detail_category(title,thumbnail, content, category_id,created_at,update_at) values ('$title', '$thumbnail', '$content', '$category_id','".date('y/m/d H:i:s')."','".date('y/m/d H:i:s')."')";
	execute($sql);

	header('Location: detail_category.php');
	die();
}

$sql = "select * from category";
$cate_List = executeResult($sql);
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
                        <li>Title</li> 
                        <li><input required type="text" name="title"></li>
                        <li>Thumbnail</li>
                        <li><input required type="text" name="thumbnail"></li>
                        <li>Content</li>
                        <li><input required type="text" name="content"></li>
                        <li>Category_id</li>
                        <select name="category_id" id="">
                            <option value="">--Category--</option>
                            <?php 
                                    foreach($cate_List as $value){
                                    ?>
                                        <option name="" value=" <?php  echo $value['id'];
                                               ?>">
                                               <?php  echo $value['title'];
                                               ?>
                                         </option>
                                         <?php 

                                         
                                    }

                             ?>
                           
                        </select>
                        <li> <button type="submit">Save</button></li>
                    </ul>
               </form>
            </div>
            </div>
    </div>
    
</body>
</html>