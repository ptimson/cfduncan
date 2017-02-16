<?php 
// HTML Template from: view-source:http://getbootstrap.com/examples/starter-template/ 

// Simple Print Line
echo 'Contents of Submit:<br/>';

// Dump contents of my variable
var_dump($_POST);
echo '<br/>';

// Now we are going to handle / read the contents of the form from the POST
echo 'Email Address: ' . $_POST['my_email'] . '<br/>'; // . is used to join/concatinate strings

echo 'Password: ' . $_POST['my_password'] . '<br/>';

// Checkbox - If ticked value will be 1 else it wont exist inside the $_POST
// isset() can be used to check if a variable exists
if (isset($_POST['my_checkbox'])) {
	echo 'Checkbox: Ticked<br/>';
} else {
	echo 'Checkbox: NOT Ticked<br/>';
}
// Also we can do this
if ($_POST['my_checkbox'] == '1') {
	echo 'Checkbox: Ticked<br/>';
} else {
	echo 'Checkbox: NOT Ticked<br/>';
}

// Radio Buttons
// Similar to checkbox
echo 'Radio Value: ';
if (isset($_POST['my_radio1'])) {
	echo $_POST['my_radio1'];
} elseif (isset($_POST['my_radio2'])) {
	echo $_POST['my_radio2'];
} elseif (isset($_POST['my_radio3'])) {
	echo $_POST['my_radio3'];
} else {
	echo 'NO VALUE';
}
echo '<br />';

// Dropdown
echo 'Dropdown: ' . $_POST['my_dropdown_single'] . '<br/>';

// Dropdown Multi
echo 'Dropdown Multi: ';
// Can have multiple value = stored in a list (an array)
$dropdown_list = $_POST['my_dropdown_multi'];
// Print each item in list
foreach ($dropdown_list as $value) {
	echo $value . ", ";
}
echo "<br />";



?><!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://getbootstrap.com/favicon.ico">

		<title>Starter Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="style.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="http://getbootstrap.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="container">

			<h1>Chris's Example Form</h1>

			<form method="POST" action="">

				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input name="my_email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input name="my_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>

				<div class="checkbox form-group">
					<label>
						<input name="my_checkbox" type="checkbox"> Check me out
					</label>
				</div>

				<div class="form-group">
					<p>Some Question here:</p>
					<label class="radio-inline">
						<input name="my_radio1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
					</label>
					<label class="radio-inline">
						<input name="my_radio2" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
					</label>
					<label class="radio-inline">
						<input name="my_radio3" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
					</label>
				</div>


				<select name="my_dropdown_single" class="form-control form-group">
					<option value="one">1</option>
					<option value="two">2</option>
					<option value="three">3</option>
					<option value="four">4</option>
					<option value="five">5</option>
				</select>

				<select name="my_dropdown_multi[]" multiple class="form-control form-group">
					<option value="one">1</option>
					<option value="two">2</option>
					<option value="three">3</option>
					<option value="four">4</option>
					<option value="five">5</option>
				</select>

				<button type="submit" class="btn btn-default">Submit</button>
			</form>


		</div><!-- /.container -->


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="http://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>