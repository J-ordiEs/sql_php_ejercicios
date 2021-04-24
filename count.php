<?php
require_once('connection.php');
$sql = 'SELECT * FROM user';
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      <td>99</td>
      <td>88</td>
      <td>77</td>
      <td>66</td>
      <td>55</td>
      <td>44</td>
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
