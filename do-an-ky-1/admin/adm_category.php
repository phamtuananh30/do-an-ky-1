<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

$sql = "select * from category";
$cate_List = executeResult($sql);
if(!empty($_POST)) {
	$title = $_POST['title'];
	$sql = "insert into category(title) values ('$title')";
	execute($sql);

	header('Location:adm_category.php');
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>Admin</title>
</head>
<body>
    <div id="wrapper">
        <div class="header">
            <nav class="container">
               <marquee behavior="" direction="">Welcome to the admin page</marquee>
            </nav>
        </div>
        <div class="main-admin">
                <div class="main-left">
                    <ul>
                        <a href="../index.php" id="logo">
                            <img src="../img/logo.png" alt="">
                        </a>
                        <li><a href="adm_users.php">Admin</a></li>
                        <li><a href="adm_category.php">Category</a></li>
                        <li><a href="adm_advises.php">Advises</a></li>
                        <li><a href="detail_category.php">Detail_Category</a></li>
                        <li><a href="adm_albums.php">Albums</a></li>
                        <?php
                    if(!isset($_SESSION['uid'])){
                            echo "<div class='login'>
                                    <button><a href='../validation/login.php'>Login</a></button>
                                    <button><a href='../validation/register.php'>Register</a></button>
                                  </div>";
                    }
                    else{
                        echo "<div class='login'><button><a href='../validation/logout.php'>Log Out</a></button></div>";
                    }
                    ?>
                    </ul>
                </div>
                <div class="main-right">
                <div class="container"> 
 <div class="row"> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">List menu</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
                    <form method="post">
                        <input  type="text" name="title">
                        <button class="btn btn-sm btn-primary btn-create">Add</button>
                    </form>
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table method="post" class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th><em class="fa fa-cog"></em></th> 
        <th class="hidden-xs">No</th> 
        <th>Title</th> 
        <th>Created_at</th> 
        <th>Update_at</th> 
       </tr> 
      </thead> 
      <tbody>
      <?php
$index = 0;
foreach($cate_List as $item) {
    echo '<tr>
            <td align="center">
            <a href="adm_edit_category.php?id='.$item['id'].'" class="btn btn-default">
            <em class="fa fa-pencil"></em></a> 
            <a href="adm_delete.php?cate_id='.$item['id'].'" class="btn btn-danger"><em class="fa fa-trash"></em></a></td> 
            <td class="hidden-xs">'.(++$index).'
            </td>
            <td>'.$item['title'].'</td>
            <td>'.$item['created_at'].'</td>
            <td>'.$item['update_at'].'</td>
        </tr>';
}
?>
     </tbody>
    </table> 
                </div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
</body>
</html>