<?php require 'top.php'; ?>
<form action="register.php" method="post">
    <label for="email">E-mail: </label>
    <input type="text" name="email"><br>
    <label for="senha">Senha: </label>
    <input type="password" name="senha"><br>
    <label for="senha">Repita a Senha: </label>
    <input type="password" name="confirmacao_senha"><br>
    <input type="submit" value="Cadastrar">
</form>
<?php require 'bottom.php'; ?>
