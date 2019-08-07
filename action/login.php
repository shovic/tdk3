<?php
include "config.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM tb_users WHERE username='".$username."' AND password='".$password."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1){
	//echo "benar";
    header('Location:../dashboard.html');
}else{
	echo "Wrong username or password!";}


?>