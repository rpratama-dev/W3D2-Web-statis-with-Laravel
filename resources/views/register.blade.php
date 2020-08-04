<!DOCTYPE html>
<html>
	<head>
		<title>Form Sign Up - SanberBook</title>
	</head>

	<body>
		<!--Bagian Body Awal-->
		<div>
			<h1>Buat Account Baru</h1>
			<h3>Sign Up Form</h3>
		</div>
		<!--Bagian Form-->
		<div>
		
			<form action="/welcome" method="POST">
				<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
				<label for="txtFirstname">First Name</label><br><br>
				<input type="text" placeholder="First Name" id="txtFirstname" name="txtFirsname"><br><br>
				<label for="txtLastname">Last Name</label><br><br>
				<input type="text" placeholder="Last Name" id="txtLastname" name="txtLastname"><br><br>
				
				<label>Gender:</label><br><br>
				<input type="radio" name="rdGender" value="Laki-Laki">Male<br>
				<input type="radio" name="rdGender" value="Laki-Laki">Female<br>
				<input type="radio" name="rdGender" value="Laki-Laki">Other<br><br>

				<label>Nationality:</label><br><br>
				<select name="slcNationality">
					<option value="indonesian">Indonesian</option>
					<option value="Philiphines">Philipines</option>
					<option value="Vietnam">Vietnam</option>
					<option value="Thailand">Thailand</option>
				</select><br><br>

				<label>Language Spoken:</label><br><br>
				<input type="checkbox" name="chLanguage" value="Bahasa Indonesia">Bahasa Indonesia<br>
				<input type="checkbox" name="chLanguage" value="English">English<br>
				<input type="checkbox" name="chLanguage" value="Other">Other<br><br>
				
				<label>Bio:</label><br><br>
				<textarea rows="7" cols="30" name="txtBio"></textarea><br>
				<input type="submit" value="Sign Up">
			</form>
		</div>
	</body>
</html>