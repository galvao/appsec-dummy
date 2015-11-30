<?php
require 'top.php';
require 'dbopen.php';
?>
<table>
<?php

$sql = "SELECT * FROM post";

$result = mysql_query($sql);

while ($record = mysql_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td><a href="show.php?id=' . $record['id'] . '">' . $record['titulo'] . '</a></td>';
    echo '</tr>';
}

require 'dbclose.php';
?>
</table>
<?php
require 'bottom.php'; ?>
