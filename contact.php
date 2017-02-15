<?php

if($_POST["submit"]) {
    
  

    $subject="Tahsh Khemlani Contact Form";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $check=$_POST["check"];
    


    $mailBody=" Name: $name \n Message: $message \n Email: $email";
    
    if(empty($email)) {
        
        mail("phenothx@gmail.com", $subject, $mailBody, "From: phenothx@gmail.com");
        main(sendto,subject,email,from);
        
    }
    else
    {
         mail("phenothx@gmail.com", $subject, $mailBody, "From: $email");
    }

   
        
    
    
    header("Location: success.html");
    exit;

    
}