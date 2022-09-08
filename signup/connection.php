<?php 

$conn = mysqli_connect('localhost' , 'root' , '' , 'form');


if ($conn-> connect_error)   {
    die("Connection failed:".$con->connect_error);
}
else{
echo "Connection sucessful !!";
}

?>