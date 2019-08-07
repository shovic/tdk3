<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	input[type=text],input[type=password],select,textarea {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	input[type=submit] {
	  width: 100%;
	  background-color: #4CAF50;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	div {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}
	
	ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
	}

	li {
	  float: left;
	}

	li a {
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	li a:hover:not(.active) {
	  background-color: #111;
	}

	.active {
	  background-color: #4CAF50;
	}
</style>
</head>
<body>
			<ul>
		<li><a href="dashboard.html">TDK </a></li>
		<li><a href="myjob.php">My Job</a></li>
		<li><a href="newinformations.php">New Informations</a></li>
		<li><a href="hystroryinformations.php">Hystory Informations</a></li>
		<li><a href="profile.php">Profile</a></li>
		<li style="padding-top:10px;">
        <a href="index.html" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </li>
    </ul>
	<!-- <h2>ini new informations</h2> -->
	<div>
		<form action="action/newinformations.php" method="POST">
			<textarea name="information" placeholder="keterangan"></textarea>
			<select name="machine">
				<option value="mechine1">Mesin 1</option>
				<option value="mechine2">Mesin 2</option>
				<option value="mechine3">Mesin 3</option>
			</select>
			<input type="submit" name="" value="Send">
		</form>

	</div>
</body>
</html>