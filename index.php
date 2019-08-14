<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    
    <meta name="description" content="Triple M Studios">
    <meta name="keywords" content="Music, pod cast, author">
    <meta name="author" content="Ryan Crnich">
    <title>Triple M Studios | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <title></title>

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

</head>
<body>
   <header>
  
    </div>
    </div>
    
</div>
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
         

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>
  <form class="modal-content" action="signupcomplete.php">
    <div class="container">


      

      <div class="clearfix">
       
       
      </div>
    </div>
  </form>
</div> <?php
if(isset($_SESSION['Name'])){
  $name =$_SESSION['Name'];

echo'<h3> Welcome '.$name.'</h3>';
 
         echo' <a href="logout.php">logout</a>
          ';
        }
        else{
          echo('log in
            
           <a href="signuppage.php">signup</a>');
        }
          ?>
           
           <a href="schudule.php">schudule</a>
          <ul>
             <li class="current"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li ><a href="services.php">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>
      
    </header>


<?php
$host = "localhost";
$username = "root";
$password = "usbw";
$database = "test";


include "db_connect.php";
//echo $mysqli->host_info . "<br>";
 
?> 
    <section id="showcase">
      <div class="container">
        <h1>We do it all and we do it well</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem interdum condimentum.</p>
      </div>
    </section>

    <section id="newsletterr">
      <div class="container">
    
       <h1>Follow Our News Letter</h1>

       
         <img src="./images/logo_brush.png">
  

<h3>Sign Up Here</h3>
<form class="form-horizontal" action = 'add_emaill.php'method="post">
  <div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static"></p>
  </div>
  <div class="form-group">
    <label class="sr-only">Email</label><fieldset>
    <input name = "UserEmail" type="email" maxlength="35" required="required" class="form-control" id="UserEmail" placeholder="Email"> 
    
  </div>
<div class="fb-button form-group field-button-1545001275765"><button name="submit" id="submit" type="submit" value="Submit"class="btn btn-primary btn-lg">Submit</button></div></div>

</form>



            </div>
           
        </div>
    </div>
</div>  
    </section>


<?php


$mysqli->close();
?>
</div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./images/logo_html.png">
          <h3>Books</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
        </div>
        <div class="box">
          <img src="./images/logo_css.png">
          <h3>Music</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
        </div>
        <div class="box">
          <img src="./images/logo_brush.png">
          <h3>Youtube</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
        </div>
      </div>
    </section>


    <footer>
      <p>Killer Web Deisgn, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>