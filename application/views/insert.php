<!DOCTYPE html>  
<html>
<head>
<title>Registration form</title>
</head>
 <!-- http://localhost/codeigniter/index.php/Formulario/recibir_datos 
 http://localhost/codeigniter/
 -->
<body>
	<form method="post" action="<?= base_url() ?>index.php/Crud/savedata">
	<?php echo base_url();?>
		<table width="600" border="1" cellspacing="5" cellpadding="5">
          <tr>
            <td width="230">Usuario </td>
            <td width="329"><input type="text" name="usuario"/></td>
          </tr>
          <tr>
            <td>Pwd </td>
            <td><input type="text" name="pwd"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="save" value="Guardar"/></td>
          </tr>
        </table>
 
	</form>
</body>
</html>