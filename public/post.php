<?php
require 'top.php';
require 'dbopen.php';

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$sql = "INSERT INTO post(user_id, titulo, texto) VALUES (" . $_SESSION['UID'] . ", '$titulo', '$texto')";

$result = mysql_query($sql);

if (mysql_affected_rows($conn) > 0) {
    echo "OK";
}

require 'dbclose.php';
require 'bottom.php'; ?>
