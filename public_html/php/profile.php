<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="icon" href="../img/favicon.ico" type="image/png">
    <link href="../preloader/preloader.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/profileMedia.css">
    <link rel="stylesheet" href="assets/css/articals.css">
</head>
<body>
<div class="preloader">
	<div class="preloader__row">
		<div class="preloader__item"></div>
		<div class="preloader__item"></div>
	</div>
</div>
<!-- navbar -->
<nav class="container-fluid nav-container">
			<div class="row nav-row " >	
					<div class="logo col-12 col-sm-8 col-md-5 col-xl-2">
					<a href="https://subpedia.ru/">	<img src="../img/logo2.png" alt=""></a>
					</div>  
					<div class="reg-area">
					
						<div class="reg-form_nav">
							<?php 					
									echo('<a href="../index.php">Главная</a>');
								
							?>
						</div>
		
					</div>
			</div>
		</nav>
<!-- /navbar -->
    <!-- Профиль -->
<section class="container user_inf-section d-none d-lg-block">
    <div class="row"> 
        <div class="col-12 user_inf">  
        <!--для десктопов-->
			<div class="wrapper d-none d-lg-flex">
				<!-- Карточка с автатаркой и панелью управления -->
				<div class="main-profile-wrapper"> 
				    <div class="main-profile">
				        <img src="<?= $_SESSION['user']['avatar'] ?>" alt="Произошла ошибка загрузки фотографии или вы её не загрузили" class="avatar">      
				        <div>
				            <a href="#">Редактировать</a>
				            <?php
				                if($_SESSION['user']['admin'] == 1){
				                    echo('<a href="#">Администрирование</a>');
				                }
				                if($_SESSION['user']['moderator'] == 1){
				                    echo('<a href="#">Модерирование</a>');
				                }
				                ?>
				            <a href="vendor/logout.php" class="logout" style="color:rgba(208, 26, 26);">Выход</a> 
				        </div>
				    </div>  
				</div>    
				<!-- Карточка со статистикой -->
				<div class="user_stats col-12 col-lg-8">
				    
				    <div>
				        <!-- Имя -->
				        <h2  class="user_name "><?= $_SESSION['user']['full_name'] ?></h2>
				        <hr>    
				        <div class="publications_stat">
				            <div >
				                <a href="">Закладки:</a>
				                <p>0</p>
				            </div>  
				            <div>
				                <a href="">Публикации:</a>
				                <p>0</p>
				            </div> 
				            <!-- <div>
				                <a href="">Подписки:</a>
				                <p>0</p>
				            </div>  -->
				        </div>
				        <hr> 
				            <div class="d-flex flex-wrap justify-content-center">
				                <a href="articals.php" class="col-10">Посмотреть Статьи</a>
				                 <?php
				                 if($_SESSION['user']['moderator'] == 1){
				                    echo('<a href="addarticals.php" class="col-10">Написать Статью</a>');
				                	} 
				                	?>
				                
				            </div>
				            <hr> 
				            <span class="version_inf">v. pre-alpha:1.02</span>
				    </div> 
				</div>  
				  
				  <!--для < 992px-->
				
			</div>
        </div>
    </div>
</section>
<section class="container-fluid user_inf-section d-flex flex-wrap justify-content-center d-lg-none">
        <div class="row"> 
            <div class="col-12 user_inf align-items-center">  
            <!--для десктопов-->
				<div class="wrapper d-block d-lg-none">
						<!-- Карточка с автатаркой и панелью управления -->
					    <!--<div class="main-profile-wrapper"> -->
					    <!--    <div class="main-profile">-->
					              
					            <h2  class="user_name col-12"><?= $_SESSION['user']['full_name'] ?></h2>
					            <hr>    
					            <img src="<?= $_SESSION['user']['avatar'] ?>" alt="Произошла ошибка загрузки фотографии или вы её не загрузили" class="avatar my-4">    
					            <div class="publications_stat col-12">
					                <div >
					                    <a href="">Закладки:</a>
					                    <p>0</p>
					                </div>  
					                <div>
					                    <a href="">Публикации:</a>
					                    <p>0</p>
					                </div> 
					            </div>
					            <hr> 
					                <div class="d-flex flex-wrap justify-content-center col-12">
					                    <a href="articals.php" class="col-10">Посмотреть Статьи</a>
					                     <?php
					                     if($_SESSION['user']['moderator'] == 1){
					                        echo('<a href="addarticals.php" class="col-10">Написать Статью</a>');
					                    	} 
					                    	?>
					                    
					                </div>
					                <hr> 
										<div class="col-12 d-flex flex-wrap justify-content-center">
										    <a href="#" class="col-10">Редактировать</a>
										    <?php
										        if($_SESSION['user']['admin'] == 1){
										            echo('<a href="#" class="col-10">Администрирование</a>');
										        }
										        if($_SESSION['user']['moderator'] == 1){
										            echo('<a href="#"class="col-10">Модерирование</a>');
										        }
										        ?>
										    <a href="vendor/logout.php" class="logout col-10" style="color:rgba(208, 26, 26);">Выход</a> 
										</div>
									
					                	<span class="version_inf col-12">v. beta:1.02</span>
					            
					    <!--    </div>  -->
					    <!--</div>    -->
					    
					</div>
            </div>
        </div>
    </section>    

<footer >
	<a href="">РКРИПТ</a><span>, ПО-22, Мушаров Артем, <span style="color:#8000ae;">&copy;Subject</span><span style="color:#400bd9;"d>Pedia</span>,  2021г. </span>
</footer>
<script src="../preloader/preloaderclose.js"></script>
</body>
</html>



