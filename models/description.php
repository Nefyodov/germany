<?php
class Description
{
    protected $table = 'description';

    public static function connection()
    {
        try {
            $DBH = new PDO("mysql:host=DBHOST;dbname=DBNAME", DBUSER, DBPASSWORD);
            $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch(PDOException $e) {
            file_put_contents('../logs/PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        }
    }

    public static function tableColums($address)
    {
        Description::connection();
        $STH = $DBH->query('SELECT description.id,`address`, `location`, `room nr`, `space`,`purpose`,`cost`,rental.comments FROM `description`
                            LEFT JOIN `rental`
                            ON description.id=rental.id_description
                            WHERE rental.model=\'plan\' 
                            AND rental.month=\'April\' 
                            AND address=\'Duisburger Str. 101\'');
         
    }
}

