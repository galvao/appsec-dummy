<?php
require 'top.php';
require 'dbopen.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM user WHERE email='$email' AND senha='$senha'";

$result = mysql_query($sql);

if (mysql_affected_rows($conn) > 0) {
    $_SESSION['authenticated'] = true;
}

while ($record = mysql_fetch_assoc($result)) {
    $_SESSION['UID'] = $record['id'];
}

require 'dbclose.php';
require 'bottom.php'; ?>
