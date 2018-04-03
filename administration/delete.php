<?php
$id = intval($_GET['id']);

require 'db.php';

$sql = "Delete FROM post where id=$id";
$mysqli->query($sql);



$path = "up/".$id;
unlink("up/".$id."/post.swf"); 
if(!rmdir($path))
  {
  echo ("Could not remove $path");
  }else{
    header( "refresh:0;url=profile.php" );
  }




?>