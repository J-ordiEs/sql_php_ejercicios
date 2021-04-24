<?php
require_once('../connection.php');
$sql = '';

$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll();
?>
<table width="" class="stack">
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ID</td>
        <td>Título</td>
        <td>
          <a class="hollow primary button" href="details" data-id="1" >Detalles</a>
          <a class="hollow alert button" href="delete" data-id="1">Eliminar</a>
        </td>
      </tr>
    </tbody>
  </table>