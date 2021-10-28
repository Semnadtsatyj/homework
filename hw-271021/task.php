<?php
session_start();
/*date_default_timezone_set("Asia/Yekaterinburg");
//date_default_timezone_set("America/Los_Angeles");
$val = date(G);
if ($val >= 0 && $val < 8 || $val > 19) {
    $now = array('n1', 'n2', 'n3', 'n4');
} else {
    $now = array('d1', 'd2', 'd3', 'd4');
}
//Задача №2
$arr1 = array();
for ($i = 1; $i < 7; $i++) {
    $a = mt_rand(0, 100);
    $arr1[] = $a;
}*/


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style_task.css">
    <title>Document</title>
</head>
<body>
<?php include("header.php"); ?>
<section class="<? echo $changeTheme->changeTheme()[2];?>">
    <h2>Задача №1</h2>
    <? $arr = array(
        'Ivanovs' => array('Ivan', 'Kate', 'Tom'),
        'Petrovs' => array('Bob', 'Ann', 'Tanya'),
        'Smith' => array('Kate', 'Same'));
    foreach ($arr as $fam => $value) {
        echo " <p>В семье " . $fam . " " . count($value) . " человека.</p>";
    }
    ?>
    <p>А вообще, если считать по именам, смотрите что получается:
        <? $mer = array_merge($arr['Ivanovs'], $arr['Petrovs'], $arr['Smith']);
        $order = array_count_values($mer);
        foreach ($order as $key => $man) {
            echo $key . " (" . $man . "), ";
        }
        ?>
    </p>
</section>
<section class="<?php echo $changeTheme->changeTheme()[2]; ?>">
    <h2>Задача №2</h2>
    <?$arr1 = [14, 32, 81, 22, 91, 72];?>
    <p><?foreach ($arr1 as $value1) {
        if ($value1 % 2 == 1) {
        echo "<p>$value1 <br></p>";
        }
        else {
        echo "<p><b>$value1</b><br></p>";
        }
        }?></p>
</section>
<section class="<?php echo $changeTheme->changeTheme()[2]; ?>">
    <h2>Задача №3</h2>
    <p><?$arr3 = ['fruit' => ['orang', 'linom', 'apple', 'kiwi', 'apricot'],
        'name' => ['Sam', 'Anthony', 'George', 'Andrew', 'Jason']];
        $mer_ar = array_merge($arr3['fruit'], $arr3['name']);
        foreach ($mer_ar as $valm) {
        if (strtolower($valm{0}) == 'a') {
            echo $valm . ', ';
        }
        }?>
    </p>
</section>
<section class="<?php echo $changeTheme->changeTheme()[2]; ?>">
    <h2>Задача №4</h2>
<? $arr4 = [ [1, 2, 3, 4, 5], [6, 7, 8, 9,], [10, 11, 12], [13, 14], [15]];
$summ = 0;
foreach ($arr4 as $key => $val4) {
            $num = ++$key;
            $summ += count($val4);
            echo "<p>Количество элементов " . $num . " измерения равно " . count($val4) . "</p>";
        }
echo "<p>Общее количество элеменов в массиве равно " .$summ. "</p>";
?>

</section>
</body>
</html>
