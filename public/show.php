<?php
require 'top.php';
require 'dbopen.php';

$id = $_GET['id'];

$sql = "SELECT * FROM post WHERE id=$id";

$result = mysql_query($sql);

while ($record = mysql_fetch_assoc($result)) {
    echo $record['titulo'] . '<hr>';
    echo $record['texto'];
}

require 'dbclose.php';
?>
</table>
<?php
require 'bottom.php'; ?>
