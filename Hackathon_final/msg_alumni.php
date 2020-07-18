<?php
 include 'conn.php';

 $text=$_POST['message'];
 $name=$_POST['name'];

 $sql = "UPDATE alumni SET message = '$text' WHERE fname = '$name'  ";
 if(mysqli_query($con, $sql))
 {
 	//echo "Record updated successfully";
 	header('location:student.php');

} else {
    echo "Error updating record: " . mysqli_error($con);
}

?>