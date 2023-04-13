<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Assignmentdashboard";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>