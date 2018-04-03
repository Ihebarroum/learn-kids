<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>

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
    </style>
</head>

<body>
  <div class="form">
  <a style="float:left; width:100%; margin:5px;;" href="logout.php"><img src="img/logout.png" width="50px" height="50px"></a>

          <h3 class="text-light text-center">Welcome : <?php echo $first_name.' '.$last_name; ?></h3><p>(<?= $email ?>)</p>
          
          <!-- <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          
          ?> -->
          

          
          
          <div  class="" class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5">
            <div class="card round-card" >
                    <br>
                    <h4 class="card-title text-center">List of all posts</h4>
                    <div class="card-body">

                    <a id="newpost" href="upload.php" ><img title="new post" src="img/plus.png" width="30px" height="30px"></a>
                        
                    <ul class="list-group">
                    <?php

                        
                        require 'db.php';

                        $sql = "SELECT * FROM post";
                        $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<li class='list-group-item' ><a href='post.php?id=".$row["id"]."'><b>".$row["title"]."</b> : ".$row["discription"]."</a>  <a class='confirmation' style='float:right; margin:0 3px;' href='delete.php?id=".$row["id"]."'><img width='25px' height='25px' src='img/error.png'></a><a style='float:right;  margin:0 3px;' href='edit.php?id=".$row["id"]."'><img width='25px' height='25px' src='img/edit.png'></a></li>";
                            }
                        } else {
                            echo "0 results";
                        }



                    ?> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js" ></script>
    <script src="js/index.js"></script>
    <script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are you sure?');
    });
</script>
                    </body>
                    </head>

