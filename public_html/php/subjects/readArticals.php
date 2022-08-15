<?php
session_start(); 
require_once '../vendor/connect.php';
$articals_id = (int) $_GET['articals_id'];
$select = mysqli_query($connect, "SELECT * FROM `articals` WHERE `articals_id` = $articals_id");
$fetch = $select->fetch_assoc();
$owner_id = $fetch['owner_id'];
$getnamefetch = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = $owner_id");
$getname = $getnamefetch->fetch_assoc();
$title_name = $fetch['title'];
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
    <link href="templateStyle/template.css" rel="stylesheet">
    <link href="templateStyle/readArticals.css" rel="stylesheet" media="screen">
    <link href="../../preloader/preloader.css" rel="stylesheet">
	<link rel="icon" href="../../img/favicon.ico" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
<!-- navbar -->
<div class="preloader">
	<div class="preloader__row">
		<div class="preloader__item"></div>
		<div class="preloader__item"></div>
	</div>
</div>
<nav class="container-fluid">
    <div class="row nav-row">	
            <div class="logo col-12 col-sm-8 col-md-5 col-xl-3">
                <a href="https://subpedia.ru/"><img src="../../img/logo2.png" alt=""></a>
            </div>  
           
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


<section class="container info-articals">
    <div class="row">
            <h2 class="col-12"><?php echo($fetch['title']);?></h2>
            <img src="<?php echo($fetch['main_photo']);?>" alt="Ошибка при загрузке фотографии" class="main_photo_pic col-12 col-sm-8 col-xl-5 my-3" >
            <h3 class="col-12"><?php echo($fetch['pretitle']);?></h3>
            <hr>
            <p class="col-12"><?php echo($fetch['main_text']);?></p>
            <hr>
            <div class="col-12 owner-inf">
                <span><?php echo($getname['full_name']);?></span>
                 <span> <?php echo($fetch['Date']);?></span>
            </div>

    </div>
</section>
<!-- /content -->

<!-- footer -->

<footer >
    <a href="">РКРИПТ</a><span>, ПО-12, Мушаров Артем, <span style="color:#8000ae;">&copy;Subject</span><span style="color:#400bd9;"d>Pedia</span>,  2021г. </span>
</footer>

<!-- /footer-->
</body>
<script src="../../preloader/preloaderclose.js"></script>
</html>
