<?php
require_once('validation/dbhelper.php');
require_once('validation/utility.php');
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
              <!-- Star slide -->
    <div class="image-slider">
      <div class="image-item">
        <div class="image">
          <img
           src="img/l3.jpg"
          />
        </div>
      </div>
      <div class="image-item">
        <div class="image">
          <img
            src="img/l2.jpg"
            alt=""
          />
        </div>
      </div>
      <div class="image-item">
        <div class="image">
          <img
            src="img/l1.jpg"
            alt=""
          />
        </div>
      </div>
    </div>
     <!-- End slide -->
      <!-- Star post -->
    <div class="post-section">
      <section class="introduce">
        <h2 class="heading"> Duc Cuong Calligraphy</h2>
            <p class="text-center">Calligraphy paintings, Painting</p>
         <div class="box-container">
           <div class="box">
               <box-icon name='book-open' class='icon'></box-icon>
               <h3>Calligraphy course</h3>
               <p style="font-size:18px;">See now for more information on the Vietnamese calligraphy writing course and the calligraphy of Duc Cuong here</p>
               <a href="" class="link-post">Read More</a>
           </div>
           <div class="box">
               <box-icon name='camera' class='icon'></box-icon>
               <h3>WORK</h3>
               <p style="font-size:18px;">The typical works of Duc Cuong see details in the following articles:</p>
               <a href=""  class="link-post">Read More</a>
           </div>
           
           <div class="box">
            <box-icon name='shopping-bag' class='icon'></box-icon>
               <h3> [HOT]Service for renting Calligraphy with calligraphy</h3>
               <p style="font-size:18px;">Are you looking for Mr. Map to write to the partner and relatives for the upcoming event?</p>
               <a href="" class="link-post">Read More</a>
           </div>
       </div>
   </section>
    </div>
     <!-- End post -->
          <!-- Star contact -->
     <section class="contact" id="contact">
         <div class="row">
            <div class="row-left">
              <h2 class="">Duc Cuong Thu Quan</h2>
              <p>Regular opening of courses :</p>
              <ul>
                <li><a href="">Calligraphy course</a></li>
                <li><a href="">Peony drawing course</a></li>
                <li><a href="">Lotus drawing course</a></li>
                <li><a href="">Water painting course</a></li>
              </ul>
            </div>
                  <img src="img/service-post.jpg" alt="" class="ht-service-post">
         </div>
  </section>
   <!-- End contact -->
   <section class="new">
    <h2 class="new-title">News - Activities</h2>
      <div class="ht-blog-excerpt">
        <div class="ht-blog-item">
          <img src="img/new-1.jpg" alt="">
          <a href="" class="a-title">Calligraphy exchange with tourists For students who are foreign tourists</a>
          <p  class="time-title">November 6, 2022</p>
          <p class="p-title">Calligraphy exchange with students are foreign tourists</p>
          <div class="link-new-big">
            <a href="" class="link-new">Read More</a>
          </div>
        </div>
        <div  class="ht-blog-item">
          <img src="img/new-2.jpg" alt="">
          <a href="" class="a-title">Opening the shop and opening Vietnamese calligraphy course</a>
          <p class="time-title">November 6, 2022</p>
          <p class=" p-title">Saturday, June 9, 2018, with the participation of calligraphy artists and also close friends,</p>
          <div  class="link-new-big">
            <a href="" class="link-new">Read More</a>
          </div>
        </div>
        <div  class="ht-blog-item">
          <img src="img/new-3.jpg" alt="">
          <a href="" class="a-title">Spring of the sea and islands 2018 come to the Coast Guard 4</a>
          <p class="time-title">November 6, 2022</p>
          <p class="p-title">Spring of the sea and islands 2018 come to the Coast Guard 4</p>
          <div  class="link-new-big">
            <a href="" class="link-new">Read More</a>
          </div>
        </div>
      </div>
   </section>
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
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="./js/app.js"></script>
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
