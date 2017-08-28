<?php
require_once 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

define('DBHOST','127.0.0.1');
define('DBNAME','germanyMVC');
define('DBUSER','nefyodov');
define('DBPASSWORD','46225778');


//$capsule = new Capsule;
//
//$capsule->addConnection([
//    'driver'    => 'mysql',
//    'host'      => '127.0.0.1',
//    'database'  => 'germanyMVC',
//    'username'  => 'nefyodov',
//    'password'  => '46225778',
//    'charset'   => 'utf8',
//    'collation' => 'utf8_general_ci',
//    'prefix'    => '',
//]);
//
//// Make this Capsule instance available globally via static methods... (optional)
//$capsule->setAsGlobal();
//
//// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
//$capsule->bootEloquent();
