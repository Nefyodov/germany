<?php
class Login
{
    private $loginInDB;
    private $loginInForm;

    public function index()
    {
        if (!empty($_COOKIE['login']))
        {
            header('Location: menu');
        }
        elseif (empty($_COOKIE['login']) and !empty($_POST['login']) and $this->checkUserInDB())
        {
            $this->relocateMenu();
        }
        else
        {
            $view = new View();
            $view->render('login/index');
        }
    }
    private static function getLoginInfo()
    {
        if (empty($_POST['login'])){return;}
        else
        {
            $loginInForm['login'] = htmlspecialchars(trim($_POST['login']));
            $loginInForm['password'] = htmlspecialchars(trim($_POST['password']));
            return $loginInForm;
        }
    }
    private function setClassVariable()
    {
        $this->loginInForm = self::getLoginInfo();
        $this->loginInDB = Users::checkUsers($this->loginInForm['login']);
    }
    private function checkUserInDB()
    {
        $this->setClassVariable();
        return password_verify($this->loginInForm['password'],$this->loginInDB['0']['password']);
    }
    private function createCookie()
    {
        if (!$this->checkUserInDB()){
            return false;
        }else{
            $access = $this->loginInDB['0']['access'];
            $auth = base64_encode(serialize($access));
            setcookie("login",$auth,time()+86400,'/');
        }
    }
    private function relocateMenu()
    {
        $this->createCookie();
        header('Location: menu');
    }
    public function testingMethod(){
        if ($this->checkUserInDB()){
            $a = 'ok';
            return $a;
        }else{
            $a='no';
            return $a;
        }
    }

}