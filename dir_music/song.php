<?php
include_once 'crud_song.php';

?>


<!DOCTYPE html>
<html>
<head>
<title> Album info </title>
<link rel="stylesheet" type="text/css" href="dir_music.css">
<script type="text/javascript" src="dir_music.js">  </script>
</head>
<body>
<center>
<header>

  <h1> DIR_<span style="color:coral">music</span>_ALBUM </h1>
  <div class="logo"> <img src="images/photo2.jpg" alt="image"> </div>
 
   
 
<h6> A Web-based Directory that Manages your Musical Albums</h6>

</header>

<div id="container">
<div class="form">
<h3>Enter Song Information</h3>
<hr/>
<p><a href="album_info.php">Back</a>||<a href="view.php">View</a></p>
<form method="post" action="view.php">
<table>
<tr>
<td>
<label for song name > Song Name: </label>
</td>
<td>
<input type="text" name="s-name" placeholder="Enter The Name of the song" value="<?php if(isset($_GET['edit'])) echo $getROW['song_name'];?>"/>
</td>
</tr>
<br/>
<tr>
<td>
<p>Select your Type of song</p>

<select id="musicTypes" name="songtype" multiple="multiple">
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
</td>

<td>
<p><input id="btn" type="button" name="musicType" value="Click to Add song Type"/></p>
</td>
</tr>
<br/>
<tr>
<td>
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
</td>

<td>

</td>
 </tr>
</table>
</form>
</div>
</div>

</center>
<div id="footer"> <p id="foot">Copyright@DigitalQuest.Ltd </p> </div>
</body>
</html>
