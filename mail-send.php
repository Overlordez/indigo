<?php
$to = 'dym8750@gmail.com';//сюда приходят заявки
$from = $_POST['email']; //какае-то почта из которой приходит заявка
$subject = 'Форма заявки "Купити книгу"';

$username = $_POST['name'];
$userphone = $_POST['phone'];
$usermail = $_POST['email'];

$message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от " . $username . "</h2>
        <p>Имя: " . $_POST['name'] . "</p>
        <p>Телефон: " . $_POST['phone'] . "</p>
        <p>Email: " . $_POST['email'] . "</p>".
$message .= "</body>
        </html>
    ";
$headers = 'From: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $subject, $message, $headers);

header('Location: thanks.html'); 
?>
