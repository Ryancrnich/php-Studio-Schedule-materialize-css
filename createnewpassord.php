<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Triple M Studios">
    <meta name="keywords" content="Music, pod cast, author">
    <meta name="author" content="Ryan Crnich">
    <title>Triple M Studios | About</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <title></title>

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  </head>
  <body>


<header>
      <div class="container">
        <div id="branding">
           <ul>
          
            <li>
             <a href="book.html"target="_blank"> <img src="./images/facebook.png"></a>
             <a href="http://www.youtube.com"target="_blank"> <img src="./images/YouTube.png"></a>
             <a href="http://www.itunes.com"target="_blank"> <img src="./images/snapchat.png"></a>
         <a href="http://www.paytron.com"target="_blank"> <img src="./images/intsagram.png"></a>
            </li>
            
          </ul>
    
        </div>
  
     
          
      </div>
      <div class="container">
        <div id="branding">

          <h1><span class="highlight">Triple M</span> Studios</h1>
        </div>
        <nav>
          <ul>
             <li><a href="index.php">Home</a></li>
            <li ><a href="about.php">About</a></li>
            <li ><a href="services.php">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="newsletterr">
      <div class="container">
        <h3>Plase Enter the Email you would like to reset</h3>
<form class="form-horizontal" action = "passwordresetdone.php" method="post">
  <div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static"></p>
  </div>
  <div class="form-group">
    <label class="sr-only">Email</label>
    <input name = "UserEmail" required="required"  maxlength="35"type="email" class="form-control" id="UserEmail" placeholder="Email">
  </div>
<div class="fb-button form-group field-button-1545001275765"><button name="submit" id="submit" type="submit" value="Submit"class="btn btn-primary btn-lg">Submit</button></div></div>
</form>


      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
         <div class="container">
  



        <aside id="sidebarr">
          <div class="dark">
            <h3>What We Do</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna</p>
          </div>
        </aside>
      </div>



<?php

$selector =$_GET["selector"];
$vaildator = $_GET["vaildator"];



if(empty($vaildator) || empty($selector)){
	echo"could not vaildate your request";}
	
?>

<form role="form"method="post" action="passwordresetlast.php">
            <fieldset>              
              <p class="text-uppercase">Reset your password here </p> 

              <div class="form-group">
             <div class="form-group">
             	<input type ="hidden" name="selector"required="required" id="selector" value = <?php echo $selector; ?>>
             	<input type ="hidden" name="vaildator" required="required" id="vaildator" value = <?php echo $vaildator; ?>>
                <input type="password" name="password"  required="required"id="password" class="form-control input-lg" class="form-control input-lg" placeholder="Password">
              </div>
              <div class="form-group">
                   <input type="password" name="password2"  required="required"id="password2" class="form-control input-lg" placeholder="Password">
                   </div>
                   <div>
                 <button name="submit" id="submit" type="submit" id = "submit"value="Submit"class="btn btn-primary btn-lg">Reset Password</button
              </div>

                 
            </fieldset>
        </form> 









    </section>

      <script src="jquery/jquery.min.js"></script>
    <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!---- boostrap.min link local ----->
    
    <link rel="stylesheet" href="css/style.css">
    <!---- boostrap.min link local ----->

    <script src="js/bootstrap.min.js"></script>
    <!---- Boostrap js link local ----->
    
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <!---- Icon link local ----->
    
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!---- Font awesom link local ----->
  </head>

<body>
  
  <br>
    <br>
      <br>
        <br>
          <br>
            <br>
    <br>
      <br>    <br>
      <br>

</body>
                           
    <footer>
  

      <p>Killer Web Deisgn, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>
