<?php 
session_start();
require_once 'connect.php';

if (!isset($_SESSION['user'])) {
    header('Location: profile.php');
}
include_once('downIMG.php');

    // если была произведена отправка формы
    if(isset($_FILES['file'])) {
      // проверяем, можно ли загружать изображение
      $check = can_upload($_FILES['file']);

      if($check === true){
        // загружаем изображение на сервер
        make_upload($_FILES['file']);
        $path = '../uploads/articalsIMG/'.$name;
      }
      
    }
 
$title = $_POST['title'];
$pretitle = $_POST['pretitle'];
$main_text  = $_POST['main_text'];
$sub_id = $_POST['answer'];
$owner_id = $_SESSION['user']['id'];
$author = $_SESSION['user']['full_name'];
$Date = date('y.m.d');
mysqli_query($connect, "INSERT INTO `articals` (`articals_id`, `owner_id`, `title`, `pretitle`, `main_text`, `author`, `main_photo`, `sub_id`, `Date`) VALUES (NULL, '$owner_id', '$title', '$pretitle', '$main_text', '$author', '$path', '$sub_id', '$Date');");
header('Location: ../profile.php');
?> 