<?php
include_once 'crud2_operation.php';
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
 
   
  

<h6> A Web-Based Directory That Manages Your Musical Albums Information.</h6>

</header>

<div id="container">
<div class="form">

<h3> Enter Your Album Information</h3><hr/>
<p>
<a href="index.php">Back</a> || <a href="song.php">Next</a>
</p>
<form method="post" action="song.php">
<table>
<tr>
<td><label for album title > Album Title </label></td>
<td><input type="text" name="a-title" placeholder="Enter The Title of your Album" value="<?php if(isset($_GET['edit'])) echo $getROW['a_title'];?>"/> </td>
</tr>
<br/>
<tr>
<td><label for album date of release > Date of Release </label></td>
<td><input type="date" name="a-dor" placeholder="Enter The Date of release"value="<?php if(isset($_GET['edit'])) echo $getROW['a_date_of_release'];?>"/> </td>

</tr>
<br/>


<tr>
<td>
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
 <button type="submit" name="save" onclick="return function form_validate();">Add</button>
 <?php
}
?>

</td>

<td> <img id="image" src="images/photo3.jpg" alt="photo"/></td>
</tr>
</table>
</form>
</div>
</div>
</center>
<div id="footer"> <p id= "foot">Copyright@DQ.Ltd</p> </div>
</body>
</html>

