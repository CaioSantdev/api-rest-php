<?php 

namespace Controllers;
require_once ("vendor/autoload.php");
use Models\UserModel;

Class UserController {

    function cadastro ($jsonObject) {
        $user = new UserModel ();

        $data = json_decode ($jsonObject , true);
        $nome = $data ["nome"];
        $email = $data ["email"];
        $password = $data ["password"];

        $user = $user -> cadastro ($nome,$email , $password);

        if (isset ($user [0])) {
            
            $data = [
                "name" => $user [0] ["Nome"],
                "email" => $user [0] ["Email"],
                "password" => $user [0] ["Senha"]
            ];
            
            $data = json_encode ($data);

            return $data;
        }
    }

}

?>