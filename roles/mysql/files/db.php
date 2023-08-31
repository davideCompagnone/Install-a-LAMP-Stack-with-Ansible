<?php

$connection = new PDO('mysql:host=localhost;dbname=users', 'root', 'root');
$statement  = $connection->query('SELECT * FROM users');

echo $statement->fetchColumn(); 