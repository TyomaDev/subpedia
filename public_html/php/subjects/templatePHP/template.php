<?php
session_start(); 
require_once '../vendor/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
	<title><?php echo($title_name);?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../../preloader/preloader.css" rel="stylesheet">
	<link href="templateStyle/template.css" rel="stylesheet">
	<link rel="icon" href="../../img/favicon.ico" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
<div class="preloader">
	<div class="preloader__row">
		<div class="preloader__item"></div>
		<div class="preloader__item"></div>
	</div>
</div>
<!-- navbar -->
<nav class="container-fluid">
    <div class="row nav-row">	
            <div class="logo col-12 col-sm-8 col-md-5 col-xl-3">
                <a href="https://subpedia.ru/"><img src="../../img/logo2.png" alt=""></a>
            </div>  
            <!-- <div class="links_nav">
                <a href="#header">Главная</a>
                <a href="#about-system">О Системе</a>
                <a href="#abilities">Возможности</a>
                <a href="">О Регистрации</a>
            </div> -->
            <div class="reg-area">
            
                <div class="reg-form_nav">
                    <?php 
                    
                        if (!isset($_SESSION['user'])) {
                            echo('<button style="outline: none;" onclick=\'window.location.href=" ../index.php";\'>Войти</button>
                            <a href="../register.php">Регистрация</a>');
                        }
                        else{
                            echo('<a href="../profile.php">Мой профиль</a>');		
                        }
                    ?>
                </div>

            </div>
    </div>
</nav>
<!-- /navbar -->

<!-- content -->
<section class='container-fluid content' style="min-height: 100vh;">
<div class='row'>
<div class='col-12 contents_wrapper'>
<?php  

$sql_query = "SELECT * FROM `articals` WHERE `sub_id` = $sub_id ORDER BY `articals_id`" ;
$CertainSubject = mysqli_query($connect, $sql_query);

while($fetch = $CertainSubject->fetch_assoc())
{ ?>
      
    <div class='content-block col-12 col-md-5 col-xl-3'>
        <a href='readArticals.php?articals_id=<?php echo($fetch['articals_id']);?>' class='content-a'></a>
        <img src='<?php echo($fetch['main_photo']);?>' class='img-content' alt="Ошибка при загрузке фотографии">
        <div class='content-title col-12'>
            <h3> <?php echo($fetch['title']); ?></h3>
            <h4><?php echo($fetch['pretitle']); ?></h4>
        </div> 
        <div class='content-data col-12'>   
            <span><?php echo($fetch['author']); ?></span>
            <span> <?php echo($fetch['Date']);?></span>
        </div>
    </div>
<?php  }


                
//    
 
?>
</div>
</div>
</section>
<!-- /content -->

<!-- footer -->
<footer >
    <a href="">РКРИПТ</a><span>, ПО-22, Мушаров Артем, <span style="color:#8000ae;">&copy;Subject</span><span style="color:#400bd9;"d>Pedia</span>,  2021г. </span>
</footer>
<!-- /footer-->
</body>
<script src="../../preloader/preloaderclose.js"></script>
</html>
<!--  -->
