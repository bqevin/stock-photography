<?php

// These are the DBMS credentials
$hostName = "localhost";
$username = "amn_stocker";
$password = "Token2016";

// Show an error and stop the script
function showerror()
{
   if (mysql_error())
      die("Error " . mysql_errno() . " : " . mysql_error());
   else
      die("Could not connect to the DBMS");
}

// Secure the user data by escaping characters
// and shortening the input string
function clean($input, $maxlength)
{
  $input = substr($input, 0, $maxlength);
  $input = EscapeShellCmd($input);
  return ($input);
}

?>
