<?php
class Menu
{
    public function index()
    {
        $language = new Language();
        $data = $language->getLanguage();
        $view = new View();
        $view->render('menu/index',$data['menu']);
    }
}