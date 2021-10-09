<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "wikiplace";
$con=mysqli_connect($servername,$username,$password,"$dbname");
if(!$con){
   die('Could not Connect My Sql:' .mysqli_error($con));
}
?>