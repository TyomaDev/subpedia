<?php 
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SubPedia.ru</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	 <link href="../preloader/preloader.css" rel="stylesheet">
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/articals.css" rel="stylesheet">
	<link rel="icon" href="../img/favicon.ico" type="image/png">
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
		<nav class="container-fluid nav-container">
			<div class="row nav-row">	
					<div class="logo col-12 col-sm-8 col-md-5 col-xl-3">
						<a href="https://subpedia.ru/"><img src="../img/logo2.png" alt=""></a>
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
									echo('<button style="outline: none;" onclick=\'window.location.href="index.php";\'>Войти</button>
									<a href="register.php">Регистрация</a>');
								}
								else{
									echo('<a href="profile.php">Мой профиль</a>');		
								}
							?>
						</div>
		
					</div>
			</div>
		</nav>
	<!-- /navbar -->

	<!-- header -->
		<header class="header" id="header">
			<div class="container-fluid">
				<div class="row sub-articals-blocks">
                   <div class="col-11 col-sm-8 col-xl-5 imgphys">
                        <a href="subjects/physics.php"></a>
                        <span>ФИЗИКА</span>
                   </div>
                   <div class="col-11 col-sm-8 col-xl-5 imgmath">
                        <a href="subjects/math.php"></a>
                        <span>МАТЕМАТИКА</span>
                   </div>
                   <div class="col-11 col-sm-8 col-xl-5 imgbio">
                        <a href="subjects/biology.php"></a>
                        <span>БИОЛОГИЯ</span>
                   </div>
                   <div class="col-11 col-sm-8 col-xl-5 imgchem">
                        <a href="subjects/chemistry.php"></a>
                        <span>ХИМИЯ</span>
                   </div>
				</div>
			</div>		
			
		</header>
	<!-- /header-->
	<!-- footer -->
		<footer >
			<a href="">РКРИПТ</a><span>, ПО-22, Мушаров Артем, <span style="color:#8000ae;">&copy;Subject</span><span style="color:#400bd9;"d>Pedia</span>,  2021г. </span>
		</footer>
	<!-- /footer-->
	
<script src="js/jquery-3.5.1.min.js"></script>
<script src="../preloader/preloaderclose.js"></script>

</body>

</html> 



