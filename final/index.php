<html lang="en">

	<head>
		<!--
		In the <head> tag, you may choose to load any files or other assets required for your page. You might also choose to set some page settings, such as the <title>.

		The text in here will not be visible in the user's browser.

		For now, let's put some settings in and load some files that I think are good for every beginner:
		-->

		<title>Xray Automation</title>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>


	<body>
		<!--
		The actual content of your web page belongs in here, in the <body> tag.
		
		Your code starts below here:
		-->
		<div class="main">

			<h1>Imaging Request</h1>

			<form method="POST" action="request.php">

				<div class="section">
					<h2>Patient Details</h2>
					<h3>Please ensure this section is completed in full.</h3>
					<input type="text" placeholder="Hospital ID number" name="id">
					<input type="text" placeholder="First name" name="first_name">
					<input type="text" placeholder="Last name" name="last_name">
					<input type="text" placeholder="Date of birth" name="date_of_birth">
					<input type="text" placeholder="Current location"  name="location">
				</div>

				<div class="section">
					<h2>Imaging Requested</h2>
					<h3>Please indicate the modality and desired views.</h3>
					<textarea name="imaging_requested"></textarea>
				</div>

				<div class="section">
					<h2>Reason for Request</h2>
					<h3>Please indicate the purpose for this imaging (ie confirm/exclude/assess progress of).</h3>
					<textarea name="reason_for_imaging"></textarea>
				</div>

				<div class="section">
					<h2>Clinical Details</h2>
					<h3>Please include brief details of history and examination.</h3>
					<textarea name="clinical_details"></textarea>
				</div>

				<button type="submit">Send Imaging Request</button>

			</form>
			
		</div>

	</body>

</html>