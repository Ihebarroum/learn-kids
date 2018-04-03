
<!doctype html>
<html lang="en">
  <head>
    <title>Animata</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="administration/css/bootstrap.css">
<link rel="stylesheet" href="administration/css/custom.css"> 
<style>
    .list-group-item{
  border-radius: 33px !important;
  padding: 20px !important;
  margin: 20px !important;}
</style>
</head>
  <body>
    <body>
        <header class="fixed-top">
            <div class="collapse" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About Us</h4>
                            <p class="text-muted">We make educational animations to teach 
                                kids lessons in the most fun way. we have a lot of beautiful and fun animations to help kids 
                                understand more and more about numbers, animals, life ..
                            </p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Contact</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="text-white">
                                        <i class="fab fa-linkedin"></i> LinkedIn</a>
    
                                </li>
                                <li>
                                    <a href="#" class="text-white">
                                        <i class="fab fa-instagram"></i> Instagram</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">
                                        <i class="fab fa-github-square"></i> Github </a>
                                </li>
    
                                <li>
                                    <a href="mail@gmail.com" title="mail@gmail.com" target="_blank" class="text-white">
                                        <i class="fas fa-envelope-square"></i> Email</a>
                                </li>
                                <li>
                                    <a href="tel:0021620000000" class="text-white">
                                        <i class="fas fa-phone-square"></i> Phone </a>
                                </li>
    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <!-- Brand here ex: med zarroug -->
                        <img style="max-height:40px; max-width:40px;" src="administration/img/logo.png" alt="logo">
                    </a>
                    <button id="toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader"
                        aria-expanded="true" aria-label="Toggle navigation">
                        <div id="tog">
                            <svg style="max-height:40px; max-width:40px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56 56" style="enable-background:new 0 0 56 56;"
                                xml:space="preserve" width="512px" height="512px">
                                <g>
                                    <path d="M28,0C12.561,0,0,12.561,0,28s12.561,28,28,28s28-12.561,28-28S43.439,0,28,0z M28,54C13.663,54,2,42.336,2,28   S13.663,2,28,2s26,11.664,26,26S42.337,54,28,54z"
                                        fill="#FFFFFF" />
                                    <path d="M40,16H16c-0.553,0-1,0.448-1,1s0.447,1,1,1h24c0.553,0,1-0.448,1-1S40.553,16,40,16z" fill="#FFFFFF" />
                                    <path d="M40,27H16c-0.553,0-1,0.448-1,1s0.447,1,1,1h24c0.553,0,1-0.448,1-1S40.553,27,40,27z" fill="#FFFFFF" />
                                    <path d="M40,38H16c-0.553,0-1,0.448-1,1s0.447,1,1,1h24c0.553,0,1-0.448,1-1S40.553,38,40,38z" fill="#FFFFFF" />
                                </g>
                            </svg>
                        </div>
    
    
                    </button>
                </div>
            </div>
        </header>
        <div class="main" style="padding-top:150px;">
    
            </div>
        
            <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                <div class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5">
                        <div class="card round-card" >
                        <br>
                         <h4 class="card-title text-center">Educational Interactive Animations</h4>
                        <div class="card-body"><ul class="list-group">
                        <?php

                        
require 'administration/db.php';

$sql = "SELECT * FROM post where category = 'interactive'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='post.php?id=".$row["id"]."'><li class='list-group-item' ><b>".$row["title"]."</b> : ".$row["discription"]."</li></a>";
    }
} else {
    echo "0 results";
}



?> </ul>
                          </div>
                        </div>
                </div>
            </div>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p> Animation Learning Kids | Copyright 2018</p>
            </div>
        </footer>

    

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="administration/js/jquery.js"></script>
<script src="administration/js/popper.js"></script>   
<script src="administration/js/bootstrap.js"></script>   
</body>
</html>
