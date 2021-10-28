<?php
session_start();
ob_start();

require 'siteClass.php';

$login = $_POST['login'];
$password = $_POST['password'];

$Enter = new EnterSite($login, $password);
?>

<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleReg.css">
    <title>Авторизация</title>
</head>
<body class="d1">
<section class="container">
    <section class="d3 registr">
        <form action="" method="post" class="windowReg">
            <p class="message"><? echo $Enter->enterSite($login, $password); ?></p>
            <p class="formFild">
                Имя пользователя <input type="text" name="login">
            </p>
            <p class="formFild">
                Пароль <input type="password" name="password">
            </p>
            <p class="formFild">
                <button type="submit">Отправить</button>
            </p>
            <p class="formFild">Или <a href="#openModal">зарегистрируйтесь.</a></p>
        </form>
    </section>
</section>

<!-- Модальное Окно регистрации-->
<div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Регистрация</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                <p class="formFild">Введите ваши данные</p>
                <form action="" method="post" class="windowReg">
                    <p class="message"></p>
                    <p class="formFild">
                        Имя пользователя <input type="text" name="login_reg">
                    </p>
                    <p class="formFild">
                        Пароль <input type="password" name="password_reg">
                    </p>
                    <p class="formFild">
                        <button type="submit">Отправить</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
        console.log(scrollbar);
        document.querySelector('[href="#openModal"]').addEventListener('click', function () {
            document.body.style.overflow = 'hidden';
            document.querySelector('#openModal').style.marginLeft = scrollbar;
        });
        document.querySelector('[href="#close"]').addEventListener('click', function () {
            document.body.style.overflow = 'visible';
            document.querySelector('#openModal').style.marginLeft = '0px';
        });
    });
</script>
</body>
</html>
