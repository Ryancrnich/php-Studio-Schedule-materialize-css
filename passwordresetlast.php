<?php

if(isset($_POST["submit"])){
	$selector =$_POST["selector"];
    $vaildator = $_POST["vaildator"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];

	
if($password !== $password2){

	exit();
}


$currentDate = date("U");
include "db_connect.php";



$sql = "SELECT * FROM passwordreset WHERE resetselector =? ";
$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt,$sql)){
		echo"sql statement failed";
										}
	else{

		mysqli_stmt_bind_param($stmt,"s",$selector);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);

		if(!$row = mysqli_fetch_assoc($result)){}

			else{

			$tokenBin = hex2bin($vaildator);
			$tokenCheck = password_verify($tokenBin,$row["resettoken"]);
			echo$row["resettoken"];
			echo $tokenBin;

			if(!$tokenCheck){
echo "token check fail";
			}
			elseif($tokenCheck){
				$tokenEmail = $row['resetemail'];

$sql = "SELECT * FROM user WHERE Email =?";
$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt,$sql)){
		echo"sql statement failed";
										}
	else{
		mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		
		if(!$row = mysqli_fetch_assoc($result)){
		header("Location: ../signuppage.php?");
		exit();
			}
		else{
			$sql = "UPDATE user SET password =? WHERE  Email=? ";
			$stmt = mysqli_stmt_init($mysqli);
			if(!mysqli_stmt_prepare($stmt,$sql)){
		echo"sql statement failed";
										}
	else{
		$hash = password_hash($password, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt,"ss",$hash,$tokenEmail);
		mysqli_stmt_execute($stmt);

		
	$sql = "DELETE FROM passwordreset WHERE resetemail =? ";
	$stmt = mysqli_stmt_init($mysqli);
	if(!mysqli_stmt_prepare($stmt,$sql )){

		echo"sql statement failed";
										}
	else{
		mysqli_stmt_bind_param($stmt,"s",$email);
		mysqli_stmt_execute($stmt);
		echo"done";
	

		}
		}
		}

}}}}}