<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style_t.css">
    <title>Таблица Менделеева</title>
</head>
<body>
<?php include ("header.php");?>
<table>
    <caption>Выписка из таблицы Менделеева</caption>
    <tr>
        <td class="purple">
            <p class="lat">Li</p>
            <p class="name">Литий</p>
            <p class="num">3</p>
            <p class="mass">6,939</p>
        </td>
        <td class="purple">
            <p class="lat">Be</p>
            <p class="name">Бериллий</p>
            <p class="num">4</p>
            <p class="mass">9,0122</p>
        </td>
        <td class="yellow">
            <p class="lat">B</p>
            <p class="name">Бор</p>
            <p class="num">5</p>
            <p class="mass">10,811</p>
        </td>
        <td class="yellow">
            <p class="lat">C</p>
            <p class="name">Углерод</p>
            <p class="num">6</p>
            <p class="mass">12,1115</p>
        </td>
    </tr>
    <tr>
        <td class="purple">
            <p class="lat">Na</p>
            <p class="name">Натрий</p>
            <p class="num">11</p>
            <p class="mass">22,9898</p>
        </td>
        <td class="purple">
            <p class="lat">Mg</p>
            <p class="name">Магний</p>
            <p class="num">12</p>
            <p class="mass">24,312</p>
        </td>
        <td class="yellow">
            <p class="lat">Al</p>
            <p class="name">Алюминий</p>
            <p class="num">13</p>
            <p class="mass">26,9815</p>
        </td>
        <td class="yellow">
            <p class="lat">Si</p>
            <p class="name">Кремний</p>
            <p class="num">14</p>
            <p class="mass">28,086</p>
        </td>
    </tr>
    <tr>
        <td class="purple">
            <p class="lat">K</p>
            <p class="name">Калий</p>
            <p class="num">19</p>
            <p class="mass">39,102</p>
        </td>
        <td class="purple">
            <p class="lat">Ca</p>
            <p class="name">Кальций</p>
            <p class="num">20</p>
            <p class="mass">40,08</p>
        </td>
        <td class="blue">
            <p class="num_bl">21</p>
            <p class="mass_bl">44,956</p>
            <p class="lat_bl">Sc</p>
            <p class="name_bl">Скандий</p>
        </td>
        <td class="blue">
            <p class="num_bl">22</p>
            <p class="mass_bl">47,90</p>
            <p class="lat_bl">Ti</p>
            <p class="name_bl">Титан</p>
        </td>
    </tr>
    <tr>
        <td class="blue">
            <p class="num_bl">29</p>
            <p class="mass_bl">63,546</p>
            <p class="lat_bl">Cu</p>
            <p class="name_bl">Медь</p>
        </td>
        <td class="blue">
            <p class="num_bl">30</p>
            <p class="mass_bl">65,37</p>
            <p class="lat_bl">Zn</p>
            <p class="name_bl">Цинк</p>
        </td>
        <td class="yellow">
            <p class="lat">Ga</p>
            <p class="name">Галий</p>
            <p class="num">31</p>
            <p class="mass">69,72</p>
        </td>
        <td class="yellow">
            <p class="lat">Ge</p>
            <p class="name">Германий</p>
            <p class="num">32</p>
            <p class="mass">72,59</p>
        </td>
</table>
</body>
</html>