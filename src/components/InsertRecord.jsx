import React, { Component } from "react";
import "../css/insert.css";
import "../css/login.css";

export default class InsertRecord extends Component {
	constructor(props) {
		super(props);
		this.getCurrentDate = this.getCurrentDate.bind(this);
	}

	getCurrentDate() {
		let today = new Date();
		const dd = String(today.getDate()).padStart(2, "0");
		const mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0. Format 1-12 not 0-11
		const yyyy = today.getFullYear();

		today = yyyy + "-" + mm + "-" + dd;
		return today;
	}

	render() {
		return (
			<form className="input-forms">
				<div className="formulario">
					<label htmlFor="direccion">Dirección</label>
					<input className="inputUserData" id="direccion" type="text" placeholder="Ingrese acá la dirección" />
				</div>
				<div className="formulario">
					<label htmlFor="tipo">Tipo</label>
					<input className="inputUserData" id="tipo" type="text" placeholder="Ingrese acá el tipo de flete" />
				</div>
				<div className="formulario">
					<label htmlFor="costo">Costo</label>
					<input className="inputUserData" id="costo" type="text" placeholder="Ingrese acá el costo" />
				</div>
				<div className="formulario">
					<label htmlFor="costoad">Costo adicional</label>
					<input
						className="inputUserData"
						id="costoad"
						type="text"
						placeholder="Ingrese un costo adicional (opcional)"
					/>
				</div>
				<div className="formulario">
					<label htmlFor="fechapedido">Fecha de entrega:</label>
					<input className="inputUserData" id="fechapedido" type="date" defaultValue={this.getCurrentDate()} />
				</div>
				<div className="formulario">
					<label htmlFor="fechaentrega">Fecha de entrega</label>
					<input className="inputUserData" id="fechaentrega" type="date" />
				</div>

				<button id="cancel">Cancelar</button>
				<button id="confirm">Confirmar</button>
			</form>
		);
	}
}
