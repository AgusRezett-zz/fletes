import React, { Component } from "react";

import "../css/account.css";
import "../css/insert.css";

export default class Account extends Component {
	render() {
		return (
			<div className="account-container">
				<h1>Configuración de perfil</h1>
				<div className="panel">
					<h2>Cambiá tu nombre</h2>
					<div>
						<div className="formulario">
							<label htmlFor="nombre">Nombre</label>
							<input className="inputUserData" id="nombre" type="text" placeholder="Escriba acá" />
						</div>
						<div className="formulario">
							<label htmlFor="apellido">Apellido</label>
							<input className="inputUserData" id="apellido" type="text" placeholder="Escriba acá" />
						</div>
					</div>
					<button>Confirmar</button>
				</div>
				<div className="panel" style={{ marginBottom: "30px" }}>
					<h2>Cambiá tu contraseña</h2>
					<div>
						<div className="formulario">
							<label htmlFor="password">Contraseña</label>
							<input className="inputUserData" id="password" type="text" placeholder="Escriba acá" />
						</div>
						<div className="formulario">
							<label htmlFor="confirmPassword">Confirmar contraseña</label>
							<input className="inputUserData" id="confirmPassword" type="text" placeholder="Escriba acá" />
						</div>
					</div>
					<button>Confirmar</button>
				</div>
			</div>
		);
	}
}
