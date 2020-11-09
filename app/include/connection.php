<?php
 
//$connection=mysqli_connect(server,user,pass,name)
$connection=mysqli_connect('localhost','root','','userdb');

//   mysqli_connect_errno();             checking connection

if(mysqli_connect_errno()){
    die('database connection failed'.mysqli_connect_errno());
}
else{
    echo "connection successful";
}

?>