<?php
	/*
	 *This simple script take the submitted string and display
	 *Hello, (value of string) to the User.
	 *Also checks if it is empty and sends the user back to the form.
	*/

	$firstName = null;

	if(isset($firstName)){
		echo "Hello, " . $firstName;
	}else{
		echo "HEY! Go back and put something in the Box! <br /> <a href='index.html'>Click Here To Do So.</a>";
	}


?>