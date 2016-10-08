<?php
/* CRUD OPERATIONS BEGINS HERE PROPER*/

include_once 'dbconfig.php';

/* Beginning of code for data insert */
if(isset($_POST['save']))
{
    
     $fname = $MySQLiconn->real_escape_string($_POST['f-name']);
     $lname = $MySQLiconn->real_escape_string($_POST['l-name']);
     $date  = $MySQLiconn->real_escape_string($_POST['date']);
     
 
   $SQL = $MySQLiconn->query("INSERT INTO artist_details(a_firstname, a_lastname, dob) VALUES('$fname','$lname','$date')");
  
   echo " Record Entered Successfully";
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 

	
	mysql_close($conn);
	}
	
?>
