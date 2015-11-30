<?php
require 'top.php';

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

file_put_contents('posts/' . time() . '.html', "$titulo<br><br>$texto");

echo 'ok';

require 'bottom.php'; ?>
