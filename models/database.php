<?php
class Database extends PDO
{
    public function __construct()
    {
        $host = DBHOST;
        $name = DBNAME;
        parent::__construct("mysql:host=$host;dbname=$name", DBUSER, DBPASSWORD);
        parent::setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
    }
}