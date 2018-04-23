<?php
	error_reporting(E_ALL); ini_set('display_errors', 1); 

	$ch = curl_init(); 

	// set url 
	curl_setopt($ch, CURLOPT_URL, "example.com"); 
	//return the transfer as a string 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

	// $output contains the output string 
	$output = curl_exec($ch); 

	if ( strlen($output) ) {
		echo '<h1>cURL works</h1>';
		echo '<h2>there is content received from example.com:</h2>';
		echo $output;
	} else {
		echo '<h1>cURL does not works</h1>';
	}


	// close curl resource to free up system resources 
	curl_close($ch);      
?>