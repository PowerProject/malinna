<?php
   $aDoor = $_POST['manicure'];
   $to = "antilife@powerproject.com.ua";
   $subject = "Запись на услугу";
   $message = '<h1>Письмо с сайта Malinna</h1>
                <p>Имя отправителя: <b> '.$_POST['name'].'</b></p>
                <p>Телефон отправителя: <b> '.$_POST['phone'].'</b></p>
                <p>Время: <b>'.$_POST['date'].'</b><br>
                <p>Услуги:</p>
                '.$aDoor[0].$aDoor[1].$aDoor[2].$aDoor[3].$aDoor[4].$aDoor[5].$aDoor[6].$aDoor[7].$aDoor[8].$aDoor[9].$aDoor[10].$aDoor[11].$aDoor[12].$aDoor[13];           
   $header = $_SERVER['HTTP_URL'];
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html; charset=utf-8\r\n";
   mail($to, $subject, $message, $header);
   ?>