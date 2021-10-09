<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Record Form</title>
        <meta charset="UTF-8">
	<link rel="icon" href="img/wiki.png">
        <title>Add Details</title>
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.5.1.js"></script>
        <script src="js/popper.min.js"></script>
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <style>
            .box {
                width: 1200px;
                height: 300px;
                background-color: red;
            }
    
            .align {
                margin-left: 300px;
                padding-left: 20px;
            }
    
            .box1 {
                background-color: rgb(0, 7, 0.5.2);
                width: 600px;
                height: 350px;
                padding-left: 150px;
                padding-top: 40px;
                margin-left: 200px;
                margin-top: 120px;
                border-radius: 10%;
                background-color: rgba(158, 98, 25, 0.582);
            }
    
            .back {
                background-image: url("img/banner.jpg");
                background-repeat: no-repeat;
                height: 800px;
                background-size: cover;
            }
        </style>
    </head>
    
    <body>

        <div class="row back animate__flash">


            <div class="col-md-7">
                <h1 style="font-weight: bold;color:rgb(24, 36, 1) ;margin-left:280px ;margin-top:30px;">Share Your Moment</h1>
                <div class="box1">
    
      
    <form method="post" enctype="multipart/form-data">
        <b>Place Name: </b>
        <input type="text" name="place_name">
        <br><br>
        <label for="validationCustom04"><b>District   </b>  </label>
        <select name="division" style="margin-left: 30px;">
            <option selected disabled value="">Choose related District</option>
            <option>Bagerhat</option>
            <option>Bandarban</option>
            <option>Barguna</option>
            <option>Barisal</option>
            <option>Bazar</option>
            <option>Bhola</option>
            <option>Bogra</option>
            <option>Brahmanbaria</option>
            <option>Chandpur</option>
            <option>Chittagong</option>
            <option>Chuadanga</option>
            <option>Comilla</option>
            <option>Coxs Bazar</option>
            <option>Dhaka</option>
            <option>Dinajpur</option>
            <option>Faridpur</option>
            <option>Feni</option>
            <option>Gaibandha</option>
            <option>Gazipur</option>
            <option>Gopalganj</option>
            <option>Habiganj</option>
            <option>Jamalpur</option>
            <option>Jessore</option>
            <option>Jhalokati</option>
            <option>Jhenaidah</option>
            <option>Joypurhat</option>
            <option>Khagrachari</option>
            <option>Khulna</option>
            <option>Kishoreganj</option>
            <option>Kurigram</option>
            <option>Kushtia</option>
            <option>Lakshmipur</option>
            <option>Lalmonirhat</option>
            <option>Madaripur</option>
            <option>Magura</option>
            <option>Manikganj</option>
            <option>Maulvibazar</option>
            <option>Meherpur</option>
            <option>Munshiganj</option>
            <option>Mymensingh</option>
            <option>Naogaon</option>
            <option>Narail</option>
            <option>Narayanganj</option>
            <option>Narsingdi</option>
            <option>Natore</option>
            <option>Nawabganj</option>
            <option>Netrokona</option>
            <option>Nilphamari</option>
            <option>Noakhali</option>
            <option>Pabna</option>
            <option>Panchagarh</option>
            <option>Patuakhali</option>
            <option>Pirojpur</option>
            <option>Rajbari</option>
            <option>Rajshahi</option>
            <option>Rangamati</option>
            <option>Rangpur</option>
            <option>Shariatpur</option>
            <option>Sherpur</option>
            <option>Sirajgonj</option>
            <option>Sunamganj</option>
            <option>Sylhet</option>
            <option>Tangail</option>
            <option>Thakurgaon</option>
        </select>
        <br><br>
        <b>Description: </b>
        <!-- <input type="text" name="description"> -->
        <label for="desc">Enter Description<br></label>

        <textarea id="desc" name="description" rows="4" cols="50"></textarea>
        <br>
        <br>

        <b>Upload image: </b>
        <input type="file" name="image[]" />
        <!-- <button type="submit">Upload Image</button> -->
        <br><br>
        <input type="submit" name="save" value="submit" class="btn btn-secondary">
        <a href="index.php" <button class="btn btn-success my-2 my-sm-0 ml-5 mt-4" type="submit">Home</button></a>


        
        <?php
        include_once 'database.php';
        $output_dir = "upload/";/* Path for file upload */
        if(isset($_POST['save']))
        {  
           $place_name = $_POST['place_name'];
           $division = $_POST['division'];
           $description = $_POST['description'];


           // image
           $RandomNum   = time();
           $ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
           $ImageType      = $_FILES['image']['type'][0];

           $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
           $ImageExt       = str_replace('.','',$ImageExt);
           $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
           $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $output_dir.$NewImageName;

           /* Try to create the directory if it does not exist */
           if (!file_exists($output_dir))
           {
              @mkdir($output_dir, 0777);
           }               
            move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
                $sql = "INSERT INTO `places`(place_name,division,description,`image`)VALUES ('$place_name','$division','$description','$NewImageName')";
           if (mysqli_query($con, $sql)) {
            echo "New record created successfully !";
           } else {
            echo "Error: " . $sql . "
        " . mysqli_error($con);
           }
           mysqli_close($con);
        }
        ?>
    </form>
</div>
</div>
        </div></body>
</html>