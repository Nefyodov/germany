<?php
class View
{
    public function render($filename, $data=null)
    {
        require_once 'views/'.$filename.'.php';
    }
}