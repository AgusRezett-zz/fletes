import React, { Component } from "react";

import "../css/App.css";

export default class Index extends Component {
	render() {
		return (
			<table className="tg">
				<thead>
					<tr>
						<th className="tg-0lax"></th>
						<th className="tg-0lax">ID</th>
						<th className="tg-0lax">DIRECCIÓN</th>
						<th className="tg-0lax">TIPO</th>
						<th className="tg-0lax">COSTO</th>
						<th className="tg-0lax">ADICIONAL</th>
						<th className="tg-0lax">F. PEDIDO</th>
						<th className="tg-0lax">F. ENTREGA</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td className="tg-0lax">Flete</td>
						<td className="tg-0lax">1</td>
						<td className="tg-0lax">Saavedra 634</td>
						<td className="tg-0lax">Camión</td>
						<td className="tg-0lax">31.500</td>
						<td className="tg-0lax">-</td>
						<td className="tg-0lax">17/03/21</td>
						<td className="tg-0lax">26/03/21</td>
					</tr>
				</tbody>
			</table>
		);
	}
}
