<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Index PHP</h2>

    <a href="#">Listar Usuários</a><br>
    <a href="create.php">Cadastrar Usuários</a><br>

    <?php
        require './Conn.php';
        require './User.php';

        $u1 = new User();
        $u1->listUsers();

    ?>

</body>
</html>