<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<table class="table table-striped table-hover table-bordered ">
        <tr class=" bg-dark text-white text-center">
          <th>id</th>
          <th>fname</th>
          <th>lname</th>
          <th>password</th>
          <th>email </th>
          <th>delete </th>
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
             <td><?php echo $res['id']; ?></td>
             <td><?php echo $res['fname']; ?></td>
             <td><?php echo $res['lname']; ?></td>
             <td><?php echo $res['password']; ?></td>
             <td><?php echo $res['email']; ?></td>
             <td><button class="btn btn-danger"><a style="color:black;" href="adelete.php?id=<?php echo $res['id']; ?>">delete</a></button></td>
           
          </tr> 

          <?php
              }
          ?>

       </table>

      <a href="Stable.php" >Click Here to see Student page and upload the changes</a>
   </div>
	</body>
	</html>