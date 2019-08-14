<!DOCTYPE html>
<html>
<title></title>
<link rel="stylesheet" href="./css/style1.css">
<header>
	 <div class="container">
        <div id="branding">
          <h1><span class="highlight">Triple M</span> Studios</h1>
        </div>
        <nav>
          <ul>
             <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
          </ul>
        </nav>
      </div>

</header>
<body>
	
    


 <?php
 


include "db_connect.php";

date_default_timezone_set('America/Chicago');



$Name = mysqli_real_escape_string($mysqli,$_POST["username"]);
$password = mysqli_real_escape_string($mysqli,$_POST["password"]);


	$sql = "SELECT * FROM user WHERE Name=? OR Email= ?;";
		$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt,$sql)){
		echo"sql statement failed";
										}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$Name,$Name);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($result)){
	

		 if(password_verify($password, $row['password'])) {

	session_start();
	$_SESSION['User_ID'] = $row['User_ID'];
	$_SESSION['Name'] = $row['Name'];
	$_SESSION['Email'] = $row['Email'];
	$_SESSION['superuser'] = $row['superuser'];
	header("Location: ../index.php?login=success");
	exit();

												}
else{
	header("Location: ../signuppage.php?error=passwordcheck&username=$Name");
		exit();
}
											}
		else{
		header("Location: ../signuppage.php?error=wrongusername");
		exit();
		}
		

	}

		
	
												






	$string = "<h2>Thank you mike! We are looking forward to working with you. </h2>";

$string2 = preg_replace("/mike/","$Name",$string);
echo "$string2";


		           
		       
mysqli_stmt_close($stmt);

	
	
?>
<br>

<a href="index.php"> Return to main page </a>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<footer>
      <p>Killer Web Deisgn, Copyright &copy; 2019</p>
    </footer>
</body>
</html>

