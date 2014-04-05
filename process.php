<?php
// Get Data	
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "bookman108@gmail.com", "this4bliss interest",
"Email: $email\nMessage: $message\n",
"From: Forms <subscribe@this4bliss.com>" );

$file = "records.csv";
$data = $email.",".$message."\n";
$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $data) or die("Couldn't write values to file!"); 

fclose($fp); 
echo "Saved to $file successfully!";

?>