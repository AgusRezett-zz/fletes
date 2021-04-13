function focusBtn(id) {
	const userLogin = document.getElementById(id);
	const nameForm = document.getElementById("nameForm");
	const forgotPsw = document.getElementById("forgotPsw");

	userLoginSlected = userLogin.classList.value.includes("selected-ub");
	if (!userLoginSlected) {
		userLogin.classList.toggle("selected-ub");
		nameForm.classList.toggle("showNameForm");
		forgotPsw.classList.toggle("showForgetPsw");
		let otherId;

		if (id === "userOptionLogin") {
			otherId = "userOptionRegister";
		} else {
			otherId = "userOptionLogin";
		}

		const otherUserLogin = document.getElementById(otherId);
		otherUserLogin.classList.toggle("selected-ub");
	}
}
