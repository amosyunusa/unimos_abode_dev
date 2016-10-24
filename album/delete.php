<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<?php
//including the database connection file
include("connection.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
//$result=mysqli_query($mysqli, "DELETE FROM album_info WHERE id=$id");
 
$result=mysqli_query($mysqli,DELETE TB1, TB2
    FROM artist_details
        LEFT JOIN album_details on TB1.id = TB2.id
    WHERE TB1.id = $id);


//redirecting to the display page (view.php in our case)
header("Location:view.php");
?>
