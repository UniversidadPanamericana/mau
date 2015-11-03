<?php

require 'connection.php';

function ad_user($email,$password)
			{
			$sql = 'INSERT INTO guestbook (email,password)
			VALUES(:email,:password)';
				try {
	    				$db = conectar();
	    				$stmt = $db->prepare($sql);
	    				$stmt->bindParam('email', $email);
	    				$stmt->bindParam('password', $password);
	    				$stmt->execute();
	    				$db = null;
	  			} catch(PDOException $e)
	  			{
	    			echo 'Error: ' . $e->getMessage();
				}		
			}


	if(isset($_POST['submit']))
	{
		
		$email= $_POST['email'];
		$password= $_POST['password'];
		
		$email = strip_tags($email);
		$password = strip_tags($password);

		if (empty($password)|| empty($email))
		{
			echo "Please fill all the required fields";
		}
		
		else
		{
			
			ad_user($email,$password);	
			echo "User registered successfully";
		}
	}
?>