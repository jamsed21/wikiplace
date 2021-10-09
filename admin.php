<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "wikiplace";
$conn = mysqli_connect("localhost","root","","wikiplace");


session_start();
if ($conn) {
	if(isset($_POST["login"]))
    {
        $email=$_POST["email"];
        $password=$_POST["Password"];

        $sqli ="SELECT * from admin where email='$email' AND Password='$password' ";
        $res=mysqli_query($conn,$sqli);
        if(mysqli_num_rows($res)>0){
       $_SESSION['email']=$email;   
			
        header('location:add_place.php');
        }
        else
		{
			echo "<script type='text/javascript'> alert('You dont have a account.Register First!')</script>";
            
        
       
        }
      
    }
    
}
else
{
    echo 'Try again';
}



?>
<html>
<head>
    <link rel="icon" href="img/wiki.png">
    <title>Admin LOGIN</title>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .i1{background-color:rgba(0,0,0,0.6);justify-content: center;width: 700px;margin: auto;margin-top: 160px;padding-bottom: 20px;border-radius: 30px;}
.i2{width: 600px;color: azure;}
.i3{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color: bisque;}
.ibg{
    background-image: url("image/1.jpg");
    width: 100%;height: 100%;position: relative;
    background-size: cover;
}
.overlay{width: 100%;height: 100%;background-image:rgb(105, 103, 103,0.5);position: absolute;}

.box{margin: auto;width: 700px;padding-top:90px ;height: 400px;border: 2px solid antiquewhite;margin-top: 120px;background-color: rgb(170, 166, 157,0.7);
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;}
.p1{background-color: black;}
.fo{color: wheat;}
    </style>
</head>
<body>
    <div class="ibg">
        <div class="overlay">
      <div class="i1 container">
      <img src="image/th.jpg" width="60px" height="60px" style="margin-left: 300px;margin-top:-20px;border-radius:50%">

      <h2 class="text-center i3"> Admin Log in </h2>
      <form method="post" action="admin.php" class="fo">
				
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Email Address" >
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="Password" class="form-control" placeholder="Your Password">
				</div>

				<button type="submit" name="login" class="btn btn-success center-block">Submit</button><br><br>
			</form>
            <?php
            if(isset($_Get['error'])==true)
            {
                echo '<font color="red"><p align="center">Oh sorry,Username and Password does not match</p></font>';
            }
            
            ?>
      </div>
      </div>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstap.min.js"></script>
    
    </body>
    
    </html>
</body>
</html>