<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="Computer Department";
$fdid=$_POST['Fd_id'];
$name=$_POST['name'];
$qua=$_POST['Qua'];
$des=$_POST['Des'];
$exp=$_POST['Exp'];
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if(!$conn)
{echo "connection was failed: ". mysqli_connect_error();}
if(empty($fdid)||empty($name)||empty($qua)||empty($des)||empty($exp))
{
	echo "all fields are required";
}
else
{
	$sql= "INSERT into Faculty (Fd_id,Name,Qualification,Designation,Experience)  values ('$fdid','$name','$qua','$des','$exp')";
if(mysqli_query($conn, $sql)){
echo "your data has been submitted";
}else{echo "something went wrong";
}
}
header("refresh:2; url=faculty.php")
?>