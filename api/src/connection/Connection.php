<?php 

namespace Connections;
require_once ("vendor/autoload.php");
use PDO;

Class Connection {

    function connect () {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $base = 'api-rest';

        $pdo = new PDO("mysql:host={$host};dbname={$base};chaset=UTF8;",$user,$pass);
        return $pdo;
    }

}

?>