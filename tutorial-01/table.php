<?php 
// HTML Template from: view-source:http://getbootstrap.com/examples/starter-template/ 

// Make sure you run the form.php page a few times first

// Lets read in file contents
$my_file = fopen('file-appended.csv', 'r');

$values = [];
// Sorry I messed up we have to do this
while (($data = fgetcsv($my_file)) !== FALSE) {
	array_push($values, $data);
}
fclose($my_file);

// Print Values
// var_dump($values);


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

	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Chris Tutorial 01</a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="form.php">Form</a></li>
	            <li class="active"><a href="table.php">Table</a></li>	            
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


		<div class="container">

			<h1>Chris's Example Table</h1>

			<table class="table"> 
				<caption>Optional table caption.</caption> 
				<thead>
					<tr>
						<th>#</th>
						<th>Email</th>
						<th>Password</th>
						<th>Checkbox</th>
						<th>Radio</th>
						<th>Dropdown Single</th>
						<th>Dropdown Multi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// We can mix PHP and HTML!
						// So we need to add a th for each value for the CSV above...
						// var_dump($values); if you need to see them

						// Lets keep track of the row number
						$index = 1;
					?>
					<?php foreach ($values as $row): ?>
						<tr>
							<th scope="row"><?php echo $index ?></th>
							<td><?php echo $row[0] ?></td>
							<td><?php echo $row[1] ?></td>
							<td><?php echo $row[2] ?></td>
							<td><?php echo $row[3] ?></td>
							<td><?php echo $row[4] ?></td>
							<td><?php echo $row[5] ?></td>
						</tr>
					<?php $index++; ?>
					<?php endforeach ?>
				</tbody>
			</table>
			
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