<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '' ;
?>
<hmtl>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel ="stylesheet" href="Style.css">
        <link rel="stylesheet" href="t2.css">
        <title>Home</title>
    </head>
    <body>
        <div class="container">
            <div class="profile-box">
                <img src="menu.png" class="menu-icon">
                <img src="setting.png" class="setting-icon">
                <img src="profile-pic.png" class="profile-pic">
                <h3>Vinni Magalona</h3>
                <p>BSIT1C</p>
                <div class="social-media">
                    <img src="instagram.png">
                    <img src="telegram.png">
                    <img src="facebook.png">
                </div>
                <button type="button">Follow</button>
                <div class="profile-bottom">
                    <p>Name: Vinni Magalona <br>
                       Age: 20 years old <br>
                       Sex: Sige</p>
                    <img src="arrow.png">
        <nav>
            <ul class="nav-links">
                <li>
                    <a href="Home.php">Home</a>
                </li>
                <li>
                    <a href="Activities/LT2.html">LT2</a>
                </li> 
                <li>
                    <a href="Activities/LT3.html">LT3</a>
                </li>
                
                <li>
                    <a href="Activities/LT4.html">LT4</a>
                </li>
                
                <li>
                    <a href="Activities/LT5.html">LT5</a>
                </li>
                <li>
                    <a href="Activities/ME.html">Midterm</a>
                </li>
            </ul>
            <?php
              switch($page){
                  case "LT2":
                      include"Activities/LT2.html";
                  break;
                  case "LT3":
                      include "Activities/LT3.html";
                  break;
                  case "LT4":
                      include "Activities/LT4.html";
                  break;
                  case "LT5":
                      include "Activities/LT5.html";
                  break;
                  case "ME":
                      include "Activities/ME.html";
                  break;
              }
            ?>  
                  </nav> 
               </div>
            </div>
         </div>
    </body>
</hmtl>