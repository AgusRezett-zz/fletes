<!DOCTYPE html>
<html>
<head>
<title>Delete records</title>
</head>
 
<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email Id</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->usuario."</td>";
  echo "<td>".$row->pwd."</td>";
  echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "</tr>";
  $i++;
  }
  ?>
</table>
 
</body>
</html>