
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
	<link href="preloader/preloader.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/burger.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/media.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>	

<body>
	<!--preloader-->
<div class="preloader">
	<div class="preloader__row">
		<div class="preloader__item"></div>
		<div class="preloader__item"></div>
	</div>
</div>
	<!-- navbar -->
		<nav class="container-fluid">
			<div class="row nav-row">
					<div class="tpl_hamburger d-block d-lg-none" id="sandwichmenu">
						<svg viewBox="0 0 800 600" class="d-flex d-lg-none">
							<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
							<path d="M300,320 L540,320" class="middle"></path>
							<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
						</svg>	
					</div>
					<div class="logo  col-8 col-sm-6 col-lg-2">
						<a href="https://subpedia.ru/"><img src="img/logo2.png" alt=""></a>
					</div>
					<div class="links_nav d-none d-lg-flex">
						<a href="#header">Главная</a>
						<a href="php/articals.php" >Публикации</a>
						<a href="#about-system">О Системе</a>
						<a href="#abilities">Возможности</a>
						<a href="#registration">О Регистрации</a>
					</div>
					<!-- Бургер -->
					
					<div class="js_menu "> 
					
						<div class="links_nav d-flex d-lg-none">
							<a href="#header" class="col-12 alinks_navc" id="alinks_nav">Главная</a>
							<a href="php/articals.php" class="col-12 alinks_navc" id="alinks_nav">Публикации </a>
							<a href="#about-system" class="col-12 alinks_navc" id="alinks_nav">О Системе</a>
							<a href="#abilities" class="col-12 alinks_navc" id="alinks_nav">Возможности</a>
							<a href="#registration" class="col-12 alinks_navc" id="alinks_nav">О Регистрации</a>
							<div class="reg-form_nav">
							<?php 
								if (!isset($_SESSION['user'])) {
									echo('<a class="col-12 ajsmenu" href="php/register.php">Регистрация</a>
									<button class="col-5 butjsmenu" style="outline: none;" onclick=\'window.location.href="php/index.php";\'>Войти</button>
									');
								}
								else{
									echo('<a class="col-12 ajsmenu" href="php/profile.php">Мой профиль</a>');		
								}
							?>
						</div>
						</div>
						
					</div> 
					 <!-- /Бургер -->
					<div class="reg-area d-none d-lg-flex">	
						<div class="reg-form_nav">
							<?php 
							
								if (!isset($_SESSION['user'])) {
									echo('<button style="outline: none;" onclick=\'window.location.href="php/index.php";\'>Войти</button>
									<a href="php/register.php">Регистрация</a>');
								}
								else{
									echo('<a href="php/profile.php">Мой профиль</a>');		
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
				<div class="row">
					<div class="LeftPart_Header col-12 col-xl-3 сoltext-center">
						
							<h1>SubPedia </h1> 
							<p style="color:rgba(208, 26, 26);">pre-alpha 1.02</p>
							<hr>
							<p>Некоммерческий конкурсный проект, предназначенный для свободного распространения научных и околонаучных знаний; создание комьюнити, участники которого  интересуются в вопросах, связанных с естественно-научными и техническими предметами   </p>
					
					</div>
					<div class="RightPart_Header col-12 col-xl-6 my-5">
						<div class="owl-carousel owl-theme">
							<picture>
								<source srcset="img/e1.webp" type="image/webp">
								<img src="img/e1.png" alt="">
							</picture>
							<picture>
								<source srcset="img/e3.webp" type="image/webp">
								<img src="img/e3.png" alt="">
							</picture>
					
						</div>
						<p class="text-carusel">Свободная научная энциклопедия на просторах рунета</p>
					</div>

				</div>
			</div>		
			
		</header>
	<!-- /header-->

	<!-- about system  -->
		<section class="container-fluid about-system  " id="about-system">
			<div class="row">
				<div class="about-system_left-part col-xl-8 col-12">
					<img src="img/wave1.png" alt="" class="wave-pattern1">
					<div class="col-12">
						<h3 class="about-system_h3 ">Для кого</h3>
					<div class="col-12" style="flex-wrap:wrap;">	
						<div class="col">
							<picture>
								<source srcset="img/pic1.webp" type="image/webp">
								<img src="img/pic1.jpg" alt="">
							</picture>
							<h4>Для  Школьников и студентов</h4>
							<p>(Учащихся с первых классов и до последних курсов)</p>
							
						</div>
						<div class="col">
							<picture>
								<source srcset="img/pic2.webp" type="image/webp">
								<img src="img/pic2.jpg" alt="">
							</picture>
							<h4>Для  педагогов</h4>
							<p>(От школьных учителей до профессоров!)</p>
							
						</div>
						<div class="col">
							<picture>
								<source srcset="img/pic3.webp" type="image/webp">
								<img src="img/pic3.jpg" alt="">
							</picture>
							<h4>Для тех  кто  хочет узнать новое</h4>
							<p>(Мы - откртый источник информации)</p>
							<p class="funny-text">Погрызите гранит науки..</p>
						
						</div>
					</div>
					</div>
				</div>
				<div class="about-system_right-part col-xl-4 col-12  d-none d-xl-flex">
					<div>
						<h3 class="about-system_h3  ">Наши цели</h3>
						
						<p>Способствование свободному распространению научных знаний; Создание площадки, позволяющей объединить новичков, опытных людей и даже профессионалов своего дела, в одно. </p>
						<p>Это значит, что наш проект лишь инфраструктура и бесплатный инструмент для всех желающих учиться или учить других  </p>
					</div>
					<img src="img/wave.png" alt="" class="wave-pattern">
				</div>
			</div>
		</section>
	<!-- /about system-->

	<!-- abilities -->
		<section class="container-fluid abilities" id="abilities" >
			<h2 class="mb-5 mt-auto">Возможности</h2>
			<div class="row  mt-5 mb-auto ">	
				<div class="col-8 col-xl div-cards">
					<h3 class="mt-auto mb-1">Ознакомление</h3>
					<p class="mb-auto mt-1">ВЫ можете ознакомиться с информацией на сайте БЕСПЛАТНО и не регистрируясь, однако некоторые функции будут недоступны - настоятельно рекомендуем создать аккаунт </p>
				</div>
				<div class="col-8 col-xl div-cards">
					<h3 class="mt-auto mb-1">Добавление </h3>
					<p class="mb-auto mt-1">Наша энциклопедия позволяет авторезированным пользователям добавлять статьи других пользователей в свои закладки  </p>
				</div>
				<div class="col-8 col-xl div-cards">
					<h3 class="mt-auto mb-1">Администрирование</h3>
					<p class="mb-auto mt-1">Создавайте собственные статьи и делись с другими! Удобный и понятный интерфейс, простота в использовании!<br> <span class="funny-text"> единственное, что вас может ограничить - тематика и законы РФ</span> </p>
				</div>
			</div>
			<p style="position: absolute; bottom:15px; left: 0; right:0;">И многое другое</p>
		</section>
	<!-- /abilities-->
				<div class="about-system_right-part_mini col-xl-4 col-12  d-flex d-xl-none">
					<div>
						<h3 class="about-system_h3_mini  ">Наши цели</h3>
						<p>Способствование свободному распространению научных знаний; Создание площадки, позволяющей объединить новичков, опытных людей и даже профессионалов своего дела, в одно. </p>
						<p>Это значит, что наш проект лишь инфраструктура и бесплатный инструмент для всех желающих учиться или учить людей  </p>
					</div>
					
				</div>
				<div class="hr_asrp d-xl-none d-flex"></div>
	<!-- Registration -->
		<section class="registration" id="registration">
			<div class="container">
				<div class="row ">
					<h3 class="my-3">Регистрация </h3>
					<p class="mb-3" >Личная информация, переданная вами, остается на нашем сайте под защитой и контролем, <br>не передается третьим лицам и используется только для вашего блага</p>
					<a href="php/register.php" class="mb-1">Зарегистрироваться</a>
					<a href="php/index.php" >Войти </a>
				</div>
			</div>
		</section>
	<!-- /Registration-->

	<!-- footer -->
		<footer >
		<a href="">РКРИПТ</a><span>, ПО-22, Мушаров Артем, <span style="color:#8000ae;">&copy;Subject</span><span style="color:#400bd9;"d>Pedia</span>,  2021г. </span>
		</footer>
	<!-- /footer-->
<script src="preloader/preloaderclose.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>

</html> 



