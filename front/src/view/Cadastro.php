<?php 

use Controllers\UserController;

// aqui se ocorrer um post criamos um objeto da controller e chamamos a função passando os campos desejados

if ($_POST) {
    $user = new UserController ();

    $user = $user -> cadastro ($_POST["nome"],$_POST ["email"] , $_POST ["password"]);
    echo ($user);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulário de Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #292929;">

<div class="container mt-5" style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); background-color: #f0f0f0;">
    <h2 style="color: #ffc107;">Formulário de Registro</h2>
    <form method="POST">
        <div class="form-group">
            <label for="nome" style="color: #ffc107;">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Informe seu nome" name="nome">
        </div>
        <div class="form-group">
            <label for="email" style="color: #ffc107;">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Informe seu email" name="email">
        </div>
        <div class="form-group">
            <label for "senha" style="color: #ffc107;">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="Crie uma senha" name="password">
        </div>
        <button type="submit" class="btn btn-warning">Registrar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
