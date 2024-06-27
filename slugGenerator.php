<?php 

function convertTitleToURL($str) { 
	
	// Convert string to lowercase 
	$str = strtolower($str); 
	
	// Replace special characters 
	// and spaces with hyphens 
	$str = preg_replace('/[^a-z0-9]+/', '-', $str);
    // /[^a-z0-9]+/
    echo $str;
    echo '<br>'; 
	
	// Trim hyphens from the beginning 
	// and ending of String 
	$str = trim($str, '-'); 
	
	return $str; 
} 

$str = "+Welcome to (GFG)))))))))) 2**2 3248659834"; 
$slug = convertTitleToURL($str); 

echo $slug; 

?>
