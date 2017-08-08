<?php
class Menu
{
    public function index()
    {
        $access = new AccessLevel();
        $langArray = $access->getLanguageArray();

        $data['menu'] = $langArray['menu'];
        $data['access'] = $access->sessionAccess;

        $view = new View();
        $view->render('menu/index',$data);
    }

    public function logout()
    {
        $access = new AccessLevel();
        $access->logout();
    }
}