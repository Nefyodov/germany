<?php
class Description
{
    public static function tableColums($address,$month)
    {
    $host = DBHOST;
    $name = DBNAME;
    $pdo = new PDO("mysql:host=$host;dbname=$name", DBUSER, DBPASSWORD);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );


    $stmt = $pdo->prepare('SELECT description.id,`address`, `location`, `room nr`, `space`,`rent_plan`,`costs_plan`,`heating_plan`,`cable_TV`,rent.comments FROM `description`
                                    LEFT JOIN `rent`
                                    ON description.id=rent.id_description
                                    WHERE rent.model=\'plan\' 
                                    AND rent.month=? 
                                    AND address=?');
    $stmt->execute(["$month","$address"]);
    return $stmt->fetchAll();
    }
}

