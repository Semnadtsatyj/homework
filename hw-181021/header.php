<?php
session_start();
//setcookie('fact', 'fact', time()+3600);
$_SESSION['light'] = $_POST['light'];
$_SESSION['dark'] = $_POST['dark'];
//var_dump($_SESSION['dark']);
switch (isset($_POST)) {
    case $_SESSION['light']:
        $now = array('d1', 'd2', 'd3', 'd4');
        break;
    case $_SESSION['dark']:
        $now = array('n1', 'n2', 'n3', 'n4');
        break;
}
/*$_SESSION['fact'] = $_POST['fact'];
if (isset ($GET['fact'])){
    var_dump($_GET['fact']);
}
$_SESSION['bitrix'] = $_POST['bitrix'];
var_dump($_SESSION['bitrix']);*/

if (isset($_SESSION['login'])) {
    echo "hello" . $_SESSION['login'];
} else {
    echo "hello stranger";
}

if (isset($_SESSION['login'])) {
    if (isset ($_POST['submit'])) {
        unset($_SESSION['login']);
        echo '<meta http-equiv="refresh" content="2; url="></head>';
    }
}

//print_r($_COOKIE);

/*switch (!empty($_GET)) {
    case $_SESSION['bitrix'];
        echo "Вы посещали битрикс";
        break;
    case $_SESSION['fact'];
        echo "Вы посещали факт";
        break;
}*/
/*date_default_timezone_set("Asia/Yekaterinburg");
//date_default_timezone_set("America/Los_Angeles");
$val = date(G);
if ($val >= 0 && $val < 8 || $val > 19) {
    $now = array ('n1', 'n2', 'n3', 'n4');
}
else {
    $now = array ('d1', 'd2', 'd3', 'd4');
}*/
?>
<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_head.css">
    <title>Домашнее задание</title>
</head>
<body class="<?php echo $now[0] ?>">
<header class="<? echo $now[2] ?>">Домашнее задание
    <nav class="menu">
        <ul class="menu_block">
            <li class="menu_element <? echo $now[1] ?>"><a href="index.php">Главная</a></li>
            <li class="menu_element <? echo $now[1] ?>"><a href="login.php">Регистрация</a></li>
            <li class="menu_element <? echo $now[1] ?> parent">Выберите ресурс
                <ul class="dropdown">
                    <li class="drop_element1 <? echo $now[1] ?>"><a href="https://school.fact.digital/" id="fact"
                        >Школа-Факт</a></li>
                    <li class="drop_element <? echo $now[1] ?>"><a href="https://www.1c-bitrix.ru/"
                                                                   id="bitrix">Bitrix</a></li>
                </ul>
            </li>
            <li class="menu_element <? echo $now[1] ?> parent">Задачи PHP
                <ul class="dropdown">
                    <li class="drop_element3 <? echo $now[1] ?>"><a href="table.php">Таблица</a></li>
                    <li class="drop_element2 <? echo $now[1] ?>"><a href="circle.php">Кругляши</a></li>
                    <li class="drop_element2 <? echo $now[1] ?>"><a href="task.php">Массивы</a></li>
                </ul>
            </li>
            <li class="menu_element <? echo $now[1] ?>">
                <form method="post">Смена темы
                    <input type="radio" name="light" value="light">L</input>
                    <input type="radio" name="dark" value="dark">D</input>
                    <input type="submit" value="Выбрать">
                </form>
            </li>
            <li class="menu_element <? echo $now[1] ?>">
                <form method="post">
                    <input type="submit" value="Выход" name="submit">
                </form>
            </li>
        </ul>

    </nav>
</header>
</body>
</html>
