<?php
include "config.php";
$id=$_POST['id'];
$status=$_POST['status'];
$status_description=$_POST['status_description'];
$by=$_POST['by'];
$sql="UPDATE tb_informations SET status='".$status."',status_description='".$status_description."',finish_by='".$by."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
if($result){
    header('Location:http://localhost/tdk3/myjob.php');
}else{
	// header('Location:../myjob-edit.php');
}
?>