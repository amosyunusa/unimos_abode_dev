<?php
include_once('main_action.php');

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
  <div id="logo"> <img src="images/photo2.jpg" alt="image"></div>
  <h1> DIR_<span style="color:black">music</span>_ALBUM</h1>
    <div id="logo2"> <img src="images/photo2.jpg" alt="image"></div>
  <div id="menu">
    <nav>
      <a href="index.php" class="link">Home</a>
        <a href="#Bot" class="link">View Output</a>

      </nav>
  </div>

<h6> A Web-based Directory that Manages your Musical Albums</h6>

</header>

<div id="container">



<aside id="left-pan">
<div id="article">
<h3> CRUD ASSIGNMENT</h3>
<p>This is a Musical Album Database that helps you keep the record of all the information about your albums
.
This Assignment is a test of my knowledge on CRUD which means<br/>
<ul>
<li>C= CREATE </li>
<li>R= READ </li>
<li>U= UPDATE</li>
<li>D= DELETE</li>
</ul>
</p>
<p>All these Operations are Database Operations which is the fundamental Knowledge on how to build a web Application Using PHP, MYSQL, HTML5 and JAVASCRIPT</p>
    <br/><br/>
<h3>Fill the form at your right-hand-side and evaluate how it works please <h3>


</div>


    <div id="info">
<form   method="post" >

<input id="artist" type="text" name="artist" placeholder=" Enter The Artist Name" value="<?php if(isset($_GET['edit'])) echo $getROW['artist_name'];?>"/><br/>

<input id="album_title" type="text" name="album_title" placeholder="Enter the title of the album" value="<?php if(isset($_GET['edit'])) echo $getROW['album_title'];?>"/> <br/>

<input id="song_name" type="text" name="song_name" placeholder="Enter the name of of the song." value="<?php if(isset($_GET['edit'])) echo $getROW['song_name'];?>"/> <br/>

<p>Select your Type of song</p>

<select id="musicTypes" name="musicType" multiple="multiple">
      <option selected="selected">R&B</option>
      <option>Jazz</option>
      <option>Blues</option>
      <option>New Age</option>
      <option>Classical</option>
      <option>Opera</option>
      <option>Hip-pop</option>
      <option>Afro-Bit</option>
      <option>Classic</option>
      <option>Country</option>
      <option>Acapella</option>
      </select>
<p><input id="btn" type="button" name="musicType" value="Click to add"/></p>
<br/>
<P>Click on the Browse Button to select the Audio File</p> 
	<input id="file" name="file" type="file" placeholder="Click to browse file"/><br/>


<input id="date" type="date" name="date" placeholder="Enter Date." value="<?php if(isset($_GET['edit'])) echo $getROW['date'];?>"/> 


  
<div>


<?php
if(isset($_GET['edit']))
{
 ?>
 <button type="submit" name="update">update</button>
 <?php
}
else
{
 ?>
    <br/>
 <button type="submit" name="save" onclick="return function form_validate();">save</button>
 <?php
}
?>

</div>

</form>

</div>



</aside>







</div>
</br></br></br></br>



<div id="container2">
    <a name="Bot">
<div id="table_header"><p><h1>Outputing the Content of the Database in a Table<h1><p></div>
<table>
 <thead>
<th>ID</th><th>ARTIST NAME</th>
<th>ALBUM TITLE</th> 
<th>SONG NAME</th> 
<th>MUSIC TYPE</th> 
<th>ALBUM</th> <th>DATE</th> 
<th>EDIT</th> <th> DELETE</th>
</thead>
<?php
$res = $MySQLiconn->query("SELECT * FROM album_info order by id");
while($row=$res->fetch_array())
{
 ?>
  
    
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['artist_name']; ?></td>
    <td><?php echo $row['album_title']; ?></td>
    <td><?php echo $row['song_name']; ?></td>
    <td><?php echo $row['music_type']; ?></td>
    <td><?php echo $row['album']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to edit !'); " >edit</a></td>
    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete !'); " >delete</a></td>
    </tr> 
<?php
}
?>

</table>
</div>

</center>
</body>
</html>
