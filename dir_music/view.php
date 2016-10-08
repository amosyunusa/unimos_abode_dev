<?php
include_once('dbconfig.php');

?>

<!DOCTYPE html>
<html>
<head>
<title> Home </title>
<link rel="stylesheet" type="text/css" href="dir_music.css">
<script type="text/javascript" src="dir_music.js">  </script>
</head>
<body>
<center>
<header>
  <div class="logo"> <img src="images/photo2.jpg" alt="image"></div>
  <h1> DIR_<span style="color:coral">music</span>_ALBUM</h1>
    
  

<h6> A Web-Based Directory That Manages Your Musical Albums Information.</h6>

</header>

<div id="container2">
<p><a href="index.php">Go Back Home</a></p>
 <h2> <p>Output of The Database Tables</p></h2>
<table>
 <thead>
<th>ID</th>
<th>FIRST NAME</th>
<th>LAST NAME</th> 
<th>DATE OF BIRTH</th> 
<th>ALBUM TITLE</th> 
<th>DATE OF REALEASE</th> 
<th>SONG NAME</th> 
<th>SONG TYPE</th>  
<th>EDIT</th> <th> DELETE</th>
</thead>

  
<?php

   $res = $MySQLiconn->query("SELECT A.id, A.a_firstname, A.a_lastname, A.dob, B.a_title, B.a_date_of_release, S.song_name, S.song_type 
		 		FROM  artist_details A
				JOIN  album_details B 
				JOIN  song_details S
				WHERE A.id = B.id
				AND B.id = S.id
				ORDER BY A.id, B.id");
 //loop to show each records     
while($row=$res->fetch_array())
{
 ?>  

    <tr>
    <td class="field"><?php echo $row['id']; ?></td>
    <td class="field"><?php echo $row['a_firstname']; ?></td>
    <td class="field"><?php echo $row['a_lastname']; ?></td>
    <td class="field"><?php echo $row['dob']; ?></td>
    <td class="field"><?php echo $row['a_title']; ?></td>
    <td class="field"><?php echo $row['a_date_of_release']; ?></td>
    <td class="field"><?php echo $row['song_name']; ?></td>
    <td class="field"><?php echo $row['song_type']; ?></td>
    <td class="field"><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to edit !'); " >edit</a></td>
    <td class="field"><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete !'); " >delete</a></td>
    </tr> 
<?php
}
?>

</table>
</div>

</center>
</body>
</html>
