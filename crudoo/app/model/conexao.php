<?php
namespace app\model;
class conexao{
private static $instance;
public static function getconn()
{
    if (!isset(self::$instance)): 
        self::$instance = new \PDO('mysql:host=localhost;dbname=pdo; charset=utf8','root','');   
    endif;
    return self::$instance; 
    
}
}