<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
</head>


<body>


    <header class="header">
        <div class="header_bg">
            <div class="conteiner">
                <div class="header_inner">
                    <a href="index.php" class="logo_link">
                        <img class="logo_img" src="img/logo.png" alt="">
                        <p class="logo_text"><b>PROTOVELO</b></p>
                    </a>
                    <nav class="menu">
                        <ul class="menu_list">
                            <li class="menu__item"><a class="menu_list-link" href="#">О ВЕЛОСИПЕДАХ</a></li>
                            <li class="menu__item"><a class="menu_list-link" href="index.php#about_us">О НАС</a></li>
                            <li class="menu__item"><a class="menu_list-link" href="index.php#brend_anchor">БРЕНДЫ</a></li>
                            <li class="menu__item"><a class="menu_list-link" href="#reverse_bg">ОБРАТНАЯ ФОРМА СВЯЗИ</a></li>
                        </ul>
                    </nav>
                    <div class="menu_call">
                        <?php error_reporting(0);
                        if ($_COOKIE['user'] == "") : ?>
                            <a class="menu_auth" href="#auth_all"><b>Войти</b></a>
                        <?php else : ?>
                            <a class="menu_auth" href="exit.php"><b>Выйти</b></a>
                        <?php endif; ?>
                        <a class="phone" href="tel:89051164451"><b>8 (905) 116 44 51</b></a>
                    </div>
                </div>
            </div>
        </div>
    </header>