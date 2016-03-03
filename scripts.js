// generate a random male
function generateMale() {
	$.ajax({
		dataType: "html",
		success: function() {
			$("#fullname").load("php/male_full_name.php");
			$("#email").load("php/email.php");
			$("#born").load("php/born.php");
			$("#age").load("php/age.php");
			$("#occupation").load("php/occupation.php");
			$("#birthplace").load("php/birthplace.php");
			$("#residence").load("php/residence.php");
			$("#phone").load("php/phone.php");
			$("#height").load("php/height.php");
			$("#weight").load("php/weight.php");
			$("#martial").load("php/martial.php");
			$("#bloodtype").load("php/bloodtype.php");
			$("#eyecolour").load("php/eyecolour.php");
			$("#haircolour").load("php/haircolour.php");
			$("#car").load("php/car.php");
			$("#maiden").load("php/maiden.php");
			$("#children").load("php/children.php");
			$("#favfood").load("php/favfood.php");
			$("#favcolour").load("php/favcolour.php");
			$("#mothersmaiden").load("php/mothersmaiden.php");
			$("#story").load("php/story.php");
		}
	});
}

// generate a random female
function generateFemale() {
	$.ajax({
		dataType: "html",
		success: function() {
			$("#fullname").load("female_full_name.php");
			$("#email").load("email.php");
			$("#born").load("born.php");
			$("#age").load("age.php");
			$("#occupation").load("occupation.php");
			$("#birthplace").load("birthplace.php");
			$("#residence").load("residence.php");
			$("#phone").load("phone.php");
			$("#height").load("height.php");
			$("#weight").load("weight.php");
			$("#martial").load("martial.php");
			$("#bloodtype").load("bloodtype.php");
			$("#eyecolour").load("eyecolour.php");
			$("#haircolour").load("haircolour.php");
			$("#car").load("car.php");
			$("#maiden").load("maiden.php");
			$("#children").load("children.php");
			$("#favfood").load("favfood.php");
			$("#favcolour").load("favcolour.php");
			$("#mothersmaiden").load("mothersmaiden.php");
			$("#story").load("story.php");
		}
	});
}