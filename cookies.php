<?php

	include('classes/connect.php');
	
	if(isset($_POST['name']) && isset($_POST['email']))
	{
		$first = $_POST['name'];   
		$email = $_POST['email']; 
					 		
		$query = mysql_query( "SELECT * FROM data_collection WHERE email = '$email'");
        
		if(mysql_num_rows($query) > 0)
		{
			echo "Email already exists!";
		}else{
				mysql_query( "INSERT data_collection (name, email)
		                VALUES('$first', '$email')");
		   }

	    header("location: home.php");
	}
	 
	mysql_close();
	
?>