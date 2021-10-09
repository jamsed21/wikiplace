<html>

<head>
    <title>Search Place</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="icon" href="img/wiki.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <style>
        .box4{background: burlywood;}
        .design{background: darkgrey;}
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
    </style>
</head>

<body>
<a href="index.php" <button class="btn btn-success my-2 my-sm-0 ml-5" type="submit" >Home</button></a>
    
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-danger"><b>Search Place</b></h4>
                    </div>
                    <div class=" box4">
                    <div class="row">
                        <div class="col-md-6">
                            <form action=" " method="post">
        <label for="validationCustom04" style="margin-left:40%;"><b> Select District   </b>  </label>
        <select name="get_place">
            <option selected disabled value="" >Choose related District</option>
            <option style="color: red;">Bagerhat</option>
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
                                <button type="submit" name="search_by_division" class="btn btn-primary text-center" style="margin-left:50%">Search</button>
                            </form>
                        </div>
                    </div>
                  
               

                    <?php

                    $hostname = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "wikiplace";


                    $connect = mysqli_connect("localhost", "root", "", "wikiplace");

                    if (isset($_POST['search_by_division'])) {
                        $division = $_POST['get_place'];
                        $query = "SELECT * FROM places  WHERE division='$division' ";
                        // $query="SELECT COUNT(*) as count FROM roombook where  roomtype='$roomtype'";
                        $query_run = mysqli_query($connect, $query);




                    ?>
                        <div class="table-responsive design">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th scope="col">Place_name</th>
                                        </th>
                                        <th scope="col">District</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Picture</th>



                                    </tr>
                                </thead>
                                </tbody><?php
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_array($query_run)) {
                                        ?>
                                            <tr>
                                                <td><a href="view.php?place_name=<?php echo $row['place_name']; ?>"><?php echo $row['place_name']; ?></a></td>

                                                <td><?php echo $row['division']; ?></td>
                                                <td><?php echo $row['description']; ?></td>

                                                <td><img width="300px" src="upload/<?php echo $row['image']; ?>"></td>


                                            </tr>
                                        <?php
                                            }
                                        } else { ?>
                                        <tr>
                                            <td colspan="6">No Data Available</td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>