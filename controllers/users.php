<?php
class Users
{
    public function index()
    {
        $data['users'] = User::getAUsers();
        $data['title'] = 'Hello';
        $view = new View();
        $view->render('users/index',$data);
    }
    public function test()
    {
        echo 'testusers';
    }
}