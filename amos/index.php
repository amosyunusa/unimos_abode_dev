
<?php
// starting my session
   session_start();
// assigning session variables to post    
	$_SESSION['firstname'] = htmlentities($_POST['f-name']);
	$_SESSION['lastname'] = htmlentities($_POST['l-name']);
        $_SESSION['date']   = htmlentities($_POST['date']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Home </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/dir_music.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
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
<a href="insert.php">Insert</a>
<a href="output.php">View</a>
</nav>

<div id="container">
<div class="form">

<h3> Enter Your Bio-Data</h3>
<hr/>

<form method="POST" action="" name="artist" onsubmit="return validate();">
 
<table id="tab">
<tr>
<td><label for artiste Firstname > Artiste First Name </label></td>
<td><input type="text" name="f-name" placeholder="Enter your first name" value="<?php if(isset($_GET['edit'])) echo $getROW['a_firstname'];?>"/></td>
</tr>

<br/>
<tr><td><label for artist Last name > Artiste Surname </label></td>
<td><input type="text" name="l-name" placeholder="Enter your surename" value="<?php if(isset($_GET['edit'])) echo $getROW['a_lastname'];?>"/>
</td>
</tr>
<br/>

<tr><td><label for artist Date of Birth > Date of Birth </label></td>
<td><input type="date" name="date" id="datepicker" placeholder="Click to Select Date" value="<?php if(isset($_GET['edit'])) echo $getROW['dob'];?>"/><br/></td>
</tr>
<tr>
<td>
<img id="image" src="images/photo3.jpg" alt="photo"/>
</td>
<td>
<div>

 <button type="submit" name="add" >add</button>
 
</div>
</td>


</tr>

 </table>
</form>
<p id="para">Enter Your Details and Click on the ADD button and then click on Album Info link on the Menu above to continue</p>
</div>

</div>
</center>

<div id="footer"> <p id="foot">Copyright@DQ.Ltd </p> </div>
</body>
</html>
