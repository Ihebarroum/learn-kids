<?php

$id = intval($_GET['id']);



//check if form was submitted
if(isset($_POST['submitButton'])){ 
    // Escape all $_POST variables to protect against SQL injections
    $post_title = $mysqli->escape_string($_POST['title']);
    $post_discription = $mysqli->escape_string($_POST['discription']);
    $post_category = $mysqli->escape_string($_POST['category']);
   
    $sql = "Update post set title = '$post_title', discription = '$post_discription' ,category = '$post_category' where id = $id";
    
    if ( $mysqli->query($sql) ){

        echo "poste updated succesfuly";
        header( "refresh:0;url=profile.php" );

    }
    else {
        echo "There was an error posting this !";
    }

}  


?>