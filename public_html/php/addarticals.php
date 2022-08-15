<?php
session_start();
if(isset($_SESSION['user'])){
	if ($_SESSION['user']['moderator'] == 0) {
	    header('Location: /');
	}
}
else{
	header('Location: /');
}
	

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить публикацию</title>
    <link rel="icon" href="../img/favicon.ico" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/articals.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <?php include_once 'vendor/capcha.php'; ?>
</head>
<body>
<!-- navbar -->
<nav class="container-fluid nav-container">
	<div class="row nav-row " >	
			<div class="logo col-12 col-sm-8 col-md-5 col-xl-2">
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
							echo('<a href="../index.php">Главная</a>');
						
					?>
				</div>

			</div>
	</div>
</nav>
<!-- /navbar -->
      <!-- Форма создания статьи -->

<section class="container-fluid justify-content-center d-flex">
	<div class="row col-12 col-sm-12 col-xl-5 justify-content-center d-flex">
		<div class="inputForm">
	    <form method="post" action="vendor/create_articals.php" enctype="multipart/form-data">
	        <label>Название публикации</label>
	        <input type="text" name="title" placeholder="Введите Название" required minlength="8">
	        <label>Заголовок</label>
	        <input type="text" name="pretitle" placeholder="Введите Заголовок" required minlength="16">
	        <label>Главное изображение</label>
	        <input type="file" name="file" required>
	        <label>Содержание публикации</label>
	        <textarea  type="text" name="main_text" placeholder="Введите текст" required id="mytextarea" minlength="50" ></textarea>
	            <p >Тематика:</p>
	            <div class="radio_sub">
	                <label><input name="answer" type="radio" value="1" required="required"> Математика </label>
	                <label><input name="answer" type="radio" value="2" required="required"> Биология </label>
	                <label><input name="answer" type="radio" value="3" required="required"> Химия </label>
	                <label><input name="answer" type="radio" value="4" required="required"> Физика </label>
	            </div>
	        <button type="submit" class="register-btn">Опубликовать</button>
	        <p class="msg none">Lorem ipsum.</p>
	    </form>
		</div>
	</div>
</section>
<!---->
<footer >
	<a href="">РКРИПТ</a><span>, ПО-22, Мушаров Артем, <span style="color:#8000ae;">&copy;Subject</span><span style="color:#400bd9;"d>Pedia</span>,  2021г. </span>
</footer>
	<!--<script src="https://cdn.tiny.cloud/1/l8rwvqs35z9v56crlxcz1j5f89jft4l5eadoj2w9hi9hs8mg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
	<script src="https://www.google.com/recaptcha/api.js?render=6LeABJwaAAAAAJFen151ExMgnARESDdkgQcmiuRU"></script>
    <script src="assets/js/capcha.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/addarticals.js"></script>
  
</body>
</html>
