<?php $title = "Заявка c сайта"; $to = 'arenda.kukl@yandex.ru';
$from='с какого сайта';
$tel = 'Номер телефона: '.$_POST['tel'];
$message = "Заявка c cайта:\n\n $hide $tel; ";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: " . $from . "\r\n"; mail($to, $title, $message, $headers);
echo 'Ваше сообщение успешно отправлено! Спасибо.'; ?>