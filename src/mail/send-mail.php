<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$text = $_POST['text'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$text = htmlspecialchars($text);

$name = urldecode($name);
$tel = urldecode($tel);
$text = urldecode($text);

$name = trim($name);
$tel = trim($tel);
$text = trim($text);

if (mail("hameleon2011007@mail.ru",
    "Заявка с сайта",
    "Имя: ".$name. "\nТелефон: ".$tel. "\nСообщение: \n".$text ))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}