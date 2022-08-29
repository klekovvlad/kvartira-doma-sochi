<?php
$q1 = $_POST['h__q1'];
$q2 = $_POST['h__q2'];
$q3 = $_POST['h__q3'];
$q4 = $_POST['h__q4'];
$q5 = $_POST['h__q5'];
$q6 = $_POST['h__q6'];
$phone = $_POST['phonehouse'];
$connect = $_POST['contacthouse'];

//echo $fio;
//echo "<br>";
//echo $email;
if (mail("klekov23@yandex.ru", "Заявка с сайта на дом", "Район: $q1 \r\n Цель приобретения: $q2 \r\n Форма расчета: $q3 \r\n Площадь дома: $q4 \r\n Площадь участка: $q5 \r\n Вариант отделки: $q6 \r\n  Телефон клиента: $phone \r\n Тип связи: $connect" ,"From: info@klekovvlad.ru \r\n"))
 {     echo "OK";
} else {
    echo "OK";
}?>