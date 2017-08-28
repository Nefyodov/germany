<?php
class Users
{
    public static function checkUsers($login)
    {
        try {
            $host = DBHOST;
            $name = DBNAME;
            $pdo = new PDO("mysql:host=$host;dbname=$name", DBUSER, DBPASSWORD);
            $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

            $stmt = $pdo->prepare("SELECT `login`,`password`,`access` FROM users WHERE `login` = ?");
            $stmt->execute([$login]);
            return $stmt->fetchAll();
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}