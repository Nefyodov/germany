<?php
class User extends \Illuminate\Database\Eloquent\Model
{
    public static function getAUsers()
    {
        return User::where('login','like','i%')->get();
    }
}