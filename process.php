<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "ap1vitebsk.test@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
     
    //send email
    mail($admin_email, "New Form Submission", "Name: " . $name . "\n" . "Phone number: " . $phone . "\n" . "From: " . $email);
    
    header('Location: http://edge/success.html');
  }