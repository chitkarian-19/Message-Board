<?php
   session_start();
  $con=mysqli_connect('localhost','root');
   if($con)
   {
    echo "Connection Successful";
   }
   else{
    echo "Connection Not Established";
   }
   mysqli_select_db($con,'sessionpractical');

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contact=$_POST['contact'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    //$alu=$_POST['alu'];
    //$img=$_POST['file'];
    $query= "select * from student where fname='$fname' && lname='$lname' && contact='$contact' && email='$mail' ";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
      if($num==1)
      {
        echo "This is a duplicate username";
        header('location:index.php');
      }
      else
      {
        $qy="insert into student (fname,lname,password,email,contact) values ('$fname','$lname','$password','$mail','$contact' ) ";
    
        mysqli_query($con,$qy);
        $_SESSION['username'] = $fname;
        header('location:student.php');
      }

?>
