import React, { Component } from "react";

import "../../css/login.css";

export default class UserOptionBtn extends Component {
	constructor(props) {
		super(props);
		this.state = {};
		this.focusBtn = this.focusBtn.bind(this);
	}

	focusBtn() {
		const { activeKey } = this.props;
		let updateL = null;
		let updateR = null;

		if (this.props.type === "login") {
			updateL = true;
			updateR = false;
		} else {
			updateL = false;
			updateR = true;
		}

		activeKey(updateL, updateR);
	}

	selectedBtn() {
		return {
			fontWeight: this.props.btnActive ? "400" : "200",
			borderBottom: this.props.btnActive ? "2px solid #2fb7ec" : "2px solid #d4e3eb",
		};
	}

	render() {
		return (
			<div className="div-btn" style={this.selectedBtn()} onClick={this.focusBtn}>
				{this.props.tag}
			</div>
		);
	}
}
