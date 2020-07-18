<?php
 include 'conn.php';

 $text=$_POST['message'];
 

 $sql = "UPDATE student SET reply = '$text'   ";
 if(mysqli_query($con, $sql))
 {
 	//echo "Record updated successfully";
 	header('location:alumni.php');

} else {
    echo "Error updating record: " . mysqli_error($con);
}

?>