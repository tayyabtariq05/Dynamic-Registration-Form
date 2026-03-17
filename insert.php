<?php
include_once 'connect.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['Firstname'];
	 $last_name = $_POST['Lastname'];
	 $Age = $_POST['Age'];
	 $email = $_POST['Email'];
     $Gender = $_POST['Gender'];
	 $sql = "INSERT INTO registration (Firstname,Lastname,Age,Email,Gender)
	 VALUES ('$first_name','$last_name','$Age','$email','$Gender')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>