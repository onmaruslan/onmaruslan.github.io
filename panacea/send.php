<?php

$recepient = "onmaruslan@i.ua";
$siteName = "Панацея";
$from = $_POST['tel']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$message = $_POST['message'];

$go = "Имя: $first_name \nТелефон: $from \nСообщение: $message";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $go);

?>
