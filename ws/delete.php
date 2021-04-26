<?php
require_once('../connection.php');

$sql = 'DELETE FROM news WHERE id  = ?';

$id = isset($_GET['id']) ? $_GET['id']: 0;

$statement = $pdo->prepare($sql);
$statement->execute(array($id));
$results = $statement->fetchAll();