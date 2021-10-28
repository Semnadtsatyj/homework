<?php


class Registration
{
    public $message;
    private $form = <<<FORM
 <form method="post">
            <textarea name="comments" rows="10" cols="48"></textarea>
            <p><button type="submit">Отправить</button></p>
        </form>
FORM;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function message($message) {
        if (isset($message)) {
            $message = trim($message);
            if (mb_strlen($message) < 5) {
                echo "Сообщение не отправлено.<br> Ваше сообщение должно содержать не менее 5 символов.<br> $this->form";
            } else {
                echo "Ваше сообщение отправлено";
                return mail("seregas.82@mail.ru", "New message", $message);
            }
        }
        else {
            echo "Добро пожаловать на мой сайт. <br> Отправьте мне сообщение. <br>";
            echo "<p>$this->form</p>";
        }
    }
}
