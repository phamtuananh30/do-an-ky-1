<?php
require_once('validation/dbhelper.php');
require_once('validation/utility.php');

if(!empty($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
  $describe = $_POST['describe'];

	$sql = "insert into advises(name,email, phone, address,content,created_at,update_at) values ('$name', '$email', '$phone', '$address', '$describe','".date('y/m/d H:i:s')."','".date('y/m/d H:i:s')."')";
	execute($sql);
  
}

$sql = "select * from detail_category where category_id =".$_GET['category'];
$detail_List = executeResult($sql,1);

$sql = "select * from category";
$cate_List = executeResult($sql);

$sql = "select * from albums where detail_category_id = ".$_GET['category'];
$albums_List = executeResult($sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slick Slider</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="css/app.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  </head>
  <body>
        <!-- Star header -->
                <?php 
                include "layout/header.php"
                ?>
         <!-- End header -->
         <!-- Star main header -->
                <section class="main-header">
                            <?php
                                echo ' <h1 class="main-header-h1">'.$detail_List['title'].'</h1>';
                            ?>
                    <div class="main-link-home">
                        <a href="index.php">Home/</a>
                        <a href="">Types of calligraphy paintings/</a>
                            <?php
                                echo ' <p>'.$detail_List['title'].'</p>';
                            ?>
                    </div>
                </section>
               <section class="main-content">
                      <div class="content-left">
                         <div class="content-service">
                           <?php
                                echo ' <h2 class="content-service-h2">'.$detail_List['content'].'</h2>';
                            ?>
                             <?php
                            foreach($albums_List as $item) {
                              echo '
                                  <img style="margin:0 auto;" src="'.$item['url'].'"/>
                                  <p style="text-align:center;">'.$item['describes'].'</p>
                                  ';
                                   }
                            ?>
                         </div>
                      </div>
                      <div class="content-right">
                      <?php 
                          include "layout/content-right.php"
                        ?>
                      </div>
               </section>
         <!-- End main header -->
          <!-- Star footer -->
                <?php 
                include "layout/footer.php"
                ?>
         <!-- End footer -->
          <!-- Star back-to-top -->
   <?php 
      include "layout/back-to-top.php"
    ?>
  
   <!-- End  back-to-top -->
    <script src="./app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop()){
                $('#backtop').fadeIn();
            }else{
                $('#backtop').fadeOut();
            }
        });
        $('#backtop').click(function(){
            $('html,body').animate({scrollTop: 0}, 900);
        });
    });
</script>
  </body>
</html>
