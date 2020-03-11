<?php
    
	include('classes/connect.php');
	
	if(isset($_POST['name']) && isset($_POST['email']))
	{
		$first = $_POST['name'];   
		$email = $_POST['email']; 
					 		
		$query = mysql_query( "SELECT * FROM megazine_downloads WHERE email = '$email'");
        
		if(mysql_num_rows($query) > 0)
		{
			echo "Email already exists!";
		}else{
				mysql_query( "INSERT megazine_downloads (name, email)
		                VALUES('$first', '$email')");
		   }

	    header("location: download_megazine_70832bxzbbusk-sklhvso_079nk7980.php");
	}
	 
	mysql_close();
	
?>