// generate a random male
function generateMale() {
<<<<<<< HEAD
	$("#tabledata").load("php/generate_random_person.php", {post_ismale: true});
=======
	$.ajax({
		dataType: "html",
		success: function() {
			$("#data").load("php/generate_male.php");
		}
	});
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
}

// generate a random female
function generateFemale() {
<<<<<<< HEAD
	$("#tabledata").load("php/generate_random_person.php", {post_ismale: false});
}

// delete a row from the db
function deleteRow(rowID) {
	$.ajax({
		url: "php/db_delete.php",
		method: "POST",
		data: {rowToBeDeleted: rowID},
		success: function() {
			$("#tabledata").load("php/generate_random_person.php", {post_null: true});
		}
	});
	//$("#data").load("php/db_delete.php", {rowToBeDeleted: rowID});
=======
	$.ajax({
		dataType: "html",
		success: function() {
			$("#data").load("php/generate_female.php");
		}
	});
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
}