<?php
	
	$name=$_REQUEST['medname'];
	// Open the text file
	$f = fopen("textfile.txt", "w");

	// Write text line
	fwrite($f, $name); 

	// Close the text file
	fclose($f);

	// Open file for reading, and read the line
	$f = fopen("textfile.txt", "r");
	echo fgets($f); 

	fclose($f);

	?>
