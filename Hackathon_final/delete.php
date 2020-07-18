<?php
   //Establish the connection
   $con=mysqli_connect('localhost','root');
   //Select database
   mysqli_select_db($con,'sessionpractical');
  // Select the Query
   $sql="DELETE FROM h_signin WHERE ID='$_GET[id]' ";
  // Execute the query
  if(mysqli_query($con,$sql))
  {
  	header("refresh:1;url=index.php");

  }
  else
  {   
     echo "Not deleted";
  }
?>