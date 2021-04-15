<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="http://localhost:8080/fletes/assets/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#000000" />
		<meta name="description" content="Web site created using create-react-app" />
		<title>Fletes</title>

		<link rel="stylesheet" href="http://localhost:8080/fletes/assets/css/App.css" />
		<link rel="stylesheet" href="http://localhost:8080/fletes/assets/css/navbar.css" />
		<link rel="stylesheet" href="http://localhost:8080/fletes/assets/css/account.css" />
		<link rel="stylesheet" href="http://localhost:8080/fletes/assets/css/login.css" />

		<script src="https://kit.fontawesome.com/9ef2b94efc.js" crossorigin="anonymous"></script>
	</head>

	<body>
		<nav class="vertical">
			<img src="http://localhost:8080/fletes/assets/logo.png" alt="brand-logo" />
			<ul>
				<li title="Insertar registro">
					<a href="insertrecord.html">
						<i class="fas fa-plus"></i>
					</a>
				</li>
				<li title="Mostrar registros">
					<a href="index.html">
						<i class="fas fa-list-ul"></i>
					</a>
				</li>
				<li>
					<a href="login.html">
						<i class="fas fa-user"></i>
					</a>
				</li>
				<li title="Configuración de perfil">
					<a href="account.html">
						<i class="fas fa-user"></i>
					</a>
				</li>
			</ul>
		</nav>
		<div id="root">
			<div class="App">
				<div class="account-container">
					<h1>Configuración de perfil</h1>
					<div class="panel">
						<h2>Cambiá tu nombre</h2>
						<div>
							<div class="formulario">
								<label htmlFor="nombre">Nombre</label>
								<input class="inputUserData" id="nombre" type="text" placeholder="Escriba acá" />
							</div>
							<div class="formulario">
								<label htmlFor="apellido">Apellido</label>
								<input class="inputUserData" id="apellido" type="text" placeholder="Escriba acá" />
							</div>
						</div>
						<button>Confirmar</button>
					</div>
					<div class="panel" style="margin-bottom: 30px">
						<h2>Cambiá tu contraseña</h2>
						<div>
							<div class="formulario">
								<label htmlFor="password">Contraseña</label>
								<input class="inputUserData" id="password" type="text" placeholder="Escriba acá" />
							</div>
							<div class="formulario">
								<label htmlFor="confirmPassword">Confirmar contraseña</label>
								<input class="inputUserData" id="confirmPassword" type="text" placeholder="Escriba acá" />
							</div>
						</div>
						<button>Confirmar</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
