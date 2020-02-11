<?php

$connection = mysqli_connect(
  'localhost', 'root', '', 'workbinder'
);

// for testing connection
#if($connection) {
#  echo 'database is connected';
#}

?>
