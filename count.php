<?php
require_once('connection.php');
$sql = 'SELECT COUNT(*) as total_users FROM user';
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();
// var_dump($results)
$total_users = $results[0]['total_users'];

$sql = 'SELECT COUNT(*) as total_users_types FROM user_type';
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();
// var_dump($results)
$total_users_types = $results[0]['total_users_types'];

$sql = 'SELECT COUNT(*) as total_active_users FROM user WHERE status_id = 1';
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();
// var_dump($results)
$total_active_users = $results[0]['total_active_users'];

$sql = 'SELECT COUNT(*) as total_inactive_users FROM user WHERE status_id = 2';
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();
// var_dump($results)
$total_inactive_users = $results[0]['total_inactive_users'];

$sql = 'SELECT COUNT(*) as total_satus_users FROM user WHERE status_id = 1';
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();
// var_dump($results)
$total_satus_users = $results[0]['total_satus_users'];

$sql = 'SELECT COUNT(*) as total_users_acces FROM user_log';
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();
// var_dump($results)
$total_users_acces = $results[0]['total_users_acces'];




?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP & SQL</title>
  <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>

<body>

  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li class="menu-text">Curso PHP & SQL</li>
      </ul>
    </div>
  </div>

  <div class="row column text-center">
    <h2>Contando datos</h2>
    <hr>
  </div>
  <div class="row column">
    <div class="callout success">
      <h3>Totales</h3>
    </div>
    <table width="100%">
      <thead>
        <tr>
          <th>Usuarios</th>
          <th>Tipos</th>
          <th>Status</th>
          <th>Accesos</th>
          <th>Usuarios Activos</th>
          <th>Usuarios Inactivos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $total_users?></td>
          <td><?php echo $total_users_types?></td>
          <td><?php echo $total_satus_users?></td>
          <td><?php echo $total_users_acces?></td>
          <td><?php echo $total_active_users?></td>
          <td><?php echo $total_inactive_users?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <hr>


  </div>
  <div class="large-3 large-offset-2 columns">
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
  <script>
  $(document).foundation();
  </script>
</body>

</html>