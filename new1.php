<?php
$name = htmlentities($_POST['username']);
$email = htmlentities($_POST['password']);

   $bridge = mysqli_connect('localhost','root','ashish12','demo');
   $query = "INSERT INTO login (username, password) VALUES ('$name','$email')";
   $bridge->query($query) 

?>