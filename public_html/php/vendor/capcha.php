<?php    
// Проверяем была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
 
    // Создаем POST запрос
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LeABJwaAAAAADhBJDOMFiBDYjAZoXgwoMiVT9j5';
    $recaptcha_response = $_POST['recaptcha_response'];
 
    // Отправляем POST запрос и декодируем результаты ответа
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
 
    // Принимаем меры в зависимости от полученного результата
    if ($recaptcha->score >= 0.5) {
        // Проверка пройдена - отправляем сообщение.
    } else {
        // Проверка не пройдена. Показываем ошибку.
        die("Вы робот!");
    }
 
}
?>