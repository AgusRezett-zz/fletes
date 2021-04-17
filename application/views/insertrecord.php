<?php 
	session_start();
	if (isset($_SESSION['usuario'])){
		$account = '<li title="Configuración de perfil">
						<a href="'.base_url().'index.php/cuenta">
							'.$_SESSION['usuario'].'
							<i class="fas fa-user"></i>
						</a>
					</li>
					<li title="Configuración de perfil">
						<a href="'.base_url().'index.php/cerrar_sesion">
							Cerrar sesión
							<i class="fas fa-user"></i>
						</a>
					</li>';
	} else { 
		$account = '<li>
						<a href="'.base_url().'index.php/login">
							Iniciar sesión
							<i class="fas fa-user"></i>
						</a>
					</li>';
	}
	if(isset($_GET['insert']) and $_GET['insert'] == TRUE){
		echo '<script>alert("Registro ingresado correctamente")</script>';
	} elseif (isset($_GET['insert']) and $_GET['insert'] == FALSE) {
		echo '<script>alert("Registro rechazado")</script>';
	} 
?>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="<?= base_url() ?>assets/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#000000" />
		<meta name="description" content="Web site created using create-react-app" />
		<title>Fletes</title>

		<link rel="stylesheet" href="<?= base_url() ?>assets/css/navbar.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/insert.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/App.css" />

		<script src="https://kit.fontawesome.com/9ef2b94efc.js" crossorigin="anonymous"></script>
		<script src="<?= base_url() ?>assets/js/ActualDate.js"></script>
	</head>

	<body>
		<nav class="horizontal">
			<img src="<?= base_url() ?>assets/logo.png" alt="brand-logo" />
			<ul>
				<li title="Insertar registro">
					<a href="<?= base_url() ?>index.php/insert">
						Insertar registro
						<i class="fas fa-plus"></i>
					</a>
				</li>
				<li title="Mostrar registros">
					<a href="<?= base_url() ?>index.php/inicio">
						Mostrar Registros
						<i class="fas fa-list-ul"></i>
					</a>
				</li>
				
				<?php echo $account?>
			</ul><!DOCTYPE html>
		</nav>

		<div id="root">
			<div class="App">
				<form class="input-forms" action="<?= base_url() ?>index.php/Crud/insertRecord" method="post">
					<div class="formulario">
						<label htmlFor="direccion">Dirección (str)</label>
						<input class="inputUserData" id="direccion" name="direccion" type="text" placeholder="Ingrese acá la dirección" />
					</div>
					<div class="formulario">
						<label htmlFor="tipo">Tipo (str)</label>
						<input class="inputUserData" id="tipo" name="tipo" type="text" placeholder="Ingrese acá el tipo de flete" />
					</div>
					<div class="formulario">
						<label htmlFor="costo">Costo (int)</label>
						<input class="inputUserData" id="costo" name="costo" type="text" placeholder="Ingrese acá el costo" />
					</div>
					<div class="formulario">
						<label htmlFor="costoad">Costo adicional (int)</label>
						<input class="inputUserData" id="costoad" name="costoad" type="text" placeholder="Ingrese un costo adicional (opcional)" />
					</div>
					<div class="formulario">
						<label htmlFor="fechapedido">Fecha de entrega:</label>
						<input class="inputUserData" id="fechapedido" name="fechapedido" type="date" onclick="getCurrentDate(id)" />
					</div>
					<div class="formulario">
						<label htmlFor="fechaentrega">Fecha de entrega</label>
						<input class="inputUserData" id="fechaentrega" name="fechaentrega" type="date" />
					</div>
					<input type="reset" value="Refrescar" id="cancel">
					<input type="submit" name="save" value="Confirmar" id="confirm">
				</form>
			</div>
		</div>
	</body>
</html>
