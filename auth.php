<?php
$login = filter_var(trim($_POST['auth_login']));
$pass = filter_var(trim($_POST['auth_pass']));

$pass =md5($pass."zasolil");

$mysql = new mysqli('localhost','root','','register_bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if($user == 0)  {
    echo "Нет такого пользователя";
    exit();
}

setcookie('user', $user['name'], time() + 60, "/");

$mysql->close();

header("Location: index.php");
?>