<?php
session_start(); 
?>
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
 $name =$_SESSION['Name'];
 $datePicker = mysqli_real_escape_string($mysqli,$_POST["dateee"]);





$sql = "SELECT * FROM taken WHERE datee= ? AND name =?;";
		$stmt = mysqli_stmt_init($mysqli);

		if(!mysqli_stmt_prepare($stmt,$sql)){
		echo"sql statement failed";
										}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$datePicker,$name);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($result)){


$hours = $row['hours'];
$time = $row['timee'];
	}






$sql = "INSERT INTO opened (datee,hours,timee) VALUES(?, ?, ?);";


		$stmt = mysqli_stmt_init($mysqli);
		    	if(!mysqli_stmt_prepare($stmt,$sql )){
    		echo"SQL error";
    	}
    
    	else{
    		//echo"SQL no error";


    		mysqli_stmt_bind_param($stmt,"sss",$datePicker,$hours,$time);
			mysqli_stmt_execute($stmt);
			echo"done";
		
    	}


	
			$sql = "delete FROM taken WHERE datee = ?;";

		$stmt = mysqli_stmt_init($mysqli);
		    	if(!mysqli_stmt_prepare($stmt,$sql )){
    		echo"SQL error";
    	}
    
    	else{
    		//echo"SQL no error";


    		mysqli_stmt_bind_param($stmt,"s",$datePicker);
			mysqli_stmt_execute($stmt);
			echo"done";
	}
	
}
	
										
		

	

		
	
											

		           
		       
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

