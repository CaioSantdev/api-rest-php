<?php 

use Controllers\UserController;


$user = new UserController ();
$resultado = $user->listar();
echo $resultado;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuarios</title>
</head>
<body>

</body>
</html>