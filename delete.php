<?php
include('database.php');
$connect = mysqli_connect("localhost", "root", "", "wikiplace");

error_reporting(0);
$id=$_GET['id'];
$query="DELETE FROM places where id=$id";


$data=mysqli_query($connect,$query);
if($data)
{
    
    echo "<script type='text/javascript'> alert('Delete Record  from Database')</>";
    header("location:allplace.php");
}

else
{echo "<script type='text/javascript'> alert('Failed to Delete Record  from Database')</>";
               
    // echo "<font color='red',font size='20px' text-align='center'>;

}
?>

<script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
