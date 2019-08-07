<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	// $(document).ready(function(){
	// 	$("form").hide();
	// 	$("#bedit").click(function(){
	// 		$("form").show();
	// 	});
	// 	$("#bcancel").click(function(){
	// 		$("form").hide();
	// 	});
	// });
</script>
	<style>

#myjob {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#myjob td, #myjob th {
  border: 1px solid #ddd;
  padding: 8px;
}

#myjob tr:nth-child(even){background-color: #f2f2f2;}

#myjob tr:hover {background-color: #ddd;}

#myjob th {
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

input[type=text],input[type=password],select {
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

	.cancel {
	  width: 48%;
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
</style>
</head>
<body>
		<ul>
		<li><a href="dashboard.html">TDK Logo</a></li>
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
    <div>

    	<?php 
		include "action/config.php";
		$id = $_GET['id'];
		$sql="SELECT * FROM tb_informations WHERE id='".$id."'";
		$result=mysqli_query($con,$sql);		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
    	<form action="action/edit.php" method="POST">
    	<label>Id</label>
    	<input type="text" name="id" placeholder="id" value="<?php echo $data['id']; ?>">
    	<label>Information</label>
    	<input type="text" name="information" placeholder="information" value="<?php echo $data['information']; ?>" disabled>
    	<label>Mechine</label>
    	<input type="text" name="mechine" placeholder="Machine" value="<?php echo $data['mechine']; ?>" disabled>
    	<label>Status</label>
    	<input type="text" name="status" placeholder="status" value="<?php echo $data['status']; ?>">
    	<label>Status description</label>
    	<input type="text" name="status_description" placeholder="status description" value="<?php echo $data['status_description']; ?>">
    	<label>Finish by</label>
    	<input type="text" name="by" placeholder="by" value="<?php echo $data['finish_by']; ?>">
    	<input type="submit" name="" value="Simpan">
    </form>
    <?php } ?>
    </div>
    
	<!-- <h2>ini myjob</h2> -->
<!-- 	<table id="myjob">
		<tr>
			<th>no</th>
			<th>Date</th>
			<th>Information</th>
			<th>Machine</th>
			<th>Status</th>
			<th>Status description</th>
			<th>By</th>
			<th>Action</th>
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
			<td><?php echo $data['status_description']; ?></td>
			<td><?php echo $data['by']; ?></td>
			<td ><<a id="bedit" href="myjob.php?id=<?php echo $data['id']; ?>">Edit</a></td>
		    </tr>

				
		  <?php  }

			?>
		</tr>
	</table> -->

</body>
</html>