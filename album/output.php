<!DOCTYPE html>
<html lang="en">
<head>
<title> Output </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/dir_music.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
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

<h2> <p>Output of The Database Tables</p></h2>
<table class="tabout">
<thead>
<th>ID</th>
<th>FIRST NAME</th>
<th>LAST NAME</th> 
<th>DATE OF BIRTH</th> 
<th>ALBUM TITLE</th> 
<th>RELEASE DATE</th> 
<th>SONG NAME</th> 
<th>SONG TYPE</th>
<th>IMAGE</th>
<th>EDIT</th> 
<th> DELETE</th>
</thead>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "multiple_tbl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT A.id, A.a_firstname, A.a_lastname, A.dob, B.a_title, B.a_date_of_release, S.song_name, S.song_type,P.imgdata 
		 		FROM  artist_details A
				JOIN  album_details B 
				JOIN  song_details S
				JOIN  pix P
				WHERE A.id = B.id
				AND B.id = S.id
				AND S.id = P.id
				ORDER BY A.id, B.id, S.id";
select
    a.ID,
    b.model,
    c.color
from
    cars a
        join models b
            on a.model=b.ID
        join colors c
            on a.color=c.ID
        join brands d
            on a.brand=d.ID
and b.brand=d.ID
where
    b.ID=1




select
    A.id,
    B.a_title,
    C.song_name,
    D.imgdata;
from
    artist_details A
        join album_details B
            on A.a_title= b.id
        join song_details C
        join brands d
            on a.brand=d.ID
and b.brand=d.ID
where
    b.ID=1


//Anticipated Query Style

//SELECT A.id, A.a_firstname, A.a_lastname, A.dob
//FROM artist_details.id 
//JOIN Purchasing.ProductVendor pv
//ON p.ProductID = pv.ProductID
//JOIN Purchasing.Vendor v
//ON pv.BusinessEntityID = v.BusinessEntityID
//WHERE ProductSubcategoryID = 15
//ORDER BY v.Name;

//SELECT p.Name, v.Name
//FROM Production.Product p
//JOIN Purchasing.ProductVendor pv
//ON p.ProductID = pv.ProductID
//JOIN Purchasing.Vendor v
//ON pv.BusinessEntityID = v.BusinessEntityID
//WHERE ProductSubcategoryID = 15
//ORDER BY v.Name;


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      

   ?> 

<table class="tabout">
<tr id="trow">
    <td class="wid"><?php echo $row['id']; ?></td>
    <td class="wid"><?php echo $row['a_firstname']; ?></td>
    <td class="wid"><?php echo $row['a_lastname']; ?></td>
    <td class="wid"><?php echo $row['dob']; ?></td>
    <td class="wid"><?php echo $row['a_title']; ?></td>
    <td class="wid"><?php echo $row['a_date_of_release']; ?></td>
    <td class="wid"><?php echo $row['song_name']; ?></td>
    <td class="wid"><?php echo $row['song_type']; ?></td>
    <td class="wid"><?php echo $row['imgdata']; ?></td>
<td class="field"><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to edit !') " >edit</a></td>
<td class="field"><a href="?delete=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete!')">Delete</a></td>        
</tr> 
</table>

<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</center>
</body>
</html>
