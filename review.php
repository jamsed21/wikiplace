<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ReView</title>
        <link rel="icon" href="img/wiki.png">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.5.1.js"></script>
        <script src="js/popper.min.js"></script>
        <style>
            .box{width: 1200px;height: 300px;background-color: red;}
            .align{margin-left: 300px;padding-left: 20px;}
            .box1{background-color:rgb(0,7,0.5.2); margin-left:100px ;margin-top: 160px;}
            .back{background-image: url("img/banner.jpg");background-repeat: no-repeat;height:800px;background-size: cover;}
        </style>
    </head>
    <body>
        <div class="row back">
      
      <div class='col-md-7'>
          <h1 style="font-weight: bold;color:darkcyan ;margin-left:190px ;margin-top:30px;">Share Your Moment</h1>
        <div class="box1">
        <form class="needs-validation" novalidate>
 
  <div class="form-row container">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Place</label>
      <input type="text" class="form-control" textarea cols="30";id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Division</label>
      <select class="custom-select" id="validationCustom04" required>
        <option selected disabled value="">Choose related Division</option>
        <option>Dhaka</option>
        <option>Chattogram</option>
        <option>Khulna</option>
        <option>Rajshahi</option>
        <option>Sylhet</option>
        <option>Rangpur</option>
        <option>Barishal</option>
        <option>Mymensingh</option>
        

      </select>
      <div class="invalid-feedback">
        Please select a valid division.
      </div>
    </div>
    
  </div>

  <div style="margin-left:20px;">
  <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="100" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
      </div>
  <button class="btn btn-primary mt-2 align" type="submit">Add Details</button>

  
</form>
        </div>
        </div>
        <div class="col-md-4">
                <h1></h1>
            </div></div>
    </body>
</html>