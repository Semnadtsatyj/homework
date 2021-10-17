<?php
date_default_timezone_set("Asia/Yekaterinburg");
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
$style = timeStyle($val);
//сообщение
$form = <<<FORM
 <form action="" method="post">
            <textarea name="comments" rows="10" cols="48"></textarea>
            <p><button type="submit">Отправить</button></p>
        </form>
FORM;
$message = $_POST['comments'];
function message($message, $form) {
    if (isset($message)) {
        $message = trim($message);
        if (mb_strlen($message) < 5) {
            echo "Сообщение не отправлено.<br> Ваше сообщение должно содержать не менее 5 символов.<br> $form";
        } else {
            echo "Ваше сообщение отправлено";
            return mail("seregas.82@mail.ru", "New message", $message);
        }
    }
    else {
        echo "Добро пожаловать на мой сайт. <br> Отправьте мне сообщение. <br>";
        echo "<p>$form</p>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleReg.css">
    <title>Добро пожаловать</title>
</head>
<body class="<?php echo $style[0]; ?>">
<?php include("header.php"); ?>
<section class="container">
    <section class="registr <?echo $style[2]?>">
        <p class="formFild"><?message($message, $form);?></p>
    </section>
</section>
</body>
</html>


