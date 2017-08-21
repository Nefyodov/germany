<?php
class Menu
{
    public function index()
    {
        $access = new AccessLevel();
        $langArray = $access->getLanguageArray();

        $data['access'] = $access->sessionAccess;
        $data['menu'] = $langArray['menu'];

        $view = new View();
        $view->render('menu/index',$data);
    }

    public function logout()
    {
        $access = new AccessLevel();
        $access->logout();
    }
}