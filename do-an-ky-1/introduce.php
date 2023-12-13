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
                    <h1 class="main-header-h1">INTRODUCE</h1>
                    <p>Calligraphy works, Peony, Lotus, Painting Master Patriarchs on materials such as paper, wood, fabric ... composed by Duc Cuong</p>
                    <div class="main-link-home">
                        <a href="index.php">Home</a>
                        <p>/ Introduce</p>
                    </div>
                </section>
               <section class="main-content">
                      <div class="content-left">
                          <div class="blockquocte">
                              <p>“I love traditional values, especially the elegant feeling of a writer and painting pen, which is why I pursue this art.</p>
                              <p>Calligraphy - Thuy Mac is associated with my life, it seems to attract me at first sight because of the rustic, simple but quintessential beauty in each line. ”</p>
                          </div>
                         <div class="content-bottom">
                             <p class="content-h1">9x boy loves Asian culture</p>
                             <p>Since childhood, Duc Cuong has loved the cultural beauty of the East through films, patterns, reliefs, costumes and architecture ... It goes into the thought, thought and work of a man forever. neck is different from friends of the same age.</p>
                             <p>After 5 years of sitting in the university lecture hall, selected as a typical alumni of Architecture - Hong Bang International University, asked to go to the school right after graduation, have time to make architects design ideas for attendance The national project - Phan Dinh Phung New - Ho Chi Minh Stadium with the desirable salary of many people, but after all he chose to become a calligraphy, a Thuy Mac artist.</p>
                             <img src="img/content-introduce-1.jpg" alt="">
                             <p>Duc Cuong shared that at the time of architectural work to stay at home to paint, his family and many people protested, when he was wasting 5 years of study and the current job was stable. He is willing to separate from the crowd to go alone as long as he is happy with the path he chooses, nothing to regret.</p>
                             <p>“For me for 5 years of college, it is not wasteful because what I have studied there is knowledge, the thinking I apply on my compositions from lines, layout, ratio, shades ... "</p>
                             <p>Without too much expectation on material, success or reputation, Duc Cuong still draws for himself, puts his emotions and understanding on each pen as a way of spreading his heart.</p>
                             <p>There is a saying: "Tri Tuc Tam Thuong Lac - Vo Cocoa is high" I am satisfied with the present life, I am happy to be written, drawn, and can live with my passion for writing. I always think "draw yourself first, I have to see it beautiful and then let it reach the hands of others".</p>
                             <p>When it comes to water paintings, meditation paintings in Vietnam are quite strange to the majority of people. He admitted that his understanding and ability was just like a job learned in the vastness of this subject.</p>
                             <p class="content-h1">The beauty of Zen painting- Patriarch Dat Ma</p>
                             <p>Be known to the calligraphy exhibition, especially the paintings of the Dat Ma meditation team full of vivid. The name Mai Duc Cuong is no stranger to those who love Vietnamese calligraphy, as well as those who love Dat Ma in Vietnam.</p>
                             <p>Meet Duc Cuong when he was in the stage of preparing a separate space for Tra -Bien in Ho Chi Minh City. If someone first met him, it would be surprised by a young person who was quite young and could create works beyond imagination.</p>
                             <p>All his ideas and inspiration originated from life, from documents, history, exams- shelves about meditation.</p>
                             <img src="img/content-introduce-2.jpg" alt="">
                             <p>As well as writing calligraphy, painting also needs concentration, photographer Tam places each pen on the paper. A picture of meditation is not writing the word meditation or the word Buddha but must put his inner mind in it, having a silence just enough, gentle movement.</p>
                             <p>“The person sitting in the middle of the change</p>
                             <p>Silently watching the water flowing clouds and smiling "</p>
                             <p>Lotus is associated with Buddhism, but to draw a lotus with meditation, requires the drawer to have the emotion of meditation, a apricot branch in the Zen poetry of the Zen master, to draw the meditation at that time It is also necessary to bring the artist's soul into that scene.</p>
                             <p>"Spring flowers to your Mac remains optimistic take</p>
                             <p>Most families cherish spending money tomorrow"</p>
                             <p>The same goes for the Dat Ma painting, if there is no understanding, not putting their emotions in the pen, it will only create lifeless paintings.</p>
                             <img style="margin-left: 90px;" src="img/content-introduce-3.jpg" alt="">
                             <p>“When I drew the first 3 paintings of Dat Ma published on the group of wooden statues, many people texted me, they even thought it was China's painting. When I knew it was a painting because I was a Vietnamese, they were surprised. I still remember the saying of a person who sent myself: "I can go to any province to find a person sculpting a ghost statue, and this is the first time I know someone in Vietnam draws."</p>
                             <p>Indeed, I was not the first to paint the nest, before I had a few people also painted and famous, but that words seemed to motivate me at that time. ”</p>
                             <p>Up to now, Duc Cuong has launched hundreds of paintings of Dat Ma, with him always want to be the difference in each work, each picture was born as a milestone, every emotion, each other memory together.</p>
                             <p>“I do not know when I love to paint meditation, especially the Patriarch Dat Ma, maybe the harmony by the tranquility in my soul. The works for everyone to mention me are almost all the compositions of meditation. ”.</p>
                             <p>With the history surrounding the Dat Ma meditation team such as Nine Nectarity, Dat Ma is too Hai, Dat Ma tear the eyelids ... Hs. Mai Duc Cuong with her talented hands has blown souls for each pen, each work with different angles and moods.</p>
                             <img style="margin-left: 90px;" src="img/content-introduce-4.jpg" alt="">
                             <img style="margin-left: 90px;" src="img/content-introduce-5.jpg" alt="">
                             <img style="margin-left: 200px;margin-top:30px;" src="img/content-introduce-6.jpg" alt="">
                             <p>“When I draw any character, I have to spend time researching, who they are, where to come, what special points, physique, faces ... I am cherishing and learning documents to draw Zen masters attached to Immediately with the image of Vietnam more: Zen master Khuong Tang Hoi, Buddha Hoang Tran Nhan Tong, Bodhisattva Thich Quang Duc .... Hopefully, through the paintings I painted, everyone will have a new look, curiosity to learn more about those characters as a way to assist. ”</p>
                             <p>Recently, his paintings were honored to be selected as a gift for international delegates to attend the Vesak 2019 ceremony at Tam Chuc Pagoda - Ha Nam.</p>
                             <img style="margin-left: 90px;" src="img/content-introduce-7.jpg" alt="">
                             <img style="margin-left: 120px;" src="img/content-introduce-8.jpg" alt="">
                             <p>Currently Duc Cuong is working in the Board of Culture and Culture Club of Ho Chi Minh City Youth</p>
                             <p>In addition to the time of painting, he also actively participates in annual social activities with youth culture such as: Spring of the sea and islands, connecting love, ...</p>
                             <p>Participate in charitable programs for poor children with Minh Dao Tp. Ho Chi Minh</p>
                             <p>Source: kinhtevadubao.vn/chi-tiet/176-14863-mai-duc-cuuongchang-kien-truc-su-vi-tranh-to-dat-ma-v.tml</p>
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
