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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style_h.css">
    <title>Кругляши</title>
</head>
<body class="<?php echo $now[0] ?>">
<?php include ("header.php");?>
<section class="content <? echo $now[2]?>">
    <div class="z2">
        <div class="cir"></div>
        <div class="cir"></div>
        <div class="cir"></div>
        <div class="cir"></div>
        <div class="cir"></div>
    </div>
    <div class="sect">
        <div class="z3">
            <div class="cir"></div>
            <div class="cir"></div>
            <div class="cir"></div>
            <div class="cir"></div>
            <div class="cir"></div>
        </div>
        <div class="z4">
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
            <div class="cir1"></div>
        </div>
        <div class="z5">
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
            <div class="cir2"></div>
        </div>

    </div>
</section>
</body>
</html>