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


    $stmt = $pdo->prepare('SELECT description.id,`address`, `location`, `room nr`, `space`,`purpose`,`cost`,rental.comments FROM `description`
                                    LEFT JOIN `rental`
                                    ON description.id=rental.id_description
                                    WHERE rental.model=\'plan\' 
                                    AND rental.month=? 
                                    AND address=?');
    $stmt->execute(["$month","$address"]);
    return $stmt->fetchAll();
    }
}

