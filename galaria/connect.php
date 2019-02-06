<?php


$dsn = '' ; //host,dbname,options
$username = '';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
); 


$pdo = new PDO($dsn, $username, $password, $options);

?>