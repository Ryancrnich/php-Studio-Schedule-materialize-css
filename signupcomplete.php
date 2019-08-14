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


$date = date("Y-m-d");
$Name = mysqli_real_escape_string($mysqli,$_POST["username"]);
$email = mysqli_real_escape_string($mysqli,$_POST["email"]);
$password = mysqli_real_escape_string($mysqli,$_POST["password"]);
$password2 = mysqli_real_escape_string($mysqli,$_POST["password2"]);



if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
	header("Location: ../signuppage.php?error=emaill&username=$Name");
	exit();
}
elseif($password !== $password2) {
	header("Location: /signuppage.php?error=password&email=$email&username=$Name");
	exit();
}

else{
	$sql = "SELECT Name FROM user WHERE Name= ?";
		$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt,$sql)){
		echo"sql statement failed";
										}
	else{
		mysqli_stmt_bind_param($stmt,"s",$Name);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		if($result->num_rows > 0){
	
		header("Location: ../signuppage.php?error=nametaken&email=$email");
		exit();


	
												}
		$sql = "SELECT * FROM user WHERE Email= ?";
		$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt,$sql)){
		echo"sql statement failed";
										}
	else{
		mysqli_stmt_bind_param($stmt,"s",$email);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) { /*checks for match on email entered*/
		header("Location: ../signuppage.php?errorr=emailalreadyused&username=$Name");
		exit();
		
	
												}
}}





	





	$string = "<h2>Thank you mike! We are looking forward to working with you. </h2>";

$string2 = preg_replace("/mike/","$Name",$string);
echo "$string2";

$sql = "INSERT INTO user (Name,Email,password,Datee,superuser) VALUES(?, ?, ?, ?, ?)";
    	$stmt = mysqli_stmt_init($mysqli);
    	if(!mysqli_stmt_prepare($stmt,$sql )){
    		echo"SQL error";
    	}
    
    	else{
    		//echo"SQL no error";
    	$hash = password_hash($password, PASSWORD_DEFAULT);
    	$superuser= "false";


    		mysqli_stmt_bind_param($stmt,"sssss",$Name,$email,$hash,$date,$superuser);
			mysqli_stmt_execute($stmt);
		
    	}

		           
		       
		}
mysqli_stmt_close($stmt);

	}
	
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

