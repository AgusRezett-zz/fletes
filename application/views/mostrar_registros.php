<html>
<head>
<title>Display records</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
 
<body>
<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Id</th>
    <th>Usuario</th>
    <th>Contraseña</th>
  </tr>
  <?php
      $i=1;
      foreach($data as $row){
          echo "<tr>";
          echo "<td>".$row->id."</td>";
          echo "<td>".$row->usuario."</td>";
          echo "<td>".$row->pwd."</td>";
          echo "</tr>";
          $i++;
        }
   ?>
</table>
</body>
</html>