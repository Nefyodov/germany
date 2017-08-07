<?php
class Users extends \Illuminate\Database\Eloquent\Model
{
    public static function checkUsers($login)
    {
        return Users::where('login','=',"$login")
                    ->select([
                        'login',
                        'password',
                        'access'
                    ])
                    ->get();
    }
}