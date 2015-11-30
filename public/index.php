<?php require 'top.php'; ?>
<form action="login.php" method="post">
    <label for="email">E-mail: </label>
    <input type="text" name="email"><br>
    <label for="senha">Senha: </label>
    <input type="password" name="senha"><br>
    <input type="submit" value="Acessar">
</form>
<a href="form-forgot.php">Esqueci a senha</a> &nbsp;&nbsp;<a href="form-register.php">Nova conta</a>
<?php require 'bottom.php'; ?>
