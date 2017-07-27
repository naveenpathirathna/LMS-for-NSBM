<?php 

session_start();

	$conn = mysqli_connect("localhost","root","","lmsnsbm");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

$uid = $_POST['user'];
$pwd = $_POST['pass'];


$sql = "SELECT * FROM students WHERE username='$uid' AND password='$pwd'";


$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)){
	header('Location:index.php');
}else {
 	$_SESSION['uname'] = $row['username'];
    header('Location:Alogin.php');

}







 ?>