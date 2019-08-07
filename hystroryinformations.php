<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
#hystroryinformations {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#hystroryinformations td, #hystroryinformations th {
  border: 1px solid #ddd;
  padding: 8px;
}

#hystroryinformations tr:nth-child(even){background-color: #f2f2f2;}

#hystroryinformations tr:hover {background-color: #ddd;}

#hystroryinformations th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
	text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 0.6s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate;
}
img{
	width:40px;
	height:20px;
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
<!-- 	<h2>ini hystroryinformations</h2> -->
	<table id="hystroryinformations">
		<tr>
			<th>no</th>
			<th>Date</th>
			<th>Information</th>
			<th>Machine</th>
			<th>Status</th>
		</tr>
		<tr>
			<?php
			include "action/config.php";
			$sql="SELECT * FROM tb_informations";
			$result=mysqli_query($con,$sql);
			while($data=mysqli_fetch_array($result)){?>

			<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['date']; ?></td>
			<td class="blink"><?php echo $data['information']; ?></td>
			<td class="blink"><img src="img/<?php echo $data['mechine'].".png";?>"></td>
			<td><?php echo $data['status']; ?></td>
		    </tr>

				
		  <?php  }

			?>
		</tr>
	</table>

</body>
</html>