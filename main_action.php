
<?php
/* CRUD OPERATIONS BEGINS HERE PROPER*/


include_once 'db.php';

/* Beginning of code for data insert */
if(isset($_POST['save']))
{
    
     $artist = $MySQLiconn->real_escape_string($_POST['artist']);
     $albumTitle = $MySQLiconn->real_escape_string($_POST['album_title']);
     $songName = $MySQLiconn->real_escape_string($_POST['song_name']);
     $musicType = $MySQLiconn->real_escape_string($_POST['musicType']);
     $file = $MySQLiconn->real_escape_string($_POST['file']);
     $date= $MySQLiconn->real_escape_string($_POST['date']);
 
  $SQL = $MySQLiconn->query("INSERT INTO album_info(artist_name, album_title, song_name, music_type, album, date) VALUES('$artist','$albumTitle','$songName','$musicType','$file','$date')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 

	
	mysql_close($conn);
	}
	else
	{
}
/*End of code for data insert */



/*Beginning of code for data delete */
if(isset($_GET['del']))
{
 $SQL = $MySQLiconn->query("DELETE FROM album_info WHERE id=".$_GET['del']);
 header("Location: index.php");
}
/* End of code for data delete */



/*Beginning of code for data update */
if(isset($_GET['edit']))
{
 $SQL = $MySQLiconn->query("SELECT * FROM album_info WHERE id=".$_GET['edit']);
 $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{

 $SQL = $MySQLiconn->query("UPDATE album_info SET artist_name='".$_POST['artist']."' , album_title='".$_POST['album_title']."', song_name='".$_POST['song_name']."', music_type='".$_POST['musicType']."', album='".$_POST['album']."', date='".$_POST['date']."' WHERE id=".$_GET['edit']);
 header("Location: index.php");
}
/*End of code for data update */
?>


