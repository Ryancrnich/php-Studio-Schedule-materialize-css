
<?php


	
include "db_connect.php";

$new_email = mysqli_real_escape_string($mysqli,$_POST["UserEmail"]);
$idb = "False";

    		if(isset($_POST['submit'])){
    			require '/mailer/get_oauth_token.php';
    		
    		$mail = new PHPMailer();
    		$mail ->Host = "smtp.gmail.com" ;
    		//$mail-> isSMTP();
    		$mail->SMTPAuth = true;
    		$mail->Username = 'Tripemstudiosbusiness@gmail.com';
    		$mail->isHTML('true');
    		$mail->Password = 'TripleM123';
    		$mail->STMPSecure = 'ssl';
    		$mail->Port =465;
    		$mail->Subject = 'testing';
    		$mail->Body = 'Thank you for signing up to our newa letter.';
    		$mail->setForm('triplemstudiosbusiness@gmail.com', 'Mike');
    		$mail->addAdress($new_email);
    		if($mail->send()){
    			echo "mail sent";
    		}
    		else{
    			echo "did not send";
    		}
    									}
?>