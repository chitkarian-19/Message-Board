<?php
   //Establish the connection
   $con=mysqli_connect('localhost','root');
   //Select database
   mysqli_select_db($con,'sessionpractical');
  // Select the Query
   $sql="DELETE FROM student WHERE ID='$_GET[id]' ";
   if(mysqli_query($con,$sql))
  {
  	header("refresh:1;url=index.php");

  }
  else
  {   
     echo "Not deleted";
  }
?>