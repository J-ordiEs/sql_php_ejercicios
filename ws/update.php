<?php
require_once('../connection.php');

if($_POST)
{

  $sql_update_details = '';

  $statement_update_details = $pdo->prepare($sql_update_details);
  $statement_update_details->execute();

}