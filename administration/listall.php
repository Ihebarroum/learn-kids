<!doctype html>
<html lang="en">
  <head>
    <title>Title</title> 
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
    </style>
  </head>
  <body>
  <div  class="form" class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
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
                                echo "<li class='list-group-item' ><a href='post.php?id=".$row["id"]."'><b>".$row["title"]."</b> : ".$row["discription"]."</a>  <a style='float:right; margin:0 3px;' href='delete.php?id=".$row["id"]."'><img width='25px' height='25px' src='img/error.png'></a><a style='float:right;  margin:0 3px;' href='edit.php?id=".$row["id"]."'><img width='25px' height='25px' src='img/edit.png'></a></li>";
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js" ></script>
  </body>
</html>