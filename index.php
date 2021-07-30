<?php
$bikeList = [
    [
        'name' => "Шоссейный велосипед Pinarello<br>PRINCE DISK TICR RED",
        'link' => "bike1.php",
        'image' => "1.jpg"
    ],
    [
        'name' => "Шоссейный велосипед Pinarello<br>PRINCE DISK TICR Di2 BOB",
        'link' => "bike2.php",
        'image' => "2.jpg"
    ],
    [
        'name' => "Велосипед для гравела Pinarello<br>GREVIL Di2 BOB",
        'link' => "bike3.php",
        'image' => "3.jpg"
    ],
    [
        'name' => "Велосипед для гравела Pinarello<br>GREVIL DELUX",
        'link' => "bike4.php",
        'image' => "4.jpg"
    ],
    [
        'name' => "Велосипед для гравела Pinarello<br>GREVIL BOB",
        'link' => "bike5.php",
        'image' => "5.jpg"
    ],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protovelo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
</head>


<body>
    <header class="header">
        <div class="start_bg">
            <div class="conteiner">
                <div class="header_inner">
                    <a href="index.php" class="logo_link">
                        <img class="logo_img" src="img/logo.png" alt="">
                        <p class="logo_text"><b>PROTOVELO</b></p>
                    </a>
                    <nav class="menu">
                        <ul class="menu_list">
                            <li class="menu__item"><a class="menu_list-link" href="#">О ВЕЛОСИПЕДАХ</a></li>
                            <li class="menu__item"><a class="menu_list-link" href="#about_us">О НАС</a></li>
                            <li class="menu__item"><a class="menu_list-link" href="#brend_anchor">БРЕНДЫ</a></li>
                            <li class="menu__item"><a class="menu_list-link" href="#reverse_bg">ОБРАТНАЯ ФОРМА СВЯЗИ</a></li>
                        </ul>
                    </nav>
                    <div class="menu_call">
                        <?php error_reporting(0); if($_COOKIE['user'] == "") : ?>
                            <a class="menu_auth" href="#auth_all"><b>Войти</b></a>
                            <?php else: ?>
                            <a class="menu_auth" href="exit.php"><b>Выйти</b></a>
                        <?php endif; ?>

                        <a class="phone" href="tel:89051164451"><b>8 (905) 116 44 51</b></a>
                    </div>
                </div>
                <div class="start_info">
                    <h1 class="start_text"><b>Protovelo</b></h1>
                    <img class="start_img" src="img/start_velo.png" alt="">
                    <p class="start_text1">Cамые лёгкие и быстрые</p>
                    <div class="start_social">
                        <a href=""><img class="social_img" src="img/facebook.png" alt=""></a>
                        <a href=""><img class="social_img" src="img/youtube.png" alt=""></a>
                        <a href=""><img class="social_img" src="img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="shop">
        <div class="conteiner">
            <div class="shop_block">

                <?php
                foreach ($bikeList as $i => $item) : ?>
                    <div class="block hov">
                        <a href="<?= $item['link'] ?>"><img class="block_img" src="img/<?= $item['image'] ?>" alt=""></a>
                        <p class="block_text"><?= $item['name'] ?></p>
                        <a class="block_link" href="<?= $item['link'] ?>">Подробнее</a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section class="bike_info">
        <a name="about_us"></a>
        <div class="conteiner">
            <div class="bike_bg">
                <div class="bike_df">
                    <div class="top top-item">
                        <div class="bike_slider-img">
                            <img class="bike_img-inner" src="img/velo_info1.png" alt="">
                        </div>
                        <div class="bike_slider-img">
                            <img class="bike_img-inner" src="img/velo_info2.png" alt="">
                        </div>
                        <div class="bike_slider-img">
                            <img class="bike_img-inner" src="img/velo_info1.png" alt="">
                        </div>
                        <div class="bike_slider-img">
                            <img class="bike_img-inner" src="img/velo_info2.png" alt="">
                        </div>
                    </div>
                    <div class="bike_text">
                        <p class="bike_text-inner">Веломагазин Protovelo<br>
                            Основное направление работы компании ProtoVelo - продажа спортивных велосипедов, а также велозапчастей и аксессуаров к ним.
                            Мы предлагаем решения, предназначенные для спортсменов продвинутого уровня и опытных любителей велоспорта.
                        </p>
                        <p class="bike_text-inner">В нашем веломагазине вы найдете оригинальную продукцию знаменитых на весь мир торговых марок - Pinarello,
                            Nalini, Astute, Kask, Pirelli, SRM, Fulcrum, Easton, Shimano, Miche и многих других. Их велосипеды, компоненты, запчасти очень
                            нелегко найти в продаже. Ведь это эксклюзивный товар, адресованный сравнительно небольшому количеству посвященных людей.
                        </p>
                        <p class="bike_text-inner">Компания «ПротоВело» была основана в Москве в 2005 году. Для нас велоспорт — тема более чем знакомая.
                            Основали фирму бывшие велогонщики, имеющие успешный опыт выступления за профессиональные команды Франции и Италии.
                        </p>
                        <p class="bike_text-inner">Наша цель - обеспечение спортивными велосипедами, велоодеждой, компонентами всех, кто заинтересован
                            в достижении выдающихся результатов. Мы предлагаем шоссейные, трековые, кроссовые, гравийные байки, модели для триатлона.
                            Они станут хорошим решением для индивидуальных или командных тренировок и выступлений.
                        </p>
                        <p class="bike_text-inner">Вы можете купить велосипед, соответствующий вашему классу подготовки, ознакомиться с нашим каталогом
                            велоодежды и аксессуаров.
                        </p>
                        <p class="bike_text-inner">Получить консультацию по выбору, узнать цену, оформить заказ можно по телефону
                            <a href="tel:89051164451"><b>8 (905) 116 44 51</b></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brend">
        <a name="brend_anchor"></a>
        <div class="conteiner">
            <div class="brend_content">
                <h1 class="brend_text">Бренды</h1>
                <div class="brend_content-inner">
                    <a class="brend_img" style="background-image: url(img/brend1.png)" href="#"></a>
                    <a class="brend_img" style="background-image: url(img/brend2.png)" href="#"></a>
                    <a class="brend_img" style="background-image: url(img/brend3.png)" href="#"></a>
                    <a class="brend_img" style="background-image: url(img/brend4.png)" href="#"></a>
                    <a class="brend_img" style="background-image: url(img/brend5.png)" href="#"></a>
                    <a class="brend_img" style="background-image: url(img/brend1.png)" href="#"></a>
                    <a class="brend_img" style="background-image: url(img/brend2.png)" href="#"></a>
                </div>
            </div>
        </div>
    </section>



    <?php require "blocks/footer.php" ?>