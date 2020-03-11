<?php
  // Create database questionnaireion
  include('classes/conn_blog.php');

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) 
  {
  	$first = mysqli_real_escape_string($connect, $_POST['name']);       
	$email = mysqli_real_escape_string($connect, $_POST['email']);        
	$fconnectck = mysqli_real_escape_string($connect, $_POST['optradio']);             
	$testimony = mysqli_real_escape_string($connect, $_POST['message']);
  	$file = $_FILES['file']['name'];
  	
  	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $random_directory = substr(str_shuffle($chars), 0, 15);

  	// image file directory
  	$target = "files/". $random_directory . ''.basename($file);

  	$sql = "INSERT INTO testimonies (name, email, feeconnectack, testimony, file) VALUES ('$first', '$email', '$fconnectck', '$testimony', '$random_directory$file')";
  	// execute query
  	mysqli_query($connect, $sql);

  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($connect, "SELECT * FROM testimonies ");
?>