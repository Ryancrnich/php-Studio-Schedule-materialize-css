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
        <h3>Sign Up Here</h3>
<form class="form-horizontal" action = "add_emaill.php" method="post">
  <div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static"></p>
  </div>
  <div class="form-group">
    <label class="sr-only">Email</label>
    <input name = "UserEmail" required="required"  maxlength="35"type="email" class="form-control" id="" placeholder="Email">
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

  <div class="container-fluid">
    <div class="container">
      <h2 class="text-center" id="title">Triple Studios Account</h2>
       <p class="text-center">
        <small id="passwordHelpInline" class="text-muted"> Developer: follow me on facebook <a href="https://www.facebook.com/JheanYu"> John niro yumang</a> inspired from <a href="https://p.w3layouts.com/">https://p.w3layouts.com/</a>.</small>
      </p>
      <hr>
      <div class="row">
        <div class="col-md-5">

                
          <form role="form" method="post" action="signupcomplete.php">
            <fieldset>              
              <p class="text-uppercase pull-center"> SIGN UP.</p> 
              <div class="form-group">
                             <?php
                               
if(isset($_GET['username'])){
  echo'<div class="form-group">';
$username = $_GET['username'];
echo '<input type="text" name="username" id="username" value="'.$username.'" required="required"class="form-control input-lg" placeholder="username">';
}

else{
 echo'<div class="form-group">';
   echo '<input type="text" name="username" id="username" required="required"class="form-control input-lg" placeholder="username">';
}
  echo "</div>";

if(isset($_GET['email'])){
echo'<div class="form-group">';
  
$email = $_GET['email'];
echo '<input type="text" name="email" id="email" value="'.$email.'" required="required"class="form-control input-lg" placeholder="email">';
}

else{
 echo'<div class="form-group">';
   echo '<input type="text" name="email" id="email" required="required"class="form-control input-lg" placeholder="email">';
}
  echo "</div>";

?>
               
              
              <div class="form-group">
                <input type="password" name="password"  required="required"id="password" class="form-control input-lg" placeholder="Password">
              </div>
                <div class="form-group">
                <input type="password" name="password2" required="required" id="password2" class="form-control input-lg" placeholder="Password2">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" required="required" class="form-check-input">
                  By Clicking register you're agree to our policy & terms
                </label>
                </div>
              <div>
                    <input type="submit" id="submit" class="btn btn-lg btn-primary   value="Register">
              </div>
            </fieldset>
          </form>

                          <?php
if(isset($_GET['error'])){


  $signupcheck = $_GET['error'];

   
  if( $signupcheck=="id"){
    echo"<p class = error>name did not work only characters for name</p>";

  }
    elseif($signupcheck =="password"){
    echo"<p  class = error>The password did not match</p>";
  
  }
   elseif($signupcheck =="emaill"){
    echo"<p  class = error>The email was not correct formatt</p>";
 
  }
   elseif($signupcheck =="nametaken"){
    echo"<p  class = error>The name was already taken</p>";
  
  }
    elseif($signupcheck =="emailalreadyused"){
    echo"<p  class = error>The email was already taken. try passwoprd reset to change password if you forgot your password</p>";
     
  }
  
}                ?>
        </div>
        
        <div class="col-md-2">
          <!-------null------>
        </div>
        
        <div class="col-md-5">

            <form role="form"method="post" action="signincomplete.php">
            <fieldset>              
              <p class="text-uppercase"> Login using your account: </p> 

              <div class="form-group">
                <?php

                 if(isset($_GET['username'])){
  echo'<div class="form-group">';
$username = $_GET['username'];
echo '<input type="text" name="username" id="username" value="'.$username.'" required="required"class="form-control input-lg" placeholder="username">';
}

else{
 echo'<div class="form-group">';
   echo '<input type="text" name="username" id="username" required="required"class="form-control input-lg" placeholder="username">';
}
  echo "</div>";

  ?>
              <div class="form-group">
                <input type="password" name="password"  required="required"id="password" class="form-control input-lg" placeholder="Password">
              </div>
              <div>
                 <input type="submit" id="submit" class="btn btn-lg btn-primary   value="Register">
              </div>
                 
            </fieldset>
        </form> 
                          <?php
if(isset($_GET['error'])){



  
  if( $signupcheck=="wrongusername"){
    echo"<p class = error>The email or username was wrong</p>";
  }
    elseif($signupcheck =="passwordcheck"){
    echo"<p  class = error>The password did not match</p>";
  }
  
}                ?>


        </div>
      </div>
    </div>
    <p class="text-center">
      <small id="passwordHelpInline" class="text-muted"> Developer:<a href="passwordreset.php"> Forgot Password?</a> BS. Information and technology students @2017 Credits: <a href="https://v4-alpha.getbootstrap.com/">boostrap v4.</a></small>
    </p>
  </div>

    <footer>
  

      <p>Killer Web Deisgn, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>
