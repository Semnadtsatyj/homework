<?php
session_start();
require 'regClass.php';

$message = $_POST['comments'];
$registration = new Registration($message);

/*function message($message, $form) {
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
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleReg.css">
    <title>Добро пожаловать</title>
</head>
<body>
<?php require 'header.php'; ?>
<section class="container">

    <section class="registr <? echo $changeTheme->changeTheme()[2]; ?>">
        <p class="formFild"><?$registration->message($message);?></p>
    </section>
    </section>
</body>
</html>


