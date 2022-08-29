<?php
$q1 = $_POST['a__q1'];
$q2 = $_POST['a__q2'];
$q3 = $_POST['a__q3'];
$q4 = $_POST['a__q4'];
$q5 = $_POST['a__q5'];
$phone = $_POST['phone'];
$connect = $_POST['contact'];

//echo $fio;
//echo "<br>";
//echo $email;
if (mail("klekov23@yandex.ru", "Заявка с сайта на квартиру", "Район: $q1 \r\n Цель приобретения: $q2 \r\n Форма расчета: $q3 \r\n Количество комнат: $q4 \r\n Вариант отделки: $q5 \r\n Телефон клиента: $phone \r\n Тип связи: $connect" ,"From: info@klekovvlad.ru \r\n"))
 {     echo "OK";
} else {
    echo "OK";
}?>