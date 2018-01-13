<?php


$dsn = 'mysql:host=localhost;dbname=apollopa_barricada;charset=utf8' ;
$username = 'apollopa_barricada';
$password = 'barricada@!';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
); 


$pdo = new PDO($dsn, $username, $password, $options);

?>