<?php

// ALICE'S ADVENTURES IN WONDERLAND Word count 1/15/2019
// Christian Kim Escamilla

// Get the contents of alice.txt
$file = file_get_contents("alice.txt");

// Replace the contents to lower case
$file = strtolower($file);

$pattern = "/[^a-z0-9 ]/i";
// Remove special characters and replace blank space
$file = preg_replace($pattern,' ',$file);

// Count the number of words and specifies the return value of the str_word_count()
$array = str_word_count($file, 2) ; 

// Count the values of the array
$arrayval = array_count_values($array);

// sort to ascending
arsort($arrayval);

foreach ($arrayval as $string => $count) {
	// Display the words and the number of times it occured
    echo "$string = $count<br>";
}

?>