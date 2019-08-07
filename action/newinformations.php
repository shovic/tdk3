<?php
include "config.php";
$information = $_POST['information'];
$machine= $_POST['machine'];
$status="On Progress";
$sql="INSERT INTO tb_informations (information,mechine,status) values ('".$information."','".$machine."','".$status."')";
$result=mysqli_query($con,$sql);
if($result){
	header('Location:../myjob.php');
}else{
	echo "data gagal dikirim";
}


?>