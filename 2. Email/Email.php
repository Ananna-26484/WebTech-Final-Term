<?php
if(isset($_GET['submit']))
{
	
    $email=$_GET['email'];
	if(strlen($email)>0)
	{
		echo"Email:  ";
        echo $email ;      
		
	}
	else
	{
		echo "email can not be empty";
    }   
	    
}

?>