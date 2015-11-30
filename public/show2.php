<?php
require 'top.php';

$id = $_GET['id'];

echo file_get_contents('posts/' . $id);

require 'bottom.php'; ?>
