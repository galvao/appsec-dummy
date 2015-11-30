<?php
require 'top.php';
require 'dbopen.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO user (email, senha) VALUES ('$email', '$senha')";

$result = mysql_query($sql);

if (mysql_affected_rows($conn) > 0) {
    echo "OK";
}

require 'dbclose.php';
require 'bottom.php'; ?>
