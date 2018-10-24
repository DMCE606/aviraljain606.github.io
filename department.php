<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="Computer Department";
$name=$_POST['Dname'];
$loc=$_POST['Dloc'];
$op=$_POST['op'];
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if(!$conn)
{echo "connection was failed: ". mysqli_connect_error();}
if(empty($name) ||empty($op))
	{echo "All Fields Are Required";}
else
{	if ($op == "1") {
	$sql="INSERT INTO Department (D_name,D_loc) values ('$name','$loc')";
 }
 if ($op == "2") {
  	$sql="UPDATE Department SET D_loc='$loc' WHERE D_name='$name'";
  } 
  if ($op == "3") {
  	$sql="Delete FROM Department WHERE D_name='$name'";
  }
	if(mysqli_query($conn, $sql)){
echo "Your data has been submitted";
}else{echo "Something went wrong";
}
}
header("refresh:2; url=department.php")
?>