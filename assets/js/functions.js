function renderUsers(jsonData) {
	jsonData.forEach((data) => {
		// Element Selection
		let studentWrapper = document.querySelector(".student-wrapper");
		let studentNameU = document.querySelector('[name="studentNameU"]');
		let studentNameD = document.querySelector('[name="studentNameD"]');

		// Element Creation
		let student = document.createElement("li");
		let studentName = document.createElement("div");
		let studentStars = document.createElement("div");
		let studentStar = document.createElement("i");
		let studentNameU_Options = document.createElement("option");
		let studentNameD_Options = document.createElement("option");

		// Render Users & Stars from JSON
		student.setAttribute("class", "student");
		studentName.setAttribute("class", "student-name");
		studentStars.setAttribute("class", "stars");
		studentStar.setAttribute("class", "fas fa-star");

		Array(Number(data.stars))
			.fill(studentStar)
			.forEach((star) => {
				studentStars.innerHTML += star.outerHTML;
			});
		studentName.textContent = data.name;
		student.innerHTML = studentName.outerHTML += studentStars.outerHTML;
		studentWrapper.innerHTML += student.outerHTML;

		// Update User Dropdown List
		studentNameU_Options.setAttribute("value", data.id);
		studentNameU_Options.textContent = data.name;
		studentNameU.innerHTML += studentNameU_Options.outerHTML;

		// Delete User Dropdown List
		studentNameD_Options.setAttribute("value", data.id);
		studentNameD_Options.textContent = data.name;
		studentNameD.innerHTML += studentNameD_Options.outerHTML;
	});
}

function updateJSON(jsonString, debug = false) {
	let json = new FormData();
	json.set("json", jsonString);
	json.set("update_json", null);
	fetch("/api/student.php", {
		method: "POST",
		body: json,
	}).then((resp) => {
		debug ? console.log(resp) : null;
	});
}

export { renderUsers, updateJSON };
