import React, { useState } from "react";
import { Link, useLocation } from "react-router-dom";

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faPlus, faListUl, faUser } from "@fortawesome/free-solid-svg-icons";

import logo from "../assets/logo.png";

import "../css/navbar.css";

export default function Navbar() {
	const [direction, setDirection] = useState("horizontal");

	function HeaderView() {
		let location = useLocation();

		if (location.pathname === "/account") {
			setDirection("vertical");
		} else {
			setDirection("horizontal");
		}
		return null;
	}

	return (
		<nav className={direction}>
			<HeaderView />
			<img src={logo} alt="brand-logo" />
			<ul>
				<li title="Insertar registro">
					<Link to="/insert_record">
						{direction !== "vertical" ? "Insertar registro" : null}
						<FontAwesomeIcon className="icon" icon={faPlus} />
					</Link>
				</li>
				<li title="Mostrar registros">
					<Link to="/">
						{direction !== "vertical" ? "Mostrar Registros" : null}
						<FontAwesomeIcon className="icon" icon={faListUl} />
					</Link>
				</li>
				<li>
					<Link to="/login">
						{direction !== "vertical" ? "Iniciar sesión" : null}
						<FontAwesomeIcon className="icon" icon={faUser} />
					</Link>
				</li>
				<li title="Configuración de perfil">
					<Link to="/account">
						{direction !== "vertical" ? "Cuenta" : null}
						<FontAwesomeIcon className="icon" icon={faUser} />
					</Link>
				</li>
			</ul>
		</nav>
	);
}
