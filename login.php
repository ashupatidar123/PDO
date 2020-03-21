<?php
require_once ('dbOperation/adminController.php');

$obj = new ADMIN($dbCon);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  	<h2>Admin Login</h2>
	<div class="row">
		<div class="col-md-6">
			<form method="post" enctype="multipart/form-data">
			    <div class="form-group">
			      <label>Email:</label>
			      <input type="email" class="form-control" placeholder="Enter email" name="email">
			    </div>
			    <div class="form-group">
			      <label>Password:</label>
			      <input type="text" class="form-control password" placeholder="Enter password" name="password">
			    </div>
			    <button type="submit" class="btn btn-info">Submit</button>
			</form>
		</div>
	</div>		
</div>

</body>
</html>
