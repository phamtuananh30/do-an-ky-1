<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pwd = $_POST['pwd'];

	$sql = "update users set name = '$name', email = '$email', phone = '$phone', password = '$pwd' where id = $id";
	execute($sql);

	header('Location: adm_users.php');
	die();
}

$id = $_GET['id'];
$sql = "select * from users where id = $id";
$users = executeResult($sql, true);
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
                    <h1>Edit user</h1>
                    <ul>
                        <li>Full Name</li>
                        <li><input required type="text" name="name"placeholder ="Eg: Phạm Tuấn Anh"  value="<?=$users['name']?>"></li>
                        <input required type="text" name="id" class="form-control" placeholder="Enter id" value="<?=$users['id']?>" style="display: none;">
                        <li>Email/Tài khoản Nhánh</li>
                        <li><input required type="email" name="email" placeholder="Eg: phamtuananh2101@gmail.com" value="<?=$users['email']?>"></li>
                        <li>Phone</li>
                        <li><input required type="tel" name="phone" placeholder="Eg: 0836668336" value="<?=$users['phone']?>"></li>
                        <li> <button type="submit">Save</button></li>
                    </ul>
               </form>
            </div>
            </div>
    </div>
</body>
</html>