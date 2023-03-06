<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$education = $_POST['education'];
		$experience = $_POST['experience'];
		$skills = $_POST['skills'];

		// Upload photo
		if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
			$uploadDir = 'uploads/';
			$fileName = basename($_FILES['photo']['name']);
			$uploadFile = $uploadDir . $fileName;

			if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
				$photo = $fileName;
			}
		}

		// Build fields array
		$fields = array();
		for ($i = 1; isset($_POST['field'.$i]); $i++) {
			$fields[] = $_POST['field'.$i];
		}

		// Build HTML
		$html = '<html>';
		$html .= '<head>';
		$html .= '<title>'.$name.' - Resume</title>';
		$html .= '<style>';
		$html .= 'body { font-family: Arial, sans-serif; }';
		$html .= 'h1 { text-align: center; }';
		$html .= 'table { width: 100%; }';
		$html .= 'td { padding: 5px; }';
		$html .= '.photo { max-width: 200px; }';
		$html .= '</style>';
		$html .= '</head>';
		$html .= '<body>';
		$html .= '<h1>'.$name.'</h1>';

		if (isset($photo)) {
			$html .= '<img class="photo" src="'.$uploadDir.$photo.'" alt="Photo">';
		}

		$html .= '<table>';
		$html .= '<tr>';
		$html .= '<td>Email:</td><td>'.$email.'</td>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td>Phone:</td><td>'.$phone.'</td>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td>Address:</td><td>'.$address.'</td>';
		$html .= '</tr>';
		$html .= '</table>';

		$html .= '<h2>Education</h2>';
		$html .= '<p>'.$education.'</p>';

		$html .= '<h2>Experience</h2>';
		$html .= '<p>'.$experience.'</p>';

		$html .= '<h2>Skills</h2>';
		$html .= '<p>'.$skills.'</p>';

		if (!empty($fields)) {
			$html .= '<h2>Additional Information</h2>';
			foreach ($fields as $field) {
				$html .= '<p>'.$field.'</p>';
			}
		}

		$html .= '</body>';
		$html .= '</html>';

		// Output PDF
		require_once('vendor/autoload.php');

		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
?>



















<!DOCTYPE html>
<html>
<head>
	<title>Resume Generator</title>
	<link rel="stylesheet" type="text/css" href="./css/resume.css">
</head>


<style>


body {
	font-family: Arial, sans-serif;
}

h1 {
	text-align: center;
}

form {
	width: 50%;
	margin: 0 auto;
}

label {
	display: block;
	margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
	width: 100%;
	padding: 5px;
}

input[type="submit"] {
	margin-top: 10px;
	background-color: #4CAF50;
	color: white;
	padding: 10px;
	border: none;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}

#fields button {
	margin-top: 10px;
	background-color: #555;
	color: white;
	padding: 10px;
	border: none;
	cursor: pointer;
}

#fields button:hover {
	background-color: #333;
}








</style>
<body>
	<h1>Resume Generator</h1>
	<form method="post" action="generate.php" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" required>

		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea>

		<label for="education">Education:</label>
		<textarea id="education" name="education" required></textarea>

		<label for="experience">Experience:</label>
		<textarea id="experience" name="experience" required></textarea>

		<label for="skills">Skills:</label>
		<textarea id="skills" name="skills" required></textarea>

		<label for="photo">Photo:</label>
		<input type="file" id="photo" name="photo">

		<button type="button" onclick="addField()">Add Field</button>
		<div id="fields"></div>

		<input type="submit" value="Generate">
	</form>

<script>


let numFields = 0;

// function addField() {
// 	numFields++;

// 	const newField = document.createElement("div");
// 	newField.innerHTML = `
// 		<label for="field${numFields}">Field ${numFields}:</label>
// 		<textarea id="field${numFields}" name="field${numFields}"></textarea>
// 		<button type="button" onclick="deleteField(${numFields})">Delete</button>
// 	`;

// 	document.getElementById("fields").appendChild(newField);
// }   


let numFields = 0;

// function addField() {
// 	numFields++;

// 	const newField = document.createElement("div");
// 	newField.id = `field${numFields}`;
// 	newField.innerHTML = `
// 		<label for="field${numFields}">Field ${numFields}:</label>
// 		<textarea id="field${numFields}" name="field${numFields}"></textarea>
// 		<button type="button" onclick="deleteField(${numFields})">Delete</button>
// 	`;

// 	document.getElementById("fields").appendChild(newField);
// }
const name = document.getElementById("name");
	const email = document.getElementById("email");
	const phone = document.getElementById("phone");
	const address = document.getElementById("address");
	const education = document.getElementById("education");
	const experience = document.getElementById("experience");
	const skills = document.getElementById("skills");

document.querySelector('name').addEventListener("click", (event) => {
    const newField = document.createElement("div");
    <textarea id="field${numFields}" name="name"></textarea>
		<button type="button" onclick="deleteField(${numFields})">Delete</button>


 });



function deleteField(fieldNum) {
	const field = document.getElementById(`field${fieldNum}`);
	field.parentNode.removeChild(field);
	numFields--;
}

function updateInfo() {
	const name = document.getElementById("name").value;
	const email = document.getElementById("email").value;
	const phone = document.getElementById("phone").value;
	const address = document.getElementById("address").value;
	const education = document.getElementById("education").value;
	const experience = document.getElementById("experience").value;
	const skills = document.getElementById("skills").value;

	const photo = document.getElementById("photo").files[0];

	const formData = new FormData();
	formData.append("name", name);
	formData.append("email", email);
	formData.append("phone", phone);
	formData.append("address", address);
	formData.append("education", education);
	formData.append("experience", experience);
	formData.append("skills", skills);
	if (photo) {
		formData.append("photo", photo);
	}

	for (let i = 1; i <= numFields; i++) {
		const field = document.getElementById(`field${i}`).value;
		formData.append(`field${i}`, field);
	}

	const xhr = new XMLHttpRequest();
	xhr.open("POST", "update.php");
	xhr.onload = function() {
		if (xhr.status === 200) {
			alert("Information updated successfully!");
		} else {
			alert("Error updating information.");
		}
	};
	xhr.send(formData);
}

function updatePhoto() {
	const photo = document.getElementById("photo").files[0];

	const formData = new FormData();
	formData.append("photo", photo);

	const xhr = new XMLHttpRequest();
	xhr.open("POST", "update-photo.php");
	xhr.onload = function() {
		if (xhr.status === 200) {
			alert("Photo updated successfully!");
		} else {
			alert("Error updating photo.");
		}
	};
	xhr.send(formData);
}








</script>
</body>
</html>
