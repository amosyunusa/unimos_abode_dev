

<!DOCTYPE html>
<html lang="en">
<head>
<title> Upload Image </title>
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
<a href="photo.php">Upload Photo.</a>
<a href="insert.php"> Verify Insert</a>
<a href="output.php">View</a>
</nav>
<div id="container">

<div class="form">

<hr>
<h2>Please upload a new picture and title</h2>

    <form enctype="multipart/form-data" method="POST" action="photoinsert.php">
        <table>
            <tr>
                <td>
                <input type="file" name="imageUpload" id="imageUpload">
                </td>
            </tr>
                <tr>
                <td>
                    Image Title:<input type="text"  name="title" id="title">
                </td>
                </tr>
            <tr>
                <td>
                <input type="submit" name="submit" value="submit">
               </td>
            </tr
        </table>
    </form>
<hr>

</div>

</div>
</center>






</body>

</html>



