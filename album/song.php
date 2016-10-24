<?php
 // starting a session
 session_start();
// assigning session variables to post variables

	        $_SESSION['s-name']  = htmlentities($_POST['s-name']);
	        $_SESSION['songtype'] = htmlentities($_POST['songtype']);

?>


<!DOCTYPE html>
<html>
<head>
<title> Song Infomation </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/dir_music.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
	<script src="formvalidation3.js"></script>

<script type="text/javascript" src="dir_music.js">  </script>
</head>
<body>
<center>
<header>

  <h1> DIR_<span id="duo">music</span>_ALBUM </h1>
  <div class="logo"> <img src="images/photo2.jpg" alt="image"> </div>
 
    <form id="search">
  Search Google:
  <input type="search" name="googlesearch">
</form>
 
<h6> A Web-based Directory that Manages your Musical Albums</h6>

</header>
<nav id="menu">
<a href="index.php">Artiste Info.</a>
<a href="album_info.php">Album Info.</a>
<a href="song.php">Song Info.</a>
<a href="photo.php">Upload Photo.</a>
<a href="insert.php">Verify Insert</a>
<a href="view.php">View</a>
</nav>
<div id="container">
<div class="form">
<h3>Enter Song Information</h3>
<hr/>

<form method="POST" action="song.php" name="song" onsubmit="return(validates())";>
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
</td>

<td>


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
</tr>
<br/>
<tr>
<td>
<img id="image" src="images/photo3.jpg" alt="photo"/>
</td>

<td>
 
 <button type="submit" name="save">add</button>


</td>
 </tr>
</table>
</form>

 


<p id="para">Enter Your Song details and Click on the View link on the Menu above to view your entire records</p>
</div>

</div>

</center>
<div id="footer"> <p id="foot">Copyright@DigitalQuest.Ltd </p> </div>
</body>
</html>
