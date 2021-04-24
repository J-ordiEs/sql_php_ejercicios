<pre><?php
require_once('connection.php');
$sql = 'SELECT * FROM user';
$statement = $pdo->prepare($sql);
$statement->execute(array());
$results = $statement->fetchAll();

$sql_status = 'SELECT user. *, status.name FROM user INNER JOIN status ON status.id = user.status_id';
$statement_status = $pdo->prepare($sql_status);
$statement_status->execute(array());
$results_status = $statement_status->fetchAll();
//var_dump($results_status);

$sql_type = 'SELECT user. *, user_type.name FROM user INNER JOIN user_type ON user_type.id = user.user_type_id';
$statement_type = $pdo->prepare($sql_type);
$statement_type->execute(array());
$results_type = $statement_type->fetchAll();
// var_dump($results_type);


?>
</pre>
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
    <h2>Seleccionando datos</h2>
    <hr>
  </div>
  <div class="row column">
    <div class="callout primary">
      <h3>Usuarios</h3>
    </div>
    <table width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th width="150">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($results as $res) 
        {
      ?>
        <tr>
          <td><?php echo $res['id']?></td>
          <td><?php echo $res['email']?></td>
          <td><?php echo $res['status_id']?></td>
        </tr>
        <?php 
        }
        ?>
      </tbody>
    </table>
  </div>
  <hr>
  <div class="row column">
    <div class="callout secondary">
      <h3>Usuarios y status</h3>
    </div>
    <table width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th width="150">Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($results_status as $res) 
        { 
      ?>
        <tr>
          <td><?php echo $res['id']?></td>
          <td><?php echo $res['email']?></td>
          <td><?php echo $res['name']?></td>
        </tr>
        <?php 
        }
        
        ?>
      </tbody>
    </table>
  </div>
  <hr>

  <div class="row column">
    <div class="callout warning">
      <h3>Usuarios y tipos</h3>
    </div>
    <table width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th width="150">Tipo</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($results_type as $res)
          {
        ?>
        <tr>
          <td><?php echo $res['id']?></td>
          <td><?php echo $res['email']?></td>
          <td><?php echo $res['name']?></td>
        </tr>
        <?php 
          }        
        ?>
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