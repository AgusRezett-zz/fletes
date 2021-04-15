<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
</head>
 
<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
          <tr>
            <td width="230">Ingrese nombre de usuario </td>
            <td width="329"><input type="text" name="usuario" value="<?php echo $row->usuario;?>"/></td>
          </tr>
          <tr>
            <td>Enter Your Email </td>
            <td><input type="text" name="pwd" value="<?php echo $row->pwd;?>"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
            <input type="submit" name="update" value="Actualizar"/></td>
          </tr>
        </table>
	</form>
	<?php } ?>
</body>
</html>