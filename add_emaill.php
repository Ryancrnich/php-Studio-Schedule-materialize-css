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

$new_email = mysqli_real_escape_string($mysqli,$_POST["UserEmail"]);
$idb = "False";
date_default_timezone_set('America/Chicago');


$date = date("m-d-Y");

if(filter_var($new_email, FILTER_VALIDATE_EMAIL)){
 
    $sql = "SELECT Email FROM email WHERE Email=? ";
    $stmt = mysqli_stmt_init($mysqli);
    if(!mysqli_stmt_prepare($stmt,$sql )){
        echo"sql statement failed";
                                        }
    else{
        mysqli_stmt_bind_param($stmt,"s",$new_email);
        mysqli_stmt_execute($stmt);
    

        $result = mysqli_stmt_get_result($stmt);

        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) { /*checks for match on email entered*/
            $string = "<h2>The E-mail mike is already in our database.</h2>";
            $string1 ="<p> We will keep you posted on up coming project we are releasing. </p>";
            $string2 = preg_replace("/mike/","$new_email",$string);
            echo "$string2";
            echo "$string1";

            $idb = "True";
            break;

                                            }       
                                }
            }
                                                }
                                            

        else {
            $name_error = "Email is not valid";
        echo "<h2>The email was not valid please try again.</h2>";
        $idb = "True";
    }







    if($idb == "False"){/*adds the email if not in list*/
        $string = "<h2> mike was added to the database. </h2>";

        $string2 = preg_replace("/mike/",$new_email,$string);
        echo "$string2";

        $sql = "INSERT INTO email (Email, datee) VALUES(?,?)";
        $stmt = mysqli_stmt_init($mysqli);
        if(!mysqli_stmt_prepare($stmt,$sql )){
            echo"SQL error";
        }
    
        else{
            //echo"SQL no error";
            mysqli_stmt_bind_param($stmt,"ss",$new_email,$date);
            mysqli_stmt_execute($stmt);




require('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

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
<br>
    
 <footer>
      <p>Killer Web Deisgn, Copyright &copy; 2019</p>
    </footer>
</body>
</html>