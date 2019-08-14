<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Triple M Studios">
	  <meta name="keywords" content="Music, pod cast, author">
  	<meta name="author" content="Ryan Crnich">
    <title>Triple M Studios | Services</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
      <?php
if(isset($_SESSION['Name'])){
  $name =$_SESSION['Name'];
echo'<h3> Welcome '.$name.'</h3>'; 
}
?>

      <div class="container">
        <div id="branding">

          <h1><span class="highlight">Triple M</span> Studios</h1>
        </div>
        <nav>
          <ul>
             <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="current"><a href="services.php">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="newsletterr">
      <div class="container">
       <h1>Follow Our News Letter</h1>

       
         <img src="./images/logo_brush.png">

<h3>Sign Up Here</h3>
<form class="form-horizontal" action = "add_emaill.php" method="post">
  <div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static"></p>
  </div>
  <div class="form-group">
    <label class="sr-only">Email</label>
    
    <input name = "UserEmail" required="required" type="email"  maxlength="35" class="form-control" id="" placeholder="Email">
  </div>
<div class="fb-button form-group field-button-1545001275765"><button name="submit" id="submit" type="submit" value="Submit"class="btn btn-primary btn-lg">Submit</button></div></div></form>


            </div>
        </div>
    </div>
</div>  
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title"><strong>Products</strong></h1>
          <ul id="services">
            <li>
              <h3>Books</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p><a href="book.html"target="_blank">Buy Book Here</a></p>
            </li>
            <li>
              <h3>Youtube</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p><p><a href="http://www.youtube.com"target="_blank">Youtube Channel</a></p></p>
            </li>
            <li>
              <h3>Music</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p><a href="http://www.itunes.com"target="_blank">Where To Find Our Music</a></p>
            </li>
            <li>
              <h3>Paytron</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
              <p><a href="http://www.paytron.com"target="_blank">Sub To Our Paytron</a></p>
            </li>
            
          </ul>
        </article>

         <aside id="sidebar">
          <div class="dark">
            <h3>Contact Us</h3>
            <div>

  <?php
if(isset($_SESSION['Name'])){
  $name =$_SESSION['Name'];
  $email =$_SESSION['Email'];
echo' <form action = "time_added.php" method="post" id="rendered-form"><div class="rendered-form"><div class="fb-text form-group field-Name">


<label class="fb-text-label" for="Name"><span class="fb-required">Name*</span></label><input name="Name" class="form-control" id="Name" type="text" maxlength="30" value="'.$name.'"></div>



<div class="fb-text form-group field-Email"><label class="fb-text-label" for="emaill">Email<span class="fb-required">*</span></label><input name = "emaill" class="form-control" id="Email" aria-required="true" required="required" type="email" maxlength="35"  value="'.$email.'"placeholder="Email"></div><div class="fb-textarea form-group field-message">
<label class="fb-textarea-label" for="message">Text Area<span class="fb-required"></span><span class="tooltip-element" tooltip="Please tell us about your self and reason for contact.">?</span></label><textarea name="message" title="Please tell us about your self and reason for contact." class="form-control" id="message" aria-required="true" required="required" maxlength="700" placeholder="message" type="textarea"></textarea></div><div class="fb-button form-group field-Submit"><button name="submit" id="submit"value="Submit" type="submit"class="btn btn-primary btn-lg">Submit</button></div></div></form>'; 








}
else{

  echo' <form action = "time_added.php" method="post" id="rendered-form"><div class="rendered-form"><div class="fb-text form-group field-Name"><label class="fb-text-label" for="Name">Name<span class="fb-required">*</span></label><input name="Name" class="form-control" id="Name" aria-required="true" required="required" type="text" maxlength="30" placeholder="Name"></div><div class="fb-text form-group field-Email"><label class="fb-text-label" for="emaill">Email<span class="fb-required">*</span></label><input name = "emaill" class="form-control" id="Email" aria-required="true" required="required" type="email" maxlength="35" placeholder="Email"></div><div class="fb-textarea form-group field-message"><label class="fb-textarea-label" for="message">Text Area<span class="fb-required">*</span><span class="tooltip-element" tooltip="Please tell us about your self and reason for contact.">?</span></label><textarea name="message" title="Please tell us about your self and reason for contact." class="form-control" id="message" aria-required="true" required="required" maxlength="700" placeholder="message" type="textarea"></textarea></div><div class="fb-button form-group field-Submit"><button name="submit" id="submit"value="Submit" type="submit"class="btn btn-primary btn-lg">Submit</button></div></div></form>';
}
?>
                 
         
      


          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Killer Web Deisgn, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>






