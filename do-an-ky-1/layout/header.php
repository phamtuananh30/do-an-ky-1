<nav class="container">
               <div class="header">
                  <a href="index.php" id="logo">
                    <img src="img/logo.png" alt="">
                </a>
                <ul id="main-menu">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="introduce.php">INTRODUCE</a></li>
                    <li><a href="index.php">PRODUCT</a>
                        <ul class="sub-menu">
                        <?php
                            foreach($cate_List as $item) {
                                echo ' <li><a href="detail.php?category='.$item['id'].'">'.$item['title'].'</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a href="service.php">SERVICE</a></li>
                    
                    <?php
                    session_start();
                    if(!isset($_SESSION['uid'])){
                            echo "<div class='login'>
                            <button><a href='validation/login.php'>Login</a></button>
                            <button><a href='validation/register.php'>Register</a></button>
                        </div>";
                    }
                    else{
                        echo "<div class='login'><button><a href='validation/logout.php'>Log Out</a></button></div>";
                    }

                    ?>
                </ul>   
               </div>
            </nav>