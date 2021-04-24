<?php
require_once('connection.php');

$sql = '';

$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();


