<?php  
 session_start();
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'sessionpractical');
 $name= $_SESSION['username'];
 if(!isset($_SESSION['username'])){
 	header('location:index.php');
    }
  
 ?>


 <!DOCTYPE html>
<html>
 <head>
    <title>Home page</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
   tr,td{
   border-style:2px solid black;
}
  </style>
 </head>
 <body>
 	<div class="container">
   
   <h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?></h2>
   <a href="logout.php">LOGOUT</a></br>
      <?php
       $con = mysqli_connect('localhost','root');
       mysqli_select_db($con,'sessionpractical');
         $sql= "SELECT * FROM alumni where fname ='$name' ";
         //echo $newID;
        $records = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($records))
        {   
        echo "<a href=delete.php?id=".$row['id']." >Delete</a>";	
        //eecho "<img></img>
        }
        
      ?>
      
  </br>
   
  </div>
 </body>
</html>