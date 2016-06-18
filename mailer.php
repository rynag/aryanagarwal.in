<?php
$TO = "aa232@snu.edu.in";
 
$h  = "From: " . $TO;
$message = "";
while (list($key, $val) = each($HTTP_POST_VARS)) {
  $message .= "$key : $val\n";
}
mail($TO, $subject, $message, $h);
 
Header("Location: http://www.aryanagarwal.in");
?>
