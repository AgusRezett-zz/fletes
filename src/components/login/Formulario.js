import React, { Component } from "react";

import ApiLog from "./ApiLog";
import UserOptionBtn from "./UserOptionBtn";

import "../../css/login.css";

export default class Formulario extends Component {
	constructor(props) {
		super(props);
		this.state = { loginBtn: true, registerBtn: false };
		this.toggleBtns = this.toggleBtns.bind(this);
	}

	toggleBtns(updateL, updateR) {
		this.setState({ loginBtn: updateL, registerBtn: updateR });
	}

	showWhenLogin() {
		return {
			display: this.state.loginBtn ? "flex" : "none",
		};
	}

	showWhenRegister() {
		return {
			display: this.state.registerBtn ? "flex" : "none",
		};
	}

	toggleTag() {
		let tag = "";

		if (this.state.loginBtn) {
			tag = "Entrar";
		} else {
			tag = "Regístrate";
		}

		return tag;
	}

	render() {
		return (
			<div className="form-container">
				<div className="formulario">
					<form>
						<div className="button-options-container">
							<UserOptionBtn tag="Entrar" type="login" btnActive={this.state.loginBtn} activeKey={this.toggleBtns} />
							<UserOptionBtn
								tag="Regístrate"
								type="register"
								btnActive={this.state.registerBtn}
								activeKey={this.toggleBtns}
							/>
						</div>
						<div className="inputForm" style={this.showWhenRegister()}>
							<input className="inputUserData" type="text" placeholder="Nombre"></input>
							<input className="inputUserData" type="text" placeholder="Apellido"></input>
						</div>
						<input className="inputUserData" type="email" placeholder="Dirección de email"></input>
						<input className="inputUserData" type="password" placeholder="Contraseña"></input>
						<div className="forgetPsw" style={this.showWhenLogin()}>
							¿Olvidaste tu contraseña?
						</div>
						<ApiLog fontA="" tag={this.toggleTag()} color="rgb(47, 183, 236)" colorH="rgb(38, 152, 197)" />
						<div className="divisor">
							<div className="line"></div>
							<div className="center">O</div>
						</div>
						<ApiLog fontA="facebook" tag="Facebook" color="#0076FB" colorH="#006ADF" />
						<ApiLog fontA="google" tag="Google" color="rgb(41 41 41)" colorH="rgb(37 37 37)" id="mid-api" />
						<ApiLog fontA="apple" tag="Apple" color="#111111" colorH="#000000" />
					</form>
				</div>
			</div>
		);
	}
}
