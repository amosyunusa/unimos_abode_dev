<?php
//start a new session again
session_start();

 // assigning session variables to post
 	$_SESSION['albumtitle'] = htmlentities($_POST['a-title']);
	$_SESSION['albumdor'] = htmlentities($_POST['a-dor']);
?>
<!DOCTYPE html>
<html>
<head>
<title> Album information</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/dir_music.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/formvalidation1.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</head>
<body>
<center>
<header>
 <h1> DIR_<span style="color:coral">music</span>_ALBUM </h1>
  <div class="logo"> <img src="images/photo2.jpg" alt="image"> </div>
  <form id="search">
  Search Google:
  <input type="search" name="googlesearch">
</form>
   
  

<h6> A Web-Based Directory That Manages Your Musical Albums Information.</h6>

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


<h3> Enter Your Album Information</h3><hr/>


<form method="POST" action="" name="album" onsubmit="return validatea()";>
<table>
<tr>
<td><label for album title > Album Title </label></td>
<td><input type="text" id="name" name="a-title" placeholder="Enter The Title of your Album" value="<?php if(isset($_GET['edit'])) echo $getROW['a_title'];?>"/> </td>
</tr>
<br/>
<tr>
<td><label for album date of release > Date of Release </label></td>
<td><input type="date" name="a-dor" id="datepicker" placeholder="Click to Select Date"value="<?php if(isset($_GET['edit'])) echo $getROW['a_date_of_release'];?>"/> </td>

</tr>
<br/>


<tr>
<td>
<img id="image" src="images/photo3.jpg" alt="photo"/>
</td>

<td> 

 <button type="submit" name="add">Add</button>

</td>
</tr>
</table>
</form>
<p id="para">Enter Your Album Information and Click on the Song Info link on the Menu above to continue</p>
</div>
</div>
</center>
<div id="footer"> <p id= "foot">Copyright@DQ.Ltd</p> </div>
</body>
</html>

