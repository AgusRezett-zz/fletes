<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="./assets/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#000000" />
		<meta name="description" content="Web site created using create-react-app" />
		<title>Fletes</title>

		<link rel="stylesheet" href="./css/App.css" />
		<link rel="stylesheet" href="./css/navbar.css" />

		<script src="https://kit.fontawesome.com/9ef2b94efc.js" crossorigin="anonymous"></script>
	</head>

	<body>
		<nav class="horizontal">
			<img src="./assets/logo.png" alt="brand-logo" />
			<ul>
				<li title="Insertar registro">
					<a href="insertrecord.php">
						Insertar registro
						<i class="fas fa-plus"></i>
					</a>
				</li>
				<li title="Mostrar registros">
					<a href="index.php">
						Mostrar Registros
						<i class="fas fa-list-ul"></i>
					</a>
				</li>
				<li>
					<a href="login.php">
						Iniciar sesión
						<i class="fas fa-user"></i>
					</a>
				</li>
				<li title="Configuración de perfil">
					<a href="account.php">
						Cuenta
						<i class="fas fa-user"></i>
					</a>
				</li>
			</ul>
		</nav>
		<div id="root">
			<div class="App">
				<table class="tg">
					<thead>
						<tr>
							<th class="tg-0lax"></th>
							<th class="tg-0lax">ID</th>
							<th class="tg-0lax">DIRECCIÓN</th>
							<th class="tg-0lax">TIPO</th>
							<th class="tg-0lax">COSTO</th>
							<th class="tg-0lax">ADICIONAL</th>
							<th class="tg-0lax">F. PEDIDO</th>
							<th class="tg-0lax">F. ENTREGA</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="tg-0lax">Flete</td>
							<td class="tg-0lax">1</td>
							<td class="tg-0lax">Saavedra 634</td>
							<td class="tg-0lax">Camión</td>
							<td class="tg-0lax">31.500</td>
							<td class="tg-0lax">-</td>
							<td class="tg-0lax">17/03/21</td>
							<td class="tg-0lax">26/03/21</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
