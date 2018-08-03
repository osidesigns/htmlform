<?php
	/*
	 *This simple script take the submitted string and display
	 *Hello, (value of string) to the User.
	 *Also checks if it is empty and sends the user back to the form.
	*/

	$firstName = $_GET['firstName'];

	if(!isset($firstName) || $firstName == null){
		echo "HEY! Go back and put something in the Box! <br /> <a href='index.html'>Click Here To Do So.</a>";
	}else{
		echo "Hello, " . $firstName;
	}


?>