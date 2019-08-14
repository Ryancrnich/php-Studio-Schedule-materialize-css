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

$datePicker = $_POST["date"];
$date = date("m-d-Y");

$Name = mysqli_real_escape_string($mysqli,$_POST["Name"]);
if($date <$datePicker){
}
else{
    echo "Cant do prevois days";
    exit();
}
$sql = "SELECT * FROM opened WHERE datee =? ";
$stmt = mysqli_stmt_init($mysqli);

    if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"sql statement failed";
                    }
 

    mysqli_stmt_bind_param($stmt,"s",$datePicker);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if(!$row = mysqli_fetch_assoc($result)){
      echo "no days able to be schduled";
    }

      else{

        $time = $row["timee"];

        $hours = $row["hours"]; 









$sql = "INSERT INTO taken (name, timee, datee, hours) VALUES(?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($mysqli);
          if(!mysqli_stmt_prepare($stmt,$sql )){
        echo"SQL error";
      }
    
      else{
        //echo"SQL no error";


        mysqli_stmt_bind_param($stmt,"ssss", $Name,$time,$datePicker,$hours);
      mysqli_stmt_execute($stmt);
   
    
      }

  $sql = "DELETE FROM opened WHERE datee =? ";
  $stmt = mysqli_stmt_init($mysqli);
  if(!mysqli_stmt_prepare($stmt,$sql )){

    echo"sql statement failed";
                    }
  else{
                    

    mysqli_stmt_bind_param($stmt,"s",$datePicker);
    mysqli_stmt_execute($stmt);
      echo"done";

    
      }

  
                        }
    
 
                        


    ?>



<br>

<a href="schudule.php"> Return to schudule </a>

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

