<?php
$db = new mysqli('localhost', 'root', '', 'testdb');

if (mysqli_connect_errno()) {
    echo 'connect failed: '.mysqli_connect_errno();
} else {
    echo 'connected !';
}
?>
