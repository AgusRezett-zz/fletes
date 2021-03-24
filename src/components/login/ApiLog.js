import React, { Component } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faFacebook, faGoogle, faApple } from "@fortawesome/free-brands-svg-icons";

export default class ApiLog extends Component {
	state = {
		backgroundColorH: false,
	};

	btnBg() {
		let color = null;
		let shadow = "";
		let margin = "";
		let border = "";

		if (this.props.tag === "Google") {
			color = true;
			shadow = "0px 0px 6px -3px #000000c7";
			margin = "8px auto 8px auto";
		}

		return {
			backgroundColor: this.state.backgroundColorH ? this.props.colorH : this.props.color,
			color: color ? "grey" : "white",
			boxShadow: shadow,
			margin: margin,
			border: border,
		};
	}

	btnBgH = () => {
		this.setState({ backgroundColorH: !this.state.backgroundColorH });
	};

	svg() {
		return {
			width: "48px",
			height: "48px",
			position: "absolute",
			top: "0px",
			left: "0px",
		};
	}

	render() {
		const icono = [faFacebook, faGoogle, faApple];
		let iconoExport = null;

		icono.forEach((element) => {
			if (element.iconName === this.props.fontA) {
				iconoExport = element;
			}
		});

		let Icon;

		if (this.props.tag === "Google") {
			Icon = (
				<svg viewBox="0 0 46 46" style={this.svg()}>
					<g fill="none" fillRule="evenodd">
						<path
							d="M31.64 23.205c0-.639-.057-1.252-.164-1.841H23v3.481h4.844a4.14 4.14 0 0 1-1.796 2.716v2.259h2.908c1.702-1.567 2.684-3.875 2.684-6.615z"
							fill="#4285F4"
						></path>
						<path
							d="M23 32c2.43 0 4.467-.806 5.956-2.18l-2.908-2.259c-.806.54-1.837.86-3.048.86-2.344 0-4.328-1.584-5.036-3.711h-3.007v2.332A8.997 8.997 0 0 0 23 32z"
							fill="#34A853"
						></path>
						<path
							d="M17.964 24.71a5.41 5.41 0 0 1-.282-1.71c0-.593.102-1.17.282-1.71v-2.332h-3.007A8.996 8.996 0 0 0 14 23c0 1.452.348 2.827.957 4.042l3.007-2.332z"
							fill="#FBBC05"
						></path>
						<path
							d="M23 17.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C27.463 14.891 25.426 14 23 14a8.997 8.997 0 0 0-8.043 4.958l3.007 2.332c.708-2.127 2.692-3.71 5.036-3.71z"
							fill="#EA4335"
						></path>
						<path d="M14 14h18v18H14V14z"></path>
					</g>
				</svg>
			);
		} else {
			Icon = <FontAwesomeIcon className="fab-icon" icon={iconoExport} />;
		}

		return (
			<div className="ApiLog" style={this.btnBg()} onMouseOver={this.btnBgH} onMouseOut={this.btnBgH}>
				{Icon}
				{this.props.tag}
			</div>
		);
	}
}
