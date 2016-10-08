
<!DOCTYPE html>
<html lang="en">
<head>
<title> Home </title>
<link rel="stylesheet" type="text/css" href="dir_music.css">
<script type="text/javascript" src="dir_music.js">  </script>
</head>
<body>
<center>
<header>
<h1> DIR_<span style="color:coral">music</span>_ALBUM </h1>
  <div class ="logo"> <img src="images/photo2.jpg" alt="image"> </div>
 
    
  
 

<h6> A Web-Based Directory That Manages Your Musical Albums Information.</h6>

</header>

<div id="container">
<div class="form">
<h3> Enter You Bio-Data</h3>
<hr/>
<p><a href="album_info.php">Next</a></p>

<form method="post" action="album_info.php">
 
<table id="tab">
<tr>
<td><label for artiste Firstname > Artiste First Name </label></td>
<td><input type="text" name="f-name" placeholder="Enter your first name" value="<?php if(isset($_GET['edit'])) echo $getROW['a_firstname'];?>"/></td>
</tr>

<br/>
<tr><td><label for artist Last name > Artiste Surname </label></td>
<td><input type="text" name="l-name" placeholder="Enter your sure-name"value="<?php if(isset($_GET['edit'])) echo $getROW['a_lastname'];?>"/>
</td>
</tr>
<br/>

<tr><td><label for artist Date of Birth > Date of Birth </label></td>
<td><input type="date" name="date" placeholder="Enter your Date of Birth" value="<?php if(isset($_GET['edit'])) echo $getROW['dob'];?>"/><br/></td>
</tr>



<tr>
<td>
<img id="image" src="images/photo3.jpg" alt="photo"/>
</td>
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
 <button type="submit" name="save">Add</button>
 <?php
}
?>

</div>
</td>


</tr>




 </table>
</form>

</div>
<?php
include_once 'crud_operation.php';
?>
</div>
</center>

<div id="footer"> <p id="foot">Copyright@DQ.Ltd </p> </div>
</body>
</html>
