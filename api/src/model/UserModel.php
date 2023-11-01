<?php 

namespace Models;
require_once ("vendor/autoload.php");
use Connections\Connection;
use PDO;

Class UserModel {


    function cadastro ($nome,$email , $password) {
        $connection = new Connection ();
        $sql = $connection -> connect () -> query ("INSERT INTO users (nome,email,senha) VALUES ('$nome','$email','$password')");
        $sql = $sql -> fetchAll (PDO::FETCH_ASSOC);
        return $sql;
    }


}

?>