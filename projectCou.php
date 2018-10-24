<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="Computer Department";
$fdid=$_POST['Fd_id'];
$name=$_POST['Cname'];
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if(!$conn)
{echo "connection was failed: ". mysqli_connect_error();}
if (empty($fdid)||empty($name)) {
	echo "all fields are required";
}
else{
	$sql= "INSERT into Courses (Fd_id,CName)  values ('$fdid','$name')";
if(mysqli_query($conn, $sql)){
echo "your data has been submitted";
}else{echo "something went wrong";
}
}
header("refresh:2; url=courses.php")

?>