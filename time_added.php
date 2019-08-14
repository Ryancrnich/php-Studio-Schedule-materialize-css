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
 if(isset($_POST['submit'])){


include "db_connect.php";

date_default_timezone_set('America/Chicago');

$idb = "True"; // in data base
$date = date("Y-m-d");
$new_name = mysqli_real_escape_string($mysqli,$_POST["Name"]);
$new_email = mysqli_real_escape_string($mysqli,$_POST["emaill"]);
$new_message = mysqli_real_escape_string($mysqli,$_POST["message"]);

if(filter_var($new_email, FILTER_VALIDATE_EMAIL)){
	
if(preg_match("/^[a-zA-Z ]*$/" , $new_name)){

if(preg_match("/\./" , $new_message)){
	$idb = "False";

		$sql = "SELECT DATEE FROM timee WHERE DATEE=? AND EMAIL=?";
		$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt,$sql)){
		echo"sql statement failed";
										}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$date ,$new_email);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) { /*checks for match on email entered*/
			echo "<h3>We already have reevied a meassage form you today, but you can come back tomorrow to enter a new contact form.</h3>";
			$idb = "True";
			break;
												}}}
									}
		else{

	echo"<h3>The meassage was incomplete. Please enter a message using complete sentences.</h3>";
	}
		}

	else{
	
	echo"<h3>The Name was has unvaild characters. Please enter your name just letters and spaces</h3>";
	}

						}
		else{
	
	echo"<h3>The Email was unvaild characters. Please enter a valid email address.</h3>";
	}

		
if($idb == "False"){
	$string = "<h2>Thank you mike! We are looking forward to reading your meassage. </h2>";

$string2 = preg_replace("/mike/","$new_name",$string);
echo "$string2";

$sql = "INSERT INTO timee (NAME,EMAIL,MESSAGE,DATEE) VALUES(?, ?, ?, ?)";
    	$stmt = mysqli_stmt_init($mysqli);
    	if(!mysqli_stmt_prepare($stmt,$sql )){
    		echo"SQL error";
    	}
    
    	else{
    		//echo"SQL no error";
    		mysqli_stmt_bind_param($stmt,"ssss",$new_name,$new_email,$new_message,$date);
			mysqli_stmt_execute($stmt);
    	}

		           }
		       }
		else{
    	echo("<h3>The submit button was not pressed. Please try the link below.</h3>");
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

