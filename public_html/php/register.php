<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="icon" href="../img/favicon.ico" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/articals.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="../preloader/preloader.css" rel="stylesheet">
	<?php include_once 'vendor/capcha.php'; ?>
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
					<div class="logo col-10 col-sm-8 col-md-4 col-xl-2">
						<a href="https://subpedia.ru/"><img src="../img/logo2.png" alt=""></a>
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

    <!-- Форма регистрации -->
<section class="container-fluid justify-content-center d-flex">
	<div class="row col-12 col-sm-12 col-xl-5 justify-content-center d-flex">
		<div class="inputForm ">
		    <form class="">
		        <label>Имя пользователя</label>
		        <input type="text" name="full_name" placeholder="Введите свое полное имя" minlength="5" required>
		        <label>Логин</label>
		        <input type="text" name="login" placeholder="Введите свой логин" minlength="5" required>
		        <label>Почта</label>
		        <input type="email" name="email" placeholder="Введите адрес своей почты" required>
		        <label>Изображение профиля</label>
		        <input type="file" name="avatar" required>
		        <label>Пароль</label>
		        <input type="password" name="password" placeholder="Введите пароль" minlength="6" required>
		        <label>Подтверждение пароля</label>
		        <input type="password" name="password_confirm" placeholder="Подтвердите пароль" minlength="6" required>
		        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
		        <button type="submit" class="register-btn">Зарегистрироваться</button>
		        <p>
		            У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
		        </p>
		        <p class="msg none">Lorem ipsum.</p>
		    </form>
		</div>
	</div>
</section>
<footer >
	<a href="">РКРИПТ</a><span>, ПО-22, Мушаров Артем, <span style="color:#8000ae;">&copy;Subject</span><span style="color:#400bd9;"d>Pedia</span>,  2021г. </span>
</footer>

    <script src="https://www.google.com/recaptcha/api.js?render=6LeABJwaAAAAAJFen151ExMgnARESDdkgQcmiuRU"></script>
    <script src="assets/js/capcha.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script src="../preloader/preloaderclose.js"></script>
  
</body>
</html>