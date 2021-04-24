<?php
require_once('connection.php');

$sql = 'DELETE FROM news WHERE id = ' . $_GET['id'];
$statement = $pdo->query($sql);

header('Location: insecure_list.php');


