<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="Computer Department";
$fid=$_POST['Fd_id'];
$name=$_POST['Sname'];
$dob=$_POST['DOB'];
$gen=$_POST['gender'];
$room=$_POST['Room_no'];
$building=$_POST['Building'];
$street=$_POST['Street_no'];
$town=$_POST['town'];
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if(!$conn)
{echo "connection was failed: ". mysqli_connect_error();}
if(empty($fid)/*||empty($name)||empty($dob)||empty($gen)||empty($phone)||empty($room)||empty($building)||empty($street)||empty($town)*/)
{
	echo "all fields are required";}
else
{
	$sql= "INSERT into Student (Fd_id,Name,DOB,Gender,Room_no,Building,Street_no,Town) values('$fid','$name','$dob','$gen','$room','$building','$street','$town')" ;
	
	if(mysqli_query($conn, $sql)){
echo "Your data has been submitted";
  }else{echo "Something went wrong";
 }
}
header("refresh:2; url=student.php")
?>