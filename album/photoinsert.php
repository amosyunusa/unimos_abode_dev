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
        <a href="show.php">View</a>
    </nav>
    <div id="container">

        <div class="form">
<?php
//preparing the image to be uploaded.

if (!$_FILES['imageUpload']['error']) {

    //Process the image that is uploaded by the user

    $target_dir = "uploads/" . $_FILES['imageUpload']['name'];


    //$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);

    //$uploadOk = 1;
    //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    //echo $target_file;

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_dir)) {
        echo "The file " . basename($_FILES['imageUpload']['name']) . " has been uploaded."."<br/>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image = basename($_FILES["imageUpload"]["name"], ".jpg"); // used to store the filename in a variable
    $title= $_POST["title"];
// Connect to database
$con=mysqli_connect("localhost","root","pass","multiple_tbl");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    //stored in  the data in your database


// Perform queries
    mysqli_query($con, "INSERT INTO pix (title, imgdata)VALUES ('$title','$image')");
        echo "And image correctly Inserted into the database"."<br/>";


    mysqli_close($con);


}


echo "<a  href='output.php'>"."click to view output"."</a>";
?>

        </div>

    </div>
</center>






</body>

</html>
