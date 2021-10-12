<?php
date_default_timezone_set("Asia/Yekaterinburg");
//date_default_timezone_set("America/Los_Angeles");
$val = date(G);
if ($val >= 0 && $val < 8 || $val > 19) {
    $now = array ('n1', 'n2', 'n3', 'n4');
}
else {
    $now = array ('d1', 'd2', 'd3', 'd4');
}
?>
<!DOCTYPE html>
<html lang="ru">
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
            <li class="menu_element <? echo $now[1] ?>" ><a href="index.php">Главная</a></li>
            <li class="menu_element <? echo $now[1] ?>"><a href="table.php">Про Менделеева</a></li>
            <li class="menu_element <? echo $now[1]?>"><a href="hamster.php">Веселые зверюшки</a></li>
            <li class="menu_element <?echo $now[1]?>"><a href="https://school.fact.digital/">Школа-Факт</a></li>
            <li class="menu_element <?echo $now[1]?>"><a href="circle.php">Кругляши</a></li>
            <li class="menu_element <?echo $now[1]?>"><a href="task.php">Задачи PHP</a></li>
        </ul>
    </nav>
</header>
</body>
</html>
