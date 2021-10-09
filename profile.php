<?php
session_start();
if (isset($_SESSION['email'])) {
} else {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIKIPLACE</title>
    <link rel="icon" href="img/wiki.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/util.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="indexstyle.css">
      <!-- for search -->
      <!-- <title>AJAX Search Suggestions Dropdown List</title> -->
      <link rel="stylesheet" type="text/css" href="style_temp
      .css">
      <style>
          .l-box{position: relative;top: 30px;left:50px;width: 250px;}
.l-box2{position: relative;top: 30px;left:150px;width: 250px;}
.box2{border: 1px red;height: 370px;background-color: white;margin-top: 180px;}

.l-box4{position: relative;top: 30px;left:270px;width: 250px;font-size: 13px;}
.bb{font-size: 15px;}
      </style>
      
</head>
<body>
  <section>
    
    <div class="header">
   
        <div class="container">
            <div class="navbar">
                <div class="logo">
                  <div class="caption">
                    <img src="img/wiki-w.png" height="90px" width="120px" alt="">
                </div>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="#destinations" style="text-decoration: none; color:white;"> Destinations </a></li>
                        <li><a href="" style="text-decoration: none; color: white;"> <?php echo $_SESSION['email']; ?> </a></li>
                        <li><a href="#regions" style="text-decoration: none; color: white;"> Regions </a></li>
                        <li><a href="#experinace" style="text-decoration: none; color: white;"> Experiences </a></li>
                        
                       
                    </ul>
                    <li><a href="logout.php" style="text-decoration: none; color: red;"> Logout </a></li>
                </nav>
               
                
            </div>
            <h1 class="titile"   style="text-align: center; color: white; padding-bottom: 11px;"> DISCOVER YOUR IDEAL HOLIDAY </h1>
            <!-- <div class="input-group">
                <input type="text" class="form-control" placeholder="Your Destination">
                <div class="input-group-append">
                <button type="submit" class="input-group-text btn"> Search </button>
                </div> -->
                <nav class="navbar navbar-light ">
                  <form class="form-inline"> 
                    <input class="form-control mr-sm-2" type="search" id="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit" >Search by Place</button>
                   <a href="searchplace.php" <button class="btn btn-success my-2 my-sm-0 ml-5" type="submit">Search By District</button></a>

                  </form>
                       <!-- <input type="text" id="search" name="search"> -->
                            <!-- <input type="button" name="" value="Search"> -->
                            <ul id="results">
                              <li><a href="#"></a>
                              <li><a href="#"></a>
                              <li><a href="#"></a>
                              <li><a href="#"></a>
                            </ul>
                            <script type="text/javascript">
                              var results = document.getElementById("results");
                              var search = document.getElementById("search");
                              function getSearchResults(){
                                var searchVal = search.value;
                                if(searchVal.length < 1){
                                  results.style.display='none';
                                  return;
                                }
                                console.log('searchVal : ' + searchVal);
                                var xhr = new XMLHttpRequest();
                                var url = 'index_searchresults.php?search=' + searchVal;
                                // open function
                                xhr.open('GET', url, true);
                                xhr.onreadystatechange = function(){
                                  if(xhr.readyState == 4 && xhr.status == 200){
                                    var text = xhr.responseText;
                                    //console.log('response from index_searchresults.php : ' + xhr.responseText);
                                    results.innerHTML = text;
                                    results.style.display='block';
                                  }
                                }
                                xhr.send();
                              }
                              search.addEventListener("input", getSearchResults);
                            </script>
                </nav>
                
            </div>
            <!-- <div class="media">
                <ul class="icon-position">
                   <a href="#" class="icon-design "> <li><i class="fab fa-facebook"></i></li></a> 
                   <a href="#" class="icon-design "> <li><i class="fab fa-whatsapp"></i></li></a>
                   <a href="#" class="icon-design"> <li><i class="fab fa-twitter"></i></li></a>
                    
                </ul>
            </div> -->
        </div>
        </div>
       
 </section>
 <h1 style="text-align: center;font-weight: bolder ;color:darkgreen;">Discover Your Solutions</h1><br>
 <p style="text-align: center;font-style: normal;font-family: 'Courier New', Courier, monospace;color: darkslategray;font-size: 15px"><b>Destinations are full of life. There are thousands of things to see and to do and, guess what? 
   Travellers would love to know about them. That is why we have developed sophisticated products so that they don’t have to miss anything.Travelers often don’t know where they actually want to travel, they get lost when planning a trip with the amount of information online. 
   With travel recommendation system you can inspire them and show them all they can do at any destination throughout the journey.</b></p>
    <br><br><br>
      
      <div class="container boxa">
      <h2 style="padding-top: 25px; text-align: center; padding-bottom:10px" id="destinations"> Destinations </h2>

        <h2 style="color: brown;"><b>Top Places in Bangladesh</b></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
      
            <div class="item active">
              <img src="img/sylate.jpg" alt="Sylhet" style="width:100%;height: 500px">
              <div class="carousel-caption">
                <h3><b>Sylhet</b></h3>
                
              </div>
            </div>
            <div class="item">
                <img src="img/saint.jpg" alt="Saint Martin" style="width:100%;height: 500px;">
                <div class="carousel-caption">
                  <h3>Sain Martin</h3>
                  <!-- <p>Thank you, Saint Martin!</p> -->
                </div>
              </div>
            <div class="item">
              <img src="img/sajek.jpg" alt="Sajek" style="width:100%;height: 500px">
              <div class="carousel-caption">
                <h3><b>Sajek
                </b></h3>
                <!-- <p>Thank you, Sajek!</p> -->
              </div>
            </div>
            <div class="item">
                <img src="img/rongpur.jpg" alt="Rangpur" style="width:100%;height: 500px">
                <div class="carousel-caption">
                  <h3>Rangpur</h3>
                  <!-- <p>Thank you, Rangpur!</p> -->
                </div>
              </div>
            <div class="item">
              <img src="img/bandarban.jpg" alt="Bandarban" style="width:100%;height: 500px">
              <div class="carousel-caption">
                <h3>Bandarban</h3>
                <!-- <p>We love the Big Apple!</p> -->
              </div>
            </div>
            <div class="item">
                <img src="img/raj.jpg" alt="Rajshahi" style="width:100%;height: 500px;">
                <div class="carousel-caption">
                  <h3>Rajshahi</h3>
                  <!-- <p>Thank you, Rajshahi!</p> -->
                </div>
              </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
</div>
      <br><br><br>
    
        <div class="container">
          <div class="row box2">
            <div class="col-sm-10">
           
              <div class="row">
                <div class="col-4 col-sm-4">
                  <div class="box1">
                    <a href="map.html"><i class="fas fa-map-marker-alt fa-10x ico"></i></a><br><br>
                  <p class="cap">Find Best Route</p></div>
                </div>
                <div class="col-4 col-sm-4">
                  <div class="box1">
                  <a href="add_place.php"> <i class="fas fa-hands-helping fa-10x ico"></i></a><br><br>
                    <p class="cap">Share Your Moments</p></div>
                </div>
                <div class="col-4 col-sm-4">
                  <div class="box1">
                    <a href="SearchPlace.php"><i class="fas fa-search fa-10x ico"></i><br><br></a>
                    <p class="Cap">Search Your Place</p></div>
                </div>
              </div>
          </div>
            </div>
          </div>
        <br>
        <h2 style="padding-top: 25px; text-align: center; padding-bottom:10px" id="regions"> Regions </h2>

        <div class="container fluid car">
          <div class="row">
              <div class="col-sm-6 col-md-3 col-lg-3 ">
                  <div class="card" style="width: 22rem;">
                      <img src="img/rongpur.jpg" class="card-img-top i20" alt="...">
                      
                      
                      <div class="card-body">
                          <h5 class="card-title"><b>Rangpur</b></h5>
                          <!-- <p><b>13 August</b>,2017 By:<b>Admin</b></p> -->
                          <p class="card-text">he major attractions of the district are Tajhat Palace, Vinnojogot (entertainment park), Keramatiya Mosque, Hatibandha Tomb, Chiklir.</p>
                          <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3 ">
                  <div class="card" style="width: 22rem;">
                      <img src="img/saint.jpg" class="card-img-top i20" alt="...">
                      <div class="card-body">
                          <h5 class="card-title"><b>Saint Marttin</b></h5>
                          <!-- <p><b>13 August</b>,2017 By:<b>Admin</b></p> -->
                          <p class="card-text">Saint Martin’s, the one and only coral island of Bangladesh, is a small island measuring 8 sq.kilometers.</p>
                          <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="card" style="width: 22rem;">
                      <img src="img/mymonsign.jpg" class="card-img-top i20" alt="...">
                      <div class="card-body">
                          <h5 class="card-title"><b>Mymensingh</b></h5>
                          <!-- <p><b>13 August</b>,2017 By:<b>Admin</b></p> -->
                          <p class="card-text">Mymensingh, city, north-central Bangladesh. It lies on the north bank of the Old Brahmaputra River.</p>
                          <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="card" style="width: 22rem;">
                      <img src="img/Chittagong2.png" class="card-img-top i20" alt="...">
                      <div class="card-body">
                          <h5 class="card-title"><b>Chattrogram</b></h5>
                          
                          <p class="card-text">Chittagong,officially called Chattogram,is the chief Indian Ocean port of Bangladesh and country’s second largest city</p>
                          <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              </div>
              <div class="row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card" style="width: 22rem;">
                    <img src="img/dhaka.jpg" class="card-img-top i20" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Dhaka</b></h5>
                        
                        <p class="card-text">Spending real time example text to build on the card title and make up the bulk of
                            the card's dear ones.</p>
                        <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                    </div></div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="card" style="width: 22rem;">
                      <img src="img/khulna1.jpg" class="card-img-top i20" alt="...">
                      <div class="card-body">
                          <h5 class="card-title"><b>Khulna</b></h5>
                          
                          <p class="card-text">Spending real time example text to build on the card title and make up the bulk of
                              the card's dear ones.</p>
                          <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                      </div></div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card" style="width: 22rem;">
                        <img src="img/sundorban.jpg" class="card-img-top i20" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>The Largest Mangrove </b></h5>
                            
                            <p class="card-text">Sundarbans is a mangrove area in the delta formed by the confluence of the Ganges, Brahmaputra and Meghna Rivers in the Bay of Bengal..</p>
                            <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                        </div></div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                      <div class="card" style="width: 22rem;">
                          <img src="img/raj.jpg" class="card-img-top i20" alt="...">
                          <div class="card-body">
                              <h5 class="card-title"><b>Beauty Of Rajshahi</b></h5>
                              
                              <p class="card-text">Spending real time example text to build on the card title and make up the bulk of
                                  the card's dear ones.</p>
                              <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                          </div></div>
                      </div>
            </div>
          </div>
          <a href="seemore.php"><button type="button" class="btn btn-secondary btn-lg" style="margin-left:800px">See More=></button></a>

      
      <section>
        <h2 style="padding-top: 25px; text-align: center;" id="experinace"> Experience </h2>
        <div class="container">
            <div class="video-player">
                <video src="img/video1.mp4" controls autoplay width="100%"></video>
                <a href="#videostory" class="btn1">Watch more </a>
                
            </div>
        </div>
     </section>
        <div class="last">
          <div class="overlay2">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-4 col-md-4 col-lg-4 three">
                          <div class="l-box container" style="margin-left: 200px;">
                          <img src="img/wiki-w.png" height="90px" width="120px" alt="">
                              <p class="t10">It is a long established fact that a readers will be distracted by the readable content of the page when looking at its layout.</p>
                              <p class="t10">It is a long established fact that a readers will be distracted by the readable content </p>
                          </div>
                      </div>
                      <div class="col-sm-4 col-md-4 col-lg-4 three"">
                          <div class="l-box2 container ">
                              <h3 class=" text-white"><b>OUR SERVICES</b></h3>
                              <ul class="listing bb">
                                  <li class="mb-1  ">Best Vacation</li>
                                  <li class="mb-1 ">Eco Friendly</li>
                                  <li class="mb-1 ">Plan</li>  
                                  <li class="mb-1 ">24/7 support</li>      

                              </ul>
                          </div>
                      </div>
                      <!-- <div class="col-sm-4 col-md-6 col-lg-3">
                          <div class="l-box3 container">
                              <h3 class=" text-white"><b>RECENT TWEETS</b></h3>
                              <p class="t10"><i class="fab fa-twitter text-primary ml-1"></i> It is a long established fact<span class="text-warning"> readable content</span> of the page when looking at its layout.</p>
                              <p class="t10"><i class="fab fa-twitter text-primary"></i> Long established fact that a readers will be <span class="text-warning">distracted</span> by the readable content </p>
                          </div>
                      </div> -->
                      <div class="col-sm-4 col-md-4 col-lg-4 three">
                          <div class="l-box4 container" style="margin-left: -60px;">
                              <h3 class=" text-white"><b>Terms & Policies</b></h3>
                              <ul class="listing bb">
                                  <li class="mb-1 bb">Privacy Policy</li></li>
                                  <li class="mb-1 ">Do not use my private Information</li>
                                  <li class="mb-1 bb">Terms of use</li>  
                                  <li class="mb-1 ">Accessibility</li>      

                              </ul><!-- 
                              <p class="t11 text-start"><span class="text-warning"><b>MAIN OFFICE:</b></span><br>S.A Tower(Level-5),plot#1,Road#134,Block SE(A),Gulshan,Dhaka</p>
                              <p class="t11 mt-1" ><span class="text-warning"><b>PHONE:</b></span><br>+001232 44 5665   +02245 765 7655</p>
                              <div class="text-white align-items-center text-center"><i class="fab fa-twitter"></i> <i class="fab fa-facebook"></i>  <i class="fas fa-envelope-open-text"></i>  <i class="fab fa-instagram"></i></div> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      
      </div>
      <div class="row">
          <div class="col-12 last3">
              <p style="text-align: center;""><i class="fas fa-copyright"></i>COPYRIGHTS 2021 <span style="color: green; font-size:bould;">Jamsed Hossen</span> ALL RIGHTS RESERVED</p>
          </div>
      
      </div>
      
</body>
</html>