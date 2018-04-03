





<?php
require 'headeradmin.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <title>New post</title> 
    <?php include 'css/css.html'; ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <style>
    #newpost{
  margin: 20px;
  padding: 10px;
  display: inline-block;
  text-align: right;
  width: 98%;
}

select{
  margin-bottom: 10px;
  padding:5px;
  width: 100%;
  background-color: #2a3843;
  color: #a0b3b0;
}
    </style>
  </head>
  <body>
  <form class="form" enctype="multipart/form-data" action="upload.php" method="POST">
    <h4 class="text-light text-center">Create new post</h4><br>
    <input required type="file" name="uploaded_file" accept="application/x-shockwave-flash"></input><br />
    <input required placeholder="title" type="text" name="title" id="title"><br>
    <textarea required placeholder="discription"  name="discription" id="discription" cols="30" rows="10"></textarea><br>


  <select  style="" name="category" class="" required>
    <option selected value="animation">Animation</option>
    <option value="interactive">Interactive</option>
  </select>

    <input type="submit" value="Upload" name="submitButton"></input>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js" ></script>
  </body>
</html>

<?PHP
require 'insert_post.php';

  if(!empty($_FILES['uploaded_file']))
  {
        // Create directory if it does not exist
    if(!is_dir("up/".mysqli_insert_id($mysqli)."/")) {
        mkdir("up/".mysqli_insert_id($mysqli)."/");
    }


    $target_dir = "up/".mysqli_insert_id($mysqli)."/";
    $target_file = $target_dir .  "post.swf";


    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
      header( "refresh:0;url=profile.php" );

    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }


  
?>