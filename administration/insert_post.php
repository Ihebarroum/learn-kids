<?php

require 'db.php';



//check if form was submitted
if(isset($_POST['submitButton'])){ 
    // Escape all $_POST variables to protect against SQL injections
    $post_title = $mysqli->escape_string($_POST['title']);
    $post_discription = $mysqli->escape_string($_POST['discription']);
    $post_category = $mysqli->escape_string($_POST['category']);
   
    $sql = "INSERT INTO post (title, discription,category) " 
    . "VALUES ('$post_title','$post_discription','$post_category')";
    
    if ( $mysqli->query($sql) ){

        echo "posted succesfuly";
    }
    else {
        echo "There was an error posting this !";
    }

}  


?>