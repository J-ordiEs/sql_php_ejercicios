<?php
require_once('../connection.php');

if( $_POST )
{

  $sql_insert = '';

  $statement_insert = $pdo->prepare($sql_insert);
  $statement_insert->execute(array( $publish_date, $title, $content,$status ));

}