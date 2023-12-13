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
$sql = "select * from category";
$cate_List = executeResult($sql);
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
                    <h1 class="main-header-h1">[HOT]Service for renting Calligraphy Event</h1>
                    <div class="main-link-home">
                        <a href="index.php">Home</a>
                        <p>/ [HOT]Service for renting Calligraphy Event</p>
                    </div>
                </section>
               <section class="main-content">
                      <div class="content-left">
                         <div class="content-service">
                             <h2 class="content-service-h2">Service for renting Calligraphy Event</h2>
                             <strong>
                                 <p>Are you looking for a map to write calligraphy for partners and relatives for the upcoming event?</p>
                                 <p>Or are you looking for a large number of calligraphy artists for fairs and booths on weekends?</p>
                             </strong>
                             <p>At the end of the year, it is also a time when there are many businesses and companies that organize events, events, and year -end parties with high demand for the service of hiring calligraphy for the end and summarizing 1 The year of development with good achievements as well as towards bigger goals next year or may be for the purpose of introducing and promoting products, brands, beautiful images of the company to everyone to everyone..</p>
                             <p>With many years of experience in designing and implementing Duc Cuong's event and calligraphy in Ho Chi Minh, we always bring customers beautiful images about the calligraphy, giving words , gifts and good wishes to the partners of businesses in events, events…</p>
                             <img src="img/content-service-1.jpg" alt="">
                              <h3 class="content-service-h3">Service of Calligraphy on Tet holiday</h3>
                              <p>Duc Cuong Calligraphy is the address to provide professional calling for calligraphy for the fairs, exhibitions, stalls, year -end parties, weekly party and celebration and celebration Especially with the big year -end events</p>
                              <p>Come to <b>Duc Cuong Calligraphy</b>, We will bring your event a traditional space with red paper boats and beautiful and meaningful works for your relatives, partners and friends..</p>
                             <p>With traditional dresses with ancient calligraphy space, <b>Service of hiring a calligraphy</b> Duc Cuong always accompanies customers in each important event.</p>
                            <i> <u><p>” We are not sure to provide the cheapest map today, but definitely the most professional service he is today!”</p></u></i>
                             <p>Contact Duc Cuong Calligraphy immediately at the hotline for advice and prepare quickly for your upcoming event :</p>
                             <strong class="content-service-strong">
                                <p>Duc Cuong Calligraphy</p>
                                <p>Hotline/Zalo: 0938800758</p>
                                <p>Website: <a href="">https://duccuongthuphap.com/</a></p>
                                <p>Facebook individual: <a href="">https://www.facebook.com/duccuongakan</a></p>
                                <p>Fanpage: <a href="">https://www.facebook.com/ThuPhapDucCuong/</a></p>
                             </strong>
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
