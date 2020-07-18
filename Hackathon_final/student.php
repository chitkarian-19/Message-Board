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
   
   <h1 class="text-center text-success" >WELCOME <?php echo $_SESSION['username']; ?></h1>
   <a href="logout.php">LOGOUT</a></br>
      <?php
       $con = mysqli_connect('localhost','root');
       mysqli_select_db($con,'sessionpractical');
         $sql= "SELECT * FROM student where fname ='$name' ";
         //echo $newID;
        $records = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($records))
        {   
        echo "<a href=sdelete.php?id=".$row['id']." >Delete</a>";  
        //eecho "<img></img>
        }
        
      ?>

<div class="jumbotron">
<form action="insert_student.php" method="post">
<div class="form-group">
  <label>Type your first name</label>
  <input type="text" name="name" required></div></br>
      <label >Add your Queries</label>
<textarea class="form-control" rows="5" id="comment" name="Query" >Add your queries!!!!</textarea><br>
<button type="submit" class="btn btn-info btn-block">
Add Here</button>
<br>
   </form>
</div>


</div>
      
  </br>
   <div class="container">
   <div class="col-lg-12">
      <h4 class="text-warning">Replies</h4>
       <table class="table table-striped table-hover table-bordered ">
        <tr class=" bg-dark text-white text-center">
          
          <th>Message </th>
          
       </tr>
        
          <?php
           include 'conn.php';
          /* $fname = $_POST['fname'];
           $Interview = $_POST['Interview'];
           $Crack = $_POST['Crack'];*/
               $q = "select * from student where fname ='$name'";

             $query =mysqli_query($con,$q);
          while($res = mysqli_fetch_array($query)) {
        
          ?>
          <tr class="text-center">
             
             <td><?php echo $res['reply']; ?></td>
             
          </tr> 
          <?php
              }
          ?>

       </table>
   </div>
</div>
              <div class="container">
   <div class="col-lg-12">
      <h4 class="text-warning">Display Alumni</h4>
       <table class="table table-striped table-hover table-bordered ">
        <tr class=" bg-dark text-white text-center">
          <th>Name</th>
          <th>Interview Experience</th>
          <th>Crack skills</th>
          <th>Placement Opportunities</th>
          <th>Message </th>
          
       </tr>
        
          <?php
           include 'conn.php';
          /* $fname = $_POST['fname'];
           $Interview = $_POST['Interview'];
           $Crack = $_POST['Crack'];*/
             $q = "select * from alumni";

             $query =mysqli_query($con,$q);
          while($res = mysqli_fetch_array($query)) {
        
          ?>
          <tr class="text-center">
             <td><?php echo $res['fname']; ?></td>
             <td><?php echo $res['Interview']; ?></td>
             <td><?php echo $res['Crack']; ?></td>
             <td><?php echo $res['Placement']; ?></td>
             <td><button class="btn btn-danger"><a href="message_alumni.php?id=<?php echo $res['id']; ?>">Message</a></button></td>
            
          </tr> 
          <?php
              }
          ?>

       </table>
   </div>
</div>
  </div>
 </body>
</html>