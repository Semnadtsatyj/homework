<?php
class MyTheme
{
    public function changeTheme()
    {
        switch (isset($_POST)) {
            case $_SESSION['light']:
                $now = array('d1', 'd2', 'd3', 'd4');
                break;
            case $_SESSION['dark']:
                $now = array('n1', 'n2', 'n3', 'n4');
                break;
            default:
                $now = array('d1', 'd2', 'd3', 'd4');
        }
        return $now;
    }
}

class DataBase
{
    private $hostname = 'localhost';
    private $username = 'Sergey';
    private $password = 'Myphp.';
    private $dbname = 'my_site';
    private $db_connect;
    private $db_select;
    public $arrDbSelect;

    public function getConnect()
    {
        if ($this->db_connect == null) {
            $this->db_connect = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname) or die
            ("Соединение не 
           установлено");
            mysqli_set_charset($this->db_connect, 'UTF8');
            $this->db_select = mysqli_query($this->db_connect, "SELECT * FROM users");
            $this->arrDbSelect = mysqli_fetch_all($this->db_select, MYSQLI_ASSOC);
        }
        return $this->arrDbSelect;
    }
}

class EnterSite
{
    public $login;
    public $password;
    private $arrDbSelect; //Том, Ann, Sam

    //123, 4321, 1432

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->arrDbSelect = new DataBase;
    }

    public function enterSite($login, $password)
    {
        $hello = "Hello.php";
        $this->arrDbSelect->getConnect();
        if (count($login) > 0 || count($password) > 0) {
            $login = trim($login);
            $password = trim($password);
            if ($login == '') {
                return "Введите \"Имя пользователя\"";
            } else if ($password == '') {
                return "Введите \"пароль\"";
            } else {

            }
            if ($this->login_true($login) === true && $this->password_true($password) === true) {
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

    private function login_true($login)
    {
        $arr = $this->arrDbSelect->getConnect();
        foreach ($arr as $value) {
            if ($value['login'] === md5($login)) {
                return true;
            }
        }
    }

    private function password_true($password)
    {
        $arr = $this->arrDbSelect->getConnect();
        foreach ($arr as $value) {
            if ($value['password'] === md5($password)) {
                return true;
            }
        }
    }
}

