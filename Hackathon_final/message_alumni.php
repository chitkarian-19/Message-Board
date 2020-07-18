<?php
 include 'conn.php';
  
  $id = $_GET['id'];
   $q = "select * from alumni";
        $query = mysqli_query($con,$q);
         $num = mysqli_num_rows($query);
         if($num==1)
         {
         	$_SESSION['username'] = $id;

         }
?>
<html>
 <head>Message Alumni</head>
 
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
 <body>
 	<marquee >You have to provide the username whom you want to message</marquee>
 	<div class="jumbotron center">
 	<form action="msg_alumni.php" method="post">
 		<div class="form-group">
    <textarea rows="20" cols="50" placeholder="Add message" name="message" class="form-control"></textarea>
        </div>
        <div class="form-group">
    <input type="text" name="name" class="form-control center" placeholder="Type the name">
        </div>
    <div class="form-group">
    <button type="submit" class="btn btn-success btn-block">Submit</button>
     </div>
   </form>
     </div>
 </body>


</html>