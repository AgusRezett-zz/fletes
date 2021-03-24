import React, { Component } from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Index from "./components/Index";
import Login from "./components/Login";
import InsertRecord from "./components/InsertRecord";
import Account from "./components/Account";

import Navbar from "./components/Navbar";

import "./css/App.css";

export default class App extends Component {
	render() {
		return (
			<div className="App">
				<Router>
					<Navbar />
					<Switch>
						<Route path="/fletes/account">
							<Account tipoNav="izquierda" />
						</Route>
						<Route path="/fletes/insert_record" component={InsertRecord} />
						<Route path="/fletes/login" tipoNav="arriba" component={Login} />
						<Route path="/fletes" component={Index} exact />
					</Switch>
				</Router>
			</div>
		);
	}
}
