<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
	h1 {
		font-size: 19px;
		font-family: sans-serif;
        
	
	</style>
</head>
<body>
	<h1>LOGIN PRINCIPAL</h1>
	<?php
        echo form_open("Formulario/recibir_datos");//Seria el action de nuestro formulario
    ?>
    <?php
        $usuario = array(
            'name' => 'usuario',
            'placeholder' => 'Ingresa nombre de usuario'
        );
    
        $pwd = array(
            'name' => 'pwd',
            'placeholder' => 'Ingresa tu contraseña'
        );
        
    ?>
    <?php 
        echo form_label('Usuario', 'usuario');
    ?>
    <?php echo form_input($usuario); ?><br>
    
    <?php 
        echo form_label('Contraseña', 'pwd');
    ?>
    <?php echo form_input($pwd );?><br>
    <?php
        echo form_submit('','Registrar');
    ?>
    <?php
        echo form_close();
    ?>
</body>
</html>