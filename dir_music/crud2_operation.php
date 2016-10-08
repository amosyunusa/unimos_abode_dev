<?php
/* CRUD OPERATIONS BEGINS HERE PROPER*/


include_once 'dbconfig.php';

/* Beginning of code for data insert */
if(isset($_POST['save']))
{
    
     $atitle = $MySQLiconn->real_escape_string($_POST['a-title']);
     $dor    = $MySQLiconn->real_escape_string($_POST['a-dor']);
     
     
 
   $SQL2 = $MySQLiconn->query("INSERT INTO album_details(a_title, a_date_of_release) VALUES('$atitle','$dor')");
  
   echo "Record inserted successfully.";
  if(!$SQL2)
  {
   echo $MySQLiconn->error;
  } 

	
	mysql_close($conn);
	}
	


?>
