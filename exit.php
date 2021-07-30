<?php
setcookie('user', $user['name'], time() - 600, "/");
header("Location: index.php")
?>