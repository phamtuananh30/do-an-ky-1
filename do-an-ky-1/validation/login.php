<?php

    require_once('dbhelper.php');

if(!empty($_POST)) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "select * from users where email = '$email' and password = '$pwd'";
	$user = executeResult($sql, true);

	if($user != null) {
    session_start();

		//login thanh cong
		$_SESSION['cUser'] = $user;
        $_SESSION['uid'] = $user['id'];
        header("Location:../admin/admin.php");
	}
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
            <div class="login-right-top">
                    <span style=" color: rgba(0, 0, 0, 0.54);">Chưa đăng ký? <a href="register.php">Đăng ký ngay</a></span>
            </div>
            <div class="form-login-right">
               <form action="" method="post">
                    <h1>Đăng nhập</h1>
                    <ul>
                        <li>Email/Tài khoản Nhánh</li>
                        <li><input required name="email" type="email" placeholder="Eg: phamtuananh2101@gmail.com"></li>
                        <li>Password </li>
                         <li><input required name="pwd" id="pass" type="password"></li>
                       <box-icon style="position:absolute;right:290px;top:415px; cursor: pointer;"onclick="myfunction()" name='low-vision'></box-icon>
                        <li><button type="submit">Login</button></li>
                    </ul>
                    <p style="cursor: pointer;">Quên mật khẩu?</p>
               </form>
            </div>
            </div>
    </div>
</body>
<script type="text/javascript">
		var x = true;
		function myfunction(){
			if(x){
				document.getElementById('pass').type = "text";
				x = false;
			}else{
				document.getElementById('pass').type = "password";
				x = true;
			}
		}
	</script>
</html>