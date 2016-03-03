// generate a random male
function generateMale() {
	$.ajax({
		dataType: "html",
		success: function() {
			$("#data").load("php/generate_male.php");
		}
	});
}

// generate a random female
function generateFemale() {
	$.ajax({
		dataType: "html",
		success: function() {
			$("#data").load("php/generate_female.php");
		}
	});
}