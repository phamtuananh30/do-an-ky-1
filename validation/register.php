<?php
session_start();
require_once('dbhelper.php');

if(!empty($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pwd = $_POST['pwd'];

	$sql = "insert into users(name,email, phone, password,created_at,update_at) values ('$name', '$email', '$phone', '$pwd','".date('y/m/d H:i:s')."','".date('y/m/d H:i:s')."')";
	execute($sql);
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
                    <span style=" color: rgba(0, 0, 0, 0.54);">Đã có tài khoản?<a href="login.php">Đăng nhập</a></span>
            </div>
            <div class="form-login-right">
               <form method="post">
                    <h1>Đăng ký</h1>
                    <ul>
                        <li>Full Name</li>
                        <li><input required type="text" name="name"placeholder ="Eg: Phạm Tuấn Anh"></li>
                        <li>Email/Tài khoản Nhánh</li>
                        <li><input required type="email" name="email" placeholder="Eg: phamtuananh2101@gmail.com"></li>
                        <li>Phone</li>
                        <li><input required type="tel" name="phone" placeholder="Eg: 0836668336"></li>
                        <li>Password</li></li>
                        <li><input required id="pass" name="pwd" type="password"></li>
                        <box-icon style="position:absolute;right:290px;top:625px; cursor: pointer;"onclick="myfunction()" name='low-vision'></box-icon>
                        <li> <button type="submit">Register</button></li>
                    </ul>
                    <p style="cursor: pointer;">Không thể nhận SMS?</p>
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