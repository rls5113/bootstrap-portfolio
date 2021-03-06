<?php

if($_POST["submit"]) {
    $recipient="stuartrl@comcast.net";
    $subject="Message from github portfolio";
    $sender=$_POST["name"];
    $senderEmail=$_POST["mail"];
    $message=$_POST["msg"];

    $mailBody="Name: $name\nEmail: $mail\n\n$msg";

    mail($recipient, $subject, $mailBody, "From: $name <$mail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contact</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" ref="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-dark bg-info">
        <div class="container-fluid">
          <div class="navbar-header">
              
            <h1 class="navbar-brand text-center">
                <img src="assets/images/resumeLogo.png">  Robert Stuart</h1>
          </div>
          <ul class="nav nav-tabs justify-content-end">
            <li class="nav-item">
              <a class="nav-link  text-dark" href="index.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="resume.html">Resume</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="portfolio.html">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-dark active" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="https://www.linkedin.com/in/robert-stuart-97a0423/" target="_blank">Linked In</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h5 style="padding:10px;">Contact </h5>
          <hr>
          <p>If you like what you see and would like to drop me a line, you may use the form below to send me a message.  I look forward to hearing from you.

          </p>
        </div>
      </div>

         <form action="contact.php" method="POST" >
          <div id="form-group">
            <label for="name" class="col-lg-3 col-form-label">Name</label>
            <div class="col-lg-9">
              <input class="form-control" type="text" id="name" required .form-control-lg>
            </div>
          </div>
      
          <div id="form-group">
            <label for="mail" class="col-lg-3 col-form-label">E-mail</label>
            <div class="col-lg-9">
              <input class="form-control" type="email" id="mail" required placeholder="name@example.com" .form-control-lg>
            </div>
          </div>
      
          <div id="form-group">
            <label for="msg" class="col-lg-3 col-form-label">Message</label>
            <div class="col-lg-9">
              <textarea class="form-control" id="msg" required .form-control-lg></textarea>
            </div>
          </div>
      
          <button type="submit" class="btn btn-info" style="margin: 10px;">Submit</button>
        </form>
      </div>
      <div class="row">
          <div class="col-md-12 text-center navbar-dark bg-primary">
            <footer>
              Copyright ©
            </footer>
          </div>
        </div>
          </div>
</body>

</html>