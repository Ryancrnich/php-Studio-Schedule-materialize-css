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
            <li class="current"><a href="about.php">About</a></li>
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
          <h1 class="page-title">About Us</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna. Nam eget eros non orci consectetur congue at ac augue. Proin eget arcu in enim feugiat ultricies. Curabitur maximus metus nec metus pretium viverra at et orci. Integer hendrerit ante ut placerat cursus.
          </p>
          <p class="dark">
Aliquam eget pharetra diam. Nulla placerat lorem at turpis tempor, vel ultrices dui tincidunt. Proin quis egestas lorem. Mauris vehicula lectus odio, sit amet dictum justo feugiat a. Praesent id dictum lacus. Sed ullamcorper id erat ut dictum. Fusce porttitor lorem sapien, in aliquet sapien convallis et. Donec nec mauris nulla. Curabitur cursus semper odio, et hendrerit ante. Nunc at cursus ante. Maecenas gravida ligula ut efficitur suscipit. Nulla id turpis varius, pretium nunc sed, fermentum sem. Sed lacinia nunc non interdum pellentesque.
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>What We Do</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna</p>
          </div>
        </aside>
      </div>
    </section>

    <footer>
  

      <p>Killer Web Deisgn, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>
