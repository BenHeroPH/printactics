<?php
// Start a new session
session_start();

// Include the necessary files for the script
include("includes/db.php"); // database connection sa file
include("functions/functions.php"); // includes a file containing necessary functions

// A switch statement that checks for the value of the 'sAction' parameter in the HTTP request
switch($_REQUEST['sAction']){

  default :
    getProducts();
    break;
  case 'getPaginator':
    getPaginator();
    break;
}
?>
