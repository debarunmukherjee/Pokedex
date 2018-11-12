<?php
$conn = mysqli_connect("localhost","root","","pokedex");
 
if (mysqli_connect_errno()) {
   echo "Connection error " . mysqli_connect_error();
}
?>