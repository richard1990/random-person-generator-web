// generate a random male
function generateMale() {
	$("#tabledata").load("php/generate_random_person.php", {post_ismale: true});
}

// generate a random female
function generateFemale() {
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
}