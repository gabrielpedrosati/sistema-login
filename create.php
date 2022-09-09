<h2>Cadastrar Usuários</h2>

<?php
    require './Conn.php';
    require './User.php';

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(isset($formData['SendCreate'])){
    var_dump($formData);
    }
?>

<form action="#" method="POST">
    <label for="user">Usuário: </label>
        <input type="text" name="user"><br>
    <label for="password">Senha: </label>
        <input type="password" name="password"><br>

        <input type="submit" name="SendCreate">
</form>
