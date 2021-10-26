<?php
session_start();
ob_start();
/*date_default_timezone_set("Asia/Yekaterinburg");
//date_default_timezone_set("America/Los_Angeles");
$val = date(G);
function timeStyle($dat)
{
    if ($dat >= 0 && $dat < 8 || $dat > 19) {
        $now = ['n1', 'n2', 'n3', 'n4'];
    } else {
        $now = ['d1', 'd2', 'd3', 'd4'];
    }
    return $now;
}
$style = timeStyle($val);*/

//Авторизация
$hostname = 'localhost';
$username = 'Sergey';
$password = 'Myphp.';
$dbname = 'my_site';
$db_connect = mysqli_connect($hostname, $username, $password, $dbname) or die("Соединение не установлено");
mysqli_set_charset($db_connect, 'UTF8');
//var_dump(mysqli_connect_error());
$db_select = mysqli_query($db_connect, "SELECT * FROM users");
$arrDbSelect = mysqli_fetch_all($db_select, MYSQLI_ASSOC);
$login = $_POST['login'];
$password = $_POST['password'];
$login_true = login_true($arrDbSelect, $login); //Том, Ann, Sam
$password_true = password_true($arrDbSelect, $password); //123, 4321, 1432
function login_true($arrDbSelect, $login)
{
    foreach ($arrDbSelect as $value) {
        if ($value['login'] === md5($login)) {
            return true;
        }
    }
}

function password_true($arrDbSelect, $password)
{
    foreach ($arrDbSelect as $value) {
        if ($value['password'] === md5($password)) {
            return true;
        }
    }
}

function enterSite($login, $password, $login_true, $password_true)
{
    $hello = "Hello.php";
    if (count($login) > 0 || count($password) > 0) {
        $login = trim($login);
        $password = trim($password);
        if ($login == '') {
            return "Введите \"Имя пользователя\"";
        } else if ($password == '') {
            return "Введите \"пароль\"";
        } else {
            //$login = $_SESSION["name"] ?? null;
        }
        if ($login_true === true && $password_true === true) {
            $_SESSION['login'] = $login;
            header("Location: $hello");
            ob_end_flush();
        } else {
            return "Доступ закрыт. Вы ввели неправильное имя пользователя или пароль.";
        }
    } else {
        return "Для входа на сайт введите данные.";
    }
}
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
    <section class="registr d3">
        <form action="" method="post" class="windowReg">
            <p class="message"><? echo enterSite($login, $password, $login_true, $password_true) ?></p>
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
