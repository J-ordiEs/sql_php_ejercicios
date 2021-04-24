<?php
require_once('connection.php');

$sql = 'SELECT * FROM news WHERE 1 ORDER BY id DESC';

$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();

$show_form = FALSE;

if($_POST)
{
  //TODO:UPDATE ARTICLE
  header('Location: update.php');
}

if(isset( $_GET['id'] ) )
{
  //TODO: GET DETAILS
  $show_form = TRUE;
}
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
<h2>UPDATE</h2>
<hr>
</div>
<div class="row column">
<div class="callout primary">
<h3>Modificar Noticia</h3>
<?php 
if( $show_form )
{
?>
<form method="post">
  <div class="row">
    <div class="medium-6 columns">
      <label>Ingrese el título
        <input type="text" name="title" placeholder="ej. Javascript" value="">
        
      </label>
      <p class="help-text">El contenido deberá ser claro sobre su posible contenido</p>
    </div>
    <div class="medium-6 columns">
      <label>&nbsp;
      </label>
    </div>
  </div>
  <div class="row">
    <div class="medium-12 columns">
      <label>Ingrese el Contenido
        <textarea name="content" placeholder="ej. Lorem ipsum..."></textarea>
        <input class="button primary" type="submit" value="MODIFICAR" />
      </label>
      
    </div>
  </div>
</form>
<?php } ?>
</div>
<table width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Contenido</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($results as $rs)
    {
  ?>
    <tr>
      <td width="100"><?php echo $rs['id']; ?></td>
      <td width="200"><?php echo $rs['title']; ?></td>
      <td><?php echo $rs['content']; ?></td>
      <td width="200">
        <a class="primary button" href="#">Ver detalles</a>
      </td>
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
