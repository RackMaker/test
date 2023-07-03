<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $to = 'ivanovivanic467@gmail.com'; // Замените на вашу электронную почту
    $subject = 'Новый заказ';
    $body = "Имя: $name\nEmail: $email\nНомер телефона: $phone\nСообщение: $message";
    
    if (mail($to, $subject, $body)) {
        echo 'Ваш заказ был успешно отправлен.';
    } else {
        echo 'Произошла ошибка при отправке заказа.';
    }
}
?>