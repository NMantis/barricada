<?php


$dsn = 'mysql:host=greenhouseonline.gr;dbname=apollopa_barricada;charset=utf8' ;
$username = 'root';
$password = 'toor';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
); 


$pdo = new PDO($dsn, $username, $password, $options);

?>