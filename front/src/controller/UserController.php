<?php 

namespace Controllers;
require_once ("vendor/autoload.php");
use Connections\Connection;

class UserController {

    function cadastro ($nome,$email , $password) {

        $api = new Connection ();
        $url = "http://localhost:8000/login";

        $data = [
            "nome" => $nome,
            "email" => $email,
            "password" => $password
        ];
        $data = json_encode ($data);
        $method = "post";

        $response = $api -> Api ($url, $method, $data);
        return $response;
    }
    function listar(){
        
        $api = new Connection();
        $url = "http://localhost:8000/listar";
        $data = [];

        $method = "get";

        $responde = $api -> Api($url,$method,json_encode($data));
        return $responde;
    }

}

?>