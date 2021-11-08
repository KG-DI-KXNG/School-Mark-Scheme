import { renderUsers, updateJSON } from "./functions.js";

let createStudentBtn = document.querySelector('[name="send_c"]');
let updateStudentBtn = document.querySelector('[name="send_u"]');
let deleteStudentBtn = document.querySelector('[name="send_d"]');
let newStudent;

(function init(callback = () => {}) {
	fetch("assets/json/students.json")
		.then((response) => response.json())
		.then((json) => {
			renderUsers(json.students);
		});

	document.querySelector('[name="studentNameC"]').value = null;
	document.querySelectorAll("select").forEach((item) => (item.value = 1));
	callback();
})();

createStudentBtn.onclick = (e) => {
	let studentNameC = document.querySelector('[name="studentNameC"]').value;
	let studentStarsC = Number(document.querySelector('[name="studentStarsC"]').value);

	if (studentNameC == "" || studentNameC == null) {
		alert("Student name can't be empty");
		e.preventDefault();
	} else {
		let newStudentJson = { name: studentNameC, stars: studentStarsC };
		fetch("assets/json/students.json")
			.then((response) => response.json())
			.then((json) => {
				json.students.push(newStudentJson);
				newStudent = JSON.stringify(json);
			})
			.then(() => updateJSON(newStudent));
	}
};

updateStudentBtn.onclick = () => {
	let studentNameDropdown = document.querySelector('[name="studentNameU"]');
	let studentStarsU = Number(document.querySelector('[name="studentStarsU"]').value);
	let selectedIndex = studentNameDropdown.selectedIndex;
	let studentNameU = studentNameDropdown.options[selectedIndex].text;

	let newJSON;
	fetch("assets/json/students.json")
		.then((response) => response.json())
		.then((json) => {
			let userIndex = json.students.findIndex((student) => student.name == studentNameU);
			json.students[userIndex].stars = studentStarsU;
			newJSON = JSON.stringify(json);
		})
		.then(() => updateJSON(newJSON));
};

deleteStudentBtn.onclick = (e) => {
	let studentNameDropdown = document.querySelector('[name="studentNameD"]');
	let selectedIndex = studentNameDropdown.selectedIndex;
	let studentNameD = studentNameDropdown.options[selectedIndex].text;

	let newJSON;

	Swal.fire({
		title: "Are you sure?",
		text: `You want to delete ${studentNameD}!`,
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire("Deleted!", "Your file has been deleted.", "success");
			setTimeout(() => {
				fetch("assets/json/students.json")
					.then((response) => response.json())
					.then((json) => {
						let userIndex = json.students.findIndex((student) => student.name == studentNameD);
						json.students.splice(userIndex, 1);
						newJSON = JSON.stringify(json);
					})
					.then(() => updateJSON(newJSON));
			}, 1000);
			return;
		}
	});
};
