<?php
session_start();
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'sessionpractical');
   $fname=$_POST['name'];
   $Placement=$_POST['Placement'];
   $Crack=$_POST['Crack'];
   $Interview=$_POST['Interview'];
   $query= "select * from alumni where fname= '$fname' ";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
      if($num==1)
      {
        $qy= " UPDATE alumni SET Placement = '$Placement'   where fname = '$fname' ";
        //$qy="insert into alumni (Placement,Crack,Interview) values ('$Placement','$Crack','$Interview')";
    
        mysqli_query($con,$qy);
        $qy= " UPDATE alumni SET Interview = '$Interview'   where fname = '$fname' ";
        mysqli_query($con,$qy);
         $qy= " UPDATE alumni SET Crack = '$Crack'   where fname = '$fname' ";
        mysqli_query($con,$qy);
        //$_SESSION['username'] = $fname;
        header('location:alumni.php');
       
      }
      else
      {
        header('location:index.php');
      }
?>