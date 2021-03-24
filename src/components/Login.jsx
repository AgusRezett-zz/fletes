import React, { Component } from "react";

import Formulario from "./login/Formulario.js";

import "../css/login.css";

export default class login extends Component {
	render() {
		return (
			<div className="modal-container">
				<div className="brand-img"></div>
				<Formulario />
			</div>
		);
	}
}
