<?php
/* CRUD OPERATIONS BEGINS HERE PROPER*/

include_once 'dbconfig.php';

/* Beginning of code for data insert */
if(isset($_POST['save']))
{
    
     $sname	= $MySQLiconn->real_escape_string($_POST['s-name']);
     $songtype 	= $MySQLiconn->real_escape_string($_POST['songtype']);
     
   $SQL3 = $MySQLiconn->query("INSERT INTO song_details(song_name, song_type) VALUES('$sname','$songtype')");
  
   echo "Record finally inserted";
  
if(!$SQL3)
  {
   echo $MySQLiconn->error;
  } 

	
	mysql_close($conn);
}
	

?>
