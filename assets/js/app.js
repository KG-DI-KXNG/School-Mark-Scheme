let json = new String();

fetch("assets/json/students.json")
	.then((response) => response.json())
	.then((data) => {
		json = data.students;
		renderUsers(json);
	});

function renderUsers(jsonData) {
	// Set StudentID
	document.querySelector('[name="studentIdC"]').value = jsonData.length + 1;

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
