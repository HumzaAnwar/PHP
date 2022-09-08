<?php

include 'connection.php';

      $name = $_POST['myname'];
      $email = $_POST['myemail'];
      $phone = $_POST['myphone_number'];
      $pass = $_POST['mypassword'];


      $sql = "INSERT INTO signup (Full_Name, Email, Phone, Passsword) VALUES ('$name', '$email', '$phone', '$pass')";

	//   $sql = "INSERT INTO signup (Full_Name , Email , Phone , Passsword) VALUES ('$name' , '$email' , '$phone' ,'$pass')"; 

	  if ($conn->query($sql) === TRUE)  {
		header("location: http://localhost:82/signup/index.html");
		}
		
?>