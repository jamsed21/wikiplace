<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "wikiplace";

$conn = mysqli_connect($hostname, $username, $password, $dbname);


session_start();

  if (isset($_POST['register']))
   
  {
    $username=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password']; 
    $sqlFind = "SELECT * FROM user where email='$email' ";
    $resFind =mysqli_query($conn,$sqlFind);
    if (mysqli_num_rows($resFind)>0)
    {
      echo 'Already Exist';
    }
    else
    {
      $sql="INSERT INTO user(Name,Email,Password) VALUES ('$username','$email','$password')";
      $insertion= mysqli_query($conn,$sql);
      if($insertion)
      {
        $_SESSION['email']=$email;
        header('location:profile.php');
      }
      else
      {
        echo 'Not Added';
      }
    }
  }
else
{
  echo '';
}
?>
<html>
<head>
    <title>Registration</title>
    <link rel="icon" href="img/wiki.png">
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/wiki.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="style1.css">
 <style>  .i1{background-color:rgba(0,0,0,0.6);justify-content: center;width: 700px;margin: auto;margin-top: 160px;padding-bottom: 20px;border-radius: 30px;}
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
</style> 
</head>
<body>
    <div class="ibg">
        <div class="overlay">
      <div class="i1">
      <h2 class="text-center i3">user</h2>
      <form method="post">
        <div class="form-group  mt-7 ml-5 i2">
          <label for="exampleInputName1">Full name</label>
          <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group mt-7 ml-5 i2">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group ml-5 i2">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="register" class="btn btn-primary ml-5">Submit</button>
      </form>
      </div>
      </div>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstap.min.js"></script>
    
    </body>
    
    </html>
</body>
</html>