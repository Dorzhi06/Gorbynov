<?php 

?>


<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.4.1, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">
  
    <title>Порфолио</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
      <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
    <link rel="stylesheet" href="assets/style/style.css">
  
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
</head>
<body>
<!-- Menu --> 
<section data-bs-version="5.1" class="menu menu1 cid-sOFweJdEB7" once="menu" id="menu1-3">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-secondary display-7" href="index.php">Главное</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-secondary display-4" href="About_Me.php">Обо мне</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-secondary display-4" href="index.php#features1-h">Портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-secondary display-4" href="index.php#content2-a">Декада программистов</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-secondary display-4" href="#footer3-d">Связаться</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- My xp -->
<section data-bs-version="5.1" class="features1 cid-sOFLQOOXPR" id="features1-h">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Портфолио</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <a class="navbar-caption display-7" id=YMK>
                            <div class="iconfont-wrapper">
                                <img src="assets/images/icon/YMK.png" id="img-logo"/>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>Учебно-методический комлекс</strong></h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <a class="navbar-caption display-7" id=photo>
                            <div class="iconfont-wrapper">
                                <img src="assets/images/icon/photo.png" id="img-logo"/>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>Фотогалерея учебных занятий</strong></h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <a class="navbar-caption display-7" id=club-PRO>
                            <div class="iconfont-wrapper">
                                <img src="assets/images/icon/club-PRO.png" id="img-logo"/>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>Клуб PRO-настрой</strong></h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="content" style="margin: 30px">
            <div class="mbr-section-head">
                <div class="col-12">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Фотогалерея учебных занятий</strong>
                    </h4>
                </div>
                <?php 
                $num=1;
                for($x=0; $x<7; $x++)
                {
                    try{
                        echo '<div class="row mt-4">';
                        for($y=0;$y<3;$y++)
                        {
                            echo '  <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card-wrapper mb-4">
                                            <div class="card-box align-left">
                                                <img src="assets/images/TeachDo/' . $num . '.jpg" alt="Mobirise">
                                            </div>
                                        </div>
                                    </div>';
                            $num++;
                        }
                        echo '</div>';
                    }catch(Exception $e)
                    {

                    } 
                }
                ?>
            </div>
        </div>
        <script type="text/javascript">
            $(function($){
                $('#photo').on('click', function(e)
                {
                    e.preventDefault();
                    var data = $(this).serialize();
                    $.ajax
                    ({
                        url: './pagesForTeachDoing/photoWithStudy.php', //Путь к файлу, который нужно подгрузить
                        type: 'GET',
                        success: function(responce)
                        {        
                            $('#content').html(responce); //Подгрузка внутрь блока с id=content
                        },
                        error: function()
                        {
                            alert('Error!');            
                        }
                    });
                });
                $('#club-PRO').on('click', function(e)
                {
                    e.preventDefault();
                    var data=$(this).serialize();
                    $.ajax
                    ({
                        url: './pagesForTeachDoing/club-PRO.php', //Путь к файлу, который нужно подгрузить
                        type: 'GET',
                        success: function(responce)
                        {        
                            $('#content').html(responce); //Подгрузка внутрь блока с id=content
                        },
                        error: function()
                        {
                            alert('Error!');            
                        }
                    });
                });
                $('#YMK').on('click', function(e)
                {
                    e.preventDefault();
                    var data=$(this).serialize();
                    $.ajax
                    ({
                        url: './pagesForTeachDoing/YMK.php', //Путь к файлу, который нужно подгрузить
                        type: 'GET',
                        success: function(responce)
                        {        
                            $('#content').html(responce); //Подгрузка внутрь блока с id=content
                        },
                        error: function()
                        {
                            alert('Error!');            
                        }
                    });
                });
            });
        </script>
    </div>
</section>  

<section style="background-color: #232323; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:0px; padding: 0; align-items: center; display: flex;">
    <a href="https://mobirise.site/e" style="flex: 1 1; height: 0rem; padding-left: 1rem;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;"></p>
</section>

<!-- Footer -->
<section data-bs-version="5.1" class="footer3 cid-sOFKWEK374" once="footers" id="footer3-d">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    <li class="foot-menu-item mbr-fonts-style display-7">Email: alekseyvladgorb@mail.ru</li>
                    <li class="foot-menu-item mbr-fonts-style display-7">Телефон: 8-914-451-86-17</li>
                </ul>
            </div>
            <div class="row row-copirayt" style="margin:0px">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © 2021 Горбунов Алексей.
                </p>
            </div>
        </div>
    </div>
</section>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/ytplayer/index.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/theme/js/script.js"></script>  
<script src="assets/scripts/script.js"></script>

</body>
</html>