<?php
session_start();
if (isset($_SESSION['email'])) {
// echo $_SESSION['email'];
// echo $_SESSION['id'];

} else {
    echo("<button onclick=\"location.href='login.php'\">Login</button>");
}
?>

<?php
    if (isset($_GET['place_name'])) {
      // Connect to the MySQL database  
        include "database.php"; 
      // $place_name = preg_replace('#[^0-9]#i', '', $_GET['place_name']); 
      $place_name = $_GET['place_name']; 
      // Use this var to check to see if this place_name exists, if yes then get the product 
      // details, if no then exit this script and give message why
      // echo "$place_name\n";
      $sql  = mysqli_query($con, "SELECT * FROM places where place_name='$place_name' LIMIT 1");
      $cnt = mysqli_num_rows($sql); // count the output amount
      if ($cnt > 0) {
           while ($row = mysqli_fetch_array($sql)) {     
                $image_text = $row['image'];
              // echo "<img src='upload/".$row['image']."' height='500'/>";   
              // echo "<br>Place Name = {$row['place_name']} <br>";
              // echo "Division = {$row['division']} <br>";
              $description = $row['description'];
              $place_id = $row['id'];
              // echo "Description: {$row['description']} <br>";
          }
      } else {
        echo "That item does not exist.";
          exit();   
      }
    }
    else {
        echo "Data to render this page is missing.";
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Place</title>
    <link rel="stylesheet" href="view.css">
    <link rel="icon" href="img/wiki.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
</head>
<body>
    

    <section>
    
        <div class="header">
       
            <div class="container">
                <div class="navbar">
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="profile.php" style="text-decoration: none; color: black;"> Home </a></li>
                         <!--    <li><a href="#" style="text-decoration: none; color: black;"> destinations </a></li>
                            <li><a href="#regions" style="text-decoration: none; color: black;"> Regions </a></li>
                            <li><a href="#experinace" style="text-decoration: none; color: black;"> Experiences </a></li> -->
                            <li><a href="#searchplace.php" style="text-decoration: none; color: black;">Search by District </a></li>

                           
                        </ul>
                    </nav>
                    <br>
                    <i class="fas fa-search" style="color: black; cursor: pointer; padding-right: 10px;"></i>
                    
                </div>
            </div>
            </div>

     </section>


     <section>
         <div class="row">
                    <div class="logo">
                        <img src="upload/<?php echo $image_text; ?>" width="500px" alt="" style=" float:left; cursor: pointer;">
                        <!-- <?php
                            echo "<img src='upload/".$image_text."' height='300'/>"; 
                        ?> -->
                    </div>
            <div class="col-5">
                <h4> <?php echo "$place_name"; ?> </h4>
                <!-- <p><i class="fa fa-star" style="color: yellow;"></i> 9.0 out of 10 <span> 100 reviews </span> </p> -->
                <div class="discription">
                    <p> 
                       <?php 
                            echo "$description";
                        ?>
                    </p>
                </div>
              
            </div>
            <div class="col-5">
               <div class="img-slider">
                   
               </div>
            </div>
         </div>
         
     </section>

    <section class="reviws">
        <div class="comment-box">
            <form action="" method="post">
            <textarea name="comment" class="text-area" style="margin-left:150px margin-top=-50px" cols="40" rows="5" placeholder="write your opinion here....." style="resize: none; padding-left: 10px;"></textarea>
            <!-- <input type="text" name="comment" class="text-area" cols="40" rows="5" placeholder="write your opinion here....." style="resize: none; padding-left: 10px;"> -->
            <!-- <textarea name="rating" class="text-area" cols="15" rows="2" placeholder=" Rating out of 10" style="resize: none; padding-left: 10px;"></textarea> -->
            <!-- <div class="btn-design"> -->
             <!-- <button class="btn"> Add review</button> -->



             <br>
                     <label for="validationCustom04" style="margin-left:30px"><b>Rating   </b>  </label>
        <select name="rating" style="margin-left:30px;">
            <option selected disabled value="">Choose</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
        </select>
             <input type="submit" name="save" value="Add Review">
            </div>
            <?php 
                
                    include 'database.php';
                    if(isset($_POST['save']))
                    {  
                        if (isset($_SESSION['id'])) {

                            // $sqljoin = "SELECT * FROM rating INNER JOIN user ON rating.user_id = user.id INNER JOIN places ON rating.place_id = places.id where user.id=$_SESSION['id'] and places.id=$place_id";

                           $rating = $_POST['rating'];
                           $review = $_POST['comment'];

                            $sql = "INSERT INTO `rating`(place_id, user_id, rating ,review)VALUES ('$place_id', '$_SESSION[id]', '$rating', '$review')";



                           if (mysqli_query($con, $sql)) {
                            echo "New review inserted!";
                           } else {
                            echo "Error: " . $sql . "
                        " . mysqli_error($con);
                           }
                           mysqli_close($con);
                        } else {
                            echo "Please log in to add review:  ";
                            // echo("<button onclick=\"location.href='login.php'\">Login</button>");
                        }
                    }
            ?>

        </form>

               <!--  

               <?php
                include "database.php";

                $sql = "SELECT * FROM rating";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["user_id"]. " - review: " . $row["review"]. " " . $row["rating"]. "<br>";
                  }
                } else {
                  echo "0 results";
                }

                mysqli_close($con);
                ?> 
            -->

                <?php
                include "database.php";
                $query = mysqli_query($con,"SELECT AVG(rating) as AVGRATE from rating where rating>0 and place_id=$place_id");
                $row = mysqli_fetch_array($query);
                $AVGRATE=$row['AVGRATE'];
                $query = mysqli_query($con,"SELECT count(rating) as Total from rating where rating>0 and place_id=$place_id");
                $row = mysqli_fetch_array($query);
                $Total=$row['Total'];
                $query2 = mysqli_query($con,"SELECT count(review) as Totalreview from  rating where rating>0 and place_id=$place_id");
                $row = mysqli_fetch_array($query2);
                $Total_review=$row['Totalreview'];
                $review = mysqli_query($con,"SELECT review,rating,name from rating inner join user ON rating.user_id=user.id where rating>0 and place_id=$place_id order by rating_id desc limit 10 ");
                $rating = mysqli_query($con,"SELECT count(*) as Total,rating from rating where place_id=$place_id group by rating order by rating desc");

                // echo $Total;
                ?>


                <div class="row container">

                <div class="col-md-4 ">

                    <h3><b>Rating & Reviews</b></h3>

                    <div class="row">

                    
                        <div class="col-md-6">

                            <h3 align="center"><b><?php echo round($AVGRATE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>

                            <!-- <p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p> -->
                            <p>Total: <?=$Total_review;?> reviews</p>

                        </div>

                        <div class="col-md-6">

                            <?php

                            while($db_rating= mysqli_fetch_array($rating)){
                            ?>

                                <h4 align="center"><?=$db_rating['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?=$db_rating['Total'];?></h4>

                                
                                
                            <?php   
                            }
                                
                            ?>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12"> 
                        <?php

                            while($db_review= mysqli_fetch_array($review)){
                        ?>

                                <h4><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span style="font-size:14px;"><?=$db_review['name'];?></span></h4>

                                <p><?=$db_review['review'];?></p>

                                <hr>

                        <?php   
                            }
                                
                        ?>

                        </div>

                    </div>

                        
                    
                    <div id="rating_div">

                                <div class="star-rating">

                                    <span class="fa divya fa-star-o" data-rating="1" style="font-size:20px;"></span>

                                    <span class="fa fa-star-o" data-rating="2" style="font-size:20px;"></span>

                                    <span class="fa fa-star-o" data-rating="3" style="font-size:20px;"></span>

                                    <span class="fa fa-star-o" data-rating="4" style="font-size:20px;"></span>

                                    <span class="fa fa-star-o" data-rating="5" style="font-size:20px;"></span>

                                    <input type="hidden" name="whatever3" class="rating-value" value="1">

                                </div>

                    </div>

                </div>

                </div><br>


    </section>
</body>
</html>