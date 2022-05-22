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
        <title>Home</title>
    </head>
    <body background="B.jpg">
        <nav>
            <div class="logo">
                <h4>Portfolio</h4>
            </div>
            <ul class="nav-links">
                <li>
                    <a class="active" href="Profile.php">Profile</a>
                </li>
                <li>
                    <a class="active" href="Activities/LT2.html">LT2</a>
                </li> 
                <li>
                    <a class="active" href="Activities/LT3.html">LT3</a>
                </li>
                
                <li>
                    <a class="active" href="Activities/LT4.html">LT 4</a>
                </li>
                
                <li>
                    <a class="active" href="Activities/LT5.html">LT 5</a>
                </li>
                <li>
                    <a class="active" href="Activities/ME.html">Midterm Exam</a>
                </li>
            </ul>
            <?php
              switch($page){
                  case "Profile":
                      include "Profile.php";
                  break;
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
                <div class="burger">
                <div class="L1"></div>
                <div class="L2"></div>
                <div class="L2"></div>
            </div>
        </nav>
        
        <script src="script.js"></script>
        
    </body>
</hmtl>