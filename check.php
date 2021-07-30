<?php 
$to = "Qrow823@mail.ru";
$email = $_POST['email'];
$message = $_POST['message'];
$error = '';

if(trim($email) == '')
$error = 'Введите ваш email';
else if(trim($message) == '')
$error = "Введите само сообщение";
else if(strlen($message) < 10)
$error = "Сообщение должно быть не менее 10 символов";

if($error != '') {
    print $error;
    exit;
};


$subject = "Заголовок письма";


mail($to, $subject, $message);

header('Location: index.php')

?>