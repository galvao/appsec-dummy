<?php require 'top.php'; ?>
<form action="post2.php" method="post">
    <label for="titulo">Título: </label>
    <input type="text" name="titulo"><br>
    <label for="texto">Texto: </label>
    <textarea cols="60" rows="30" name="texto"></textarea><br>
    <input type="submit" value="Cadastrar">
</form>
<?php require 'bottom.php'; ?>
