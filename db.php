<?php
$conn = new mysqli("localhost","root","","restauracja");

if($conn->connect_error){
die("Błąd połączenia");
}

$conn->set_charset("utf8");
?>