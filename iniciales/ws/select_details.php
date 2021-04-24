<?php
require_once('../connection.php');

$sql = '';

$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();


header('Content-Type: application/json');
$rs['id'] = 1;
$rs['title'] = 'Dummy title';
$rs['content'] = 'Dummy content';
echo json_encode($rs);
