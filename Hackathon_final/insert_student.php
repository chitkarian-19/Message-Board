<?php
session_start();
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'sessionpractical');
   $fname=$_POST['name'];
   
   //$fname=$_POST['name'];
   $Q=$_POST['Query'];
   $query= "select * from student where fname= '$fname' ";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
      if($num==1)
      {
        $qy= " UPDATE student SET query = '$Q' where fname = '$fname' ";
        //$qy="insert into alumni (Placement,Crack,Interview) values ('$Placement','$Crack','$Interview')";
    
        mysqli_query($con,$qy);
       
        //$_SESSION['username'] = $fname;
        header('location:student.php');
       
      }
      else
      {
        header('location:index.php');
      }
?>