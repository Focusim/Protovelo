<footer class="footer">
    <div class="conteiner">
        <div class="footer_all">
            <a class="footer_logo-link" href="index.php">
                <img class="logo_img" src="img/logo.png" alt="">
                <p class="logo_text"><b>PROTOVELO</b></p>
            </a>
            <div class="footer_menu">
                <h2 class="footer_head">ВЕЛОСИПЕДЫ</h2>
                <ul>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Шоссейные</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Гравел, кроссовые</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Для триатлона и ТТ</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Городские</a></li>
                </ul>
            </div>
            <div class="footer_menu">
                <h2 class="footer_head">ЗАПЧАСТИ</h2>
                <ul>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Группы оборудования</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Колёса</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Манетки, тормозные ручки</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Шатуны и передние звёзды</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Переключатели скоростей</a></li>
                </ul>
            </div>
            <div class="footer_menu">
                <h2 class="footer_head">ВЕЛООДЕЖДА</h2>
                <ul>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Веломайки</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Велотрусы</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Велокуртки</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Велорейтузы</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Велокомбинезоны</a></li>
                </ul>
            </div>
            <div class="footer_menu">
                <h2 class="footer_head">АКСЕССУАРЫ</h2>
                <ul>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Шлемы</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Велоочки</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Велостанки</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Измерители мощности</a></li>
                    <li class="footer_menu-li"><a class="footer_menu-link" href="#">Велокомпьютеры</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--Обратная форма начало-->
<div id="reverse_bg">
    <div id="reverse">
        <form class="reverse_form" action="check.php" method="post">
            <input class="reverse_input" type="email" name="email" placeholder="Введите Email">
            <textarea class="reverse_text" name="message" placeholder="Введите ваше сообщение"></textarea>
            <button class="reverse_btn" type="submit" name="send">Отправить</button>
        </form>
        <a href="#" class="reverse_close">Закрыть</a>
    </div>
</div>
<!--Обратная форма конец-->
<!--Вход начало-->
<div id="auth_all">
    <div id="auth">
        <form class="auth_form" action="auth.php" method="post">
            <input class="auth_input" type="text" name="auth_login" placeholder="Логин">
            <input class="auth_input" type="password" name="auth_pass" placeholder="Пароль">
            <a class="register_link" href="#register_all">Регистрация</a>
            <button class="auth_btn" type="submit" name="entry">Войти</button>
        </form>
        <a href="#" class="auth_close">Закрыть</a>
    </div>
</div>
<!--Вход конец-->
<!--Регистрация начало-->
<div id="register_all">
    <div id="register">
        <form class="register_form" action="register.php" method="post">
            <input class="register_input" type="text" name="register_login" placeholder="Логин">
            <input class="register_input" type="text" name="register_name" placeholder="Имя">
            <input class="register_input" type="password" name="register_pass" placeholder="Пароль">
            <a class="auth_link" href="#auth_all">Уже есть аккаунт?</a>
            <button class="register_btn" type="submit" name="create">Зарегестрироваться</button>
        </form>
        <a href="#" class="register_close">Закрыть</a>
    </div>
</div>
<!--Регистрация конец-->
<!--Соц сети начало-->
<div class="socials_fix">
    <a class="socials_fix-link" href="#" target="_blank"><img class="socials_fix-img" src="img/youtube_f.svg"></a>
    <a class="socials_fix-link" href="#" target="_blank"><img class="socials_fix-img" src="img/instagram_f.svg"></a>
    <a class="socials_fix-link" href="#" target="_blank"><img class="socials_fix-img" src="img/facebook_f.svg"></a>
</div>
<!--Соц сети конец-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>


</html>