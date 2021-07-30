<?php 

$login = filter_var(trim($_POST['register_login']));
$name = filter_var(trim($_POST['register_name']));
$pass = filter_var(trim($_POST['register_pass']));

$pass = md5($pass."zasolil");

$mysql = new mysqli('localhost','root','','register_bd');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

$mysql->close();

header('Location: index.php')
?>