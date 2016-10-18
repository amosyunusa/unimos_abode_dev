<?php
//start a session 
 session_start();

// want to test if the input filled in  the first form are moved to this page
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Insert </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/dir_music.css">
  <script type="text/javascript" src="dir_music.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/formvalidation.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</head>
<body>
<center>
<header>
<h1> DIR_<span id="duo">music</span>_ALBUM </h1>
 <div class ="logo"> <img src="images/photo2.jpg" alt="image"> </div>
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
<a href="insert.php"> Verify Insert</a>
<a href="output.php">View</a>
</nav>
<div id="container">

<div class="form">
<?php

 
if((empty($_SESSION['firstname']))||
   (empty($_SESSION['lastname']))|| 
   (empty($_SESSION['date']))||
   (empty($_SESSION['albumtitle']))|| 
   (empty($_SESSION['albumdor'])) || 
   (empty($_SESSION['s-name'])) || 
   (empty($_SESSION['songtype']))){
	
	echo "Go back and fill all the form fields completely";
}else{
	echo $_SESSION['firstname']." "." is my First Name"."<br/>";
	echo $_SESSION['lastname']." "." is my Lastname"."<br/>";
	echo $_SESSION['date']." "."is my Date of Birth"."</br>";
	echo $_SESSION['albumtitle']." "." is the title of my album"."<br/>";
	echo $_SESSION['albumdor']." "." is my Date of release"."<br/>";
	echo $_SESSION['s-name']." "." is my Song name"."<br/>";
	echo $_SESSION['songtype']." "." is my song type"."<br/>";
//include database connection script
include_once 'dbconfig.php';
//first query
$sql1 = "INSERT INTO artist_details(a_firstname, a_lastname, dob) VALUES ('{$_SESSION['firstname']}','{$_SESSION['lastname']}', '{$_SESSION['date']}')"; 

//second query	
$sql2 = "INSERT INTO album_details(a_title, a_date_of_release) VALUES ('{$_SESSION['albumtitle']}','{$_SESSION['albumdor']}')";

//third query 
$sql3 = "INSERT INTO song_details(song_name, song_type) VALUES ('{$_SESSION['s-name']}','{$_SESSION['songtype']}')";


if(($conn->multi_query($sql1)) && ($conn->multi_query($sql2)) && ($conn->multi_query($sql3)) === TRUE){
                            
echo "<p>"." Records successfully entered"."</p>";

}else{
echo "Record Insertion Failed";
$conn->close();
}
}
?>
</p>
</div>
</div>
</center>




<div id="footer"> <p id="foot">Copyright@DQ.Ltd </p> </div>
</body>
</html>
