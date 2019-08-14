
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

$selector = bin2hex(random_bytes(8));
$token =  random_bytes(32);

$url = "http://localhost/createnewpassord.php?selector=" . $selector . "&vaildator=" . bin2hex($token);
$expires = date('U') + 1200;


$email = mysqli_real_escape_string($mysqli,$_POST["UserEmail"]);
$idb = "False";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
 	$sql = "DELETE FROM passwordreset WHERE resetemail =? ";
	$stmt = mysqli_stmt_init($mysqli);
	if(!mysqli_stmt_prepare($stmt,$sql )){

		echo"sql statement failed";
										}
	else{
		mysqli_stmt_bind_param($stmt,"s",$email);
		mysqli_stmt_execute($stmt);
	
 $sql = "SELECT * FROM user where Name = ? or Email = ?";
  $stmt = mysqli_stmt_init($mysqli);

    if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"sql statement failed";
                    }
 

mysqli_stmt_bind_param($stmt,"ss",$email,$email);
    mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);

		if(!$row = mysqli_fetch_assoc($result)){
echo "There was not user with that name or email in the system";
exit();
	}

   
                                
      else{

					
			$sql = "INSERT INTO  passwordreset (resetemail , resetselector , resettoken , resetexpires ) VALUES(?,?,?,?);";
			

			$stmt = mysqli_stmt_init($mysqli);
	if(!mysqli_stmt_prepare($stmt,$sql )){
		echo"sql statement failed";
			
		exit();
										}
	else{
		
	$hashedtoken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt,"ssss",$email,$selector,$hashedtoken,$expires);
		mysqli_stmt_execute($stmt);
		require('phpmailer/PHPMailerAutoload.php');


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'triplemstudiosbusiness@gmail.com';                 // SMTP username
$mail->Password = 'TripleM123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('triplemstudiosbusiness@gmail.com');
$mail->addAddress($new_email); 
    // Add a recipient
$mail->addReplyTo('triplemstudiosbusiness@gmail.com' );


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
    $message = '<p>Thanks for signing up with M3 Studios</p>';
$mail->Subject = 'Thanks for joining';
$mail->Body    = $message;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}



        }
        }
                                
            }
            
            


											}	}









	
    							
    		
    		
    		

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

