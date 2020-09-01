<?php
          $conn = mysqli_connect('localhost','root','','signup');

          $name =$_POST['name'];
          $email =$_POST['email'];
          $subject =$_POST['subject'];
          $message =$_POST['message'];
         

          $query= "INSERT INTO contact(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
      
          mysqli_query($conn, $query);

          ?>