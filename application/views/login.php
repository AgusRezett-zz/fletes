<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="<?= base_url() ?>assets/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#000000" />
		<meta name="description" content="Web site created using create-react-app" />
		<title>Fletes</title>

		<link rel="stylesheet" href="<?= base_url() ?>assets/css/App.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/navbar.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css" />

		<script src="https://kit.fontawesome.com/9ef2b94efc.js" crossorigin="anonymous"></script>
		<script src="<?= base_url() ?>assets/js/UserOptionBtn.js"></script>
	</head>

	<body>
		<nav class="horizontal">
			<img src="<?= base_url() ?>assets/logo.png" alt="brand-logo" />
			<ul>
				<li title="Insertar registro">
					<a href="insertrecord.html">
						Insertar registro
						<i class="fas fa-plus"></i>
					</a>
				</li>
				<li title="Mostrar registros">
					<a href="index.html">
						Mostrar Registros
						<i class="fas fa-list-ul"></i>
					</a>
				</li>
				<li>
					<a href="login.html">
						Iniciar sesión
						<i class="fas fa-user"></i>
					</a>
				</li>
				<li title="Configuración de perfil">
					<a href="account.html">
						Cuenta
						<i class="fas fa-user"></i>
					</a>
				</li>
			</ul>
		</nav>
		<div id="root">
			<div class="App">
				<div class="modal-container">
					<div class="brand-img"></div>
					<div class="form-container">
						<div class="formulario">
							<form>
								<div class="button-options-container">
									<div class="div-btn selected-ub" id="userOptionLogin" onclick="focusBtn(id)">
										Entrar
									</div>
									<div class="div-btn" id="userOptionRegister" onclick="focusBtn(id)">
										Regístrate
									</div>
								</div>
								<div class="inputForm" id="nameForm">
									<input class="inputUserData" type="text" placeholder="Nombre"></input>
									<input class="inputUserData" type="text" placeholder="Apellido"></input>
								</div>
								<input class="inputUserData" type="email" placeholder="Dirección de email"></input>
								<input class="inputUserData" type="password" placeholder="Contraseña"></input>
								<div class="forgetPsw" id="forgotPsw">
									¿Olvidaste tu contraseña?
								</div>
								<div class="ApiLog btnEntrar">
									Entrar
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
