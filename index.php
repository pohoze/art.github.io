<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
    ?> <form action="index.php" method="post">
        <input type="text" name="fio" placeholder="Your Name" required>
        <input type="text" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="submit" value="Send Message">
    </form> <?php
} else {
    //показываем форму
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);
    $fio = urldecode($fio);
    $email = urldecode($email);
    $fio = trim($fio);
    $email = trim($email);
    if (mail("bysany.design@gmail.com", "bysany.art", "ФИО:".$fio.". E-mail: ".$email ,"From: bysany.design@gmail.com \r\n")){
        echo "Сообщение успешно отправлено";
    } else {
        echo "При отправке сообщения возникли ошибки";
    }
}
ini_set('display_errors','On');
error_reporting('E_ALL');
?>